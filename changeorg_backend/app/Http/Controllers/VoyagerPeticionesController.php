<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Peticiones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Models\Category;


class VoyagerPeticionesController extends VoyagerBaseController
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    /**
     * @OA\Get(
     *      path="/api/peticiones/listado",
     *      tags={"Peticiones"},
     *      summary="Get list of peticiones",
     *      description="Returns list of peticiones",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */

    public function index(Request $request)
    {
        $peticiones = Peticiones::all();
        return $peticiones;
    }


    public function indexPaginated(Request $request)
    {
        $peticiones = Peticiones::jsonPaginate();
        return $peticiones;
    }

    /**
     * @OA\Get(
     *      path="/api/peticion/{id}",
     *      tags={"Peticiones"},
     *      summary="Get a peticion",
     *      description="Returns one peticion",
     *     @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */

    public function show(Request $request, $id)
    {
        $peticion = Peticiones::findOrFail($id);
        return $peticion;
    }

    /**
     * @OA\Get(
     *      path="/api/mispeticiones",
     *      tags={"Peticiones"},
     *      summary="Gets your peticiones",
     *      description="Returns a list of your peticiones",
     *      security={{"bearerAuth":{}}},
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */

    public function showPeticionesByUser(Request $request) {
        //parent::index();
        $id = Auth::user()->id;
        $peticionesuser = Peticiones::all()->where('user_id', '=' , $id);
        return $peticionesuser;
    }

    /**
     * @OA\Put(
     *      path="/api/peticiones/edit/{id}",
     *      tags={"Peticiones"},
     *      summary="Update existing peticion",
     *      description="Returns updated peticion data",
     *     security={{"bearerAuth":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
         *     @OA\JsonContent(
         *      @OA\Property(property="", type="string", format="text", example=""),
         *    ),
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * )
     */

    public function update(Request $request, $id) {
        $peticion = Peticiones::findOrFail($id);
        if ($request->user()->cannot('update', $peticion)) {
            return response()->json(['message' => 'No estás autorizado para realizar esta acción'], 403);
        }
        $peticion->update($request->all());
        return $peticion;
    }

    /**
     * @OA\Get(
     *      path="/api/peticiones/firmar/{id}",
     *      tags={"Peticiones"},
     *      summary="Firmas una peticion",
     *      security={{"bearerAuth":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */

    public function firmar(Request $request, $id)
    {
        try {
            $peticion = Peticiones::findOrFail($id);
            $user = Auth::user();
            $firmas = $peticion->firmas;
            if (sizeof($firmas) != 0) {
                foreach ($firmas as $firma) {
                    if ($firma->id == $user->id) {
                        return response()->json(['message' => 'Ya has firmado esta peticion'], 403);
                    }
                }
            }

            $users_id = [$user->id];
            $peticion->firmas()->attach($users_id);
            $peticion->firmantes = $peticion->firmantes + 1;
            $peticion->save();
            return response()->json(['message' => 'Peticion firmada con exito', 'peticion' => $peticion], 201);
        } catch (\Throwable$th) {
            return response()->json(['message' => 'La peticion no se ha podido firmar'], 500);
        }

    }

    /**
     * @OA\Post(
     * path="/api/peticion",
     * description="Post a peticion",
     * tags={"Peticiones"},
     * security={{"bearerAuth":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass peticion info",
     *    @OA\JsonContent(
     *       required={"titulo","descripcion", "destinatario", "categoria_id"},
     *       @OA\Property(property="titulo", type="string", format="text", example=""),
     *       @OA\Property(property="descripcion", type="string", format="text", example=""),
     *       @OA\Property(property="destinatario", type="string", format="text", example=""),
     *       @OA\Property(property="categoria_id", type="integer", format="number", example=""),
     *    ),
     * ),
     *     @OA\Response(
     *    response=422,
     *    description="Wrong response",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Sorry, wrong data introduced")
     *        )
     *     )
     * ),
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'titulo' => 'required|max:255',
                'descripcion' => 'required',
                'destinatario' => 'required',
                'categoria_id' => 'required'
            ]
        );
        if($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $validator = Validator::make($request->all(),
        [
            'image' => 'required|max:4096',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
            Storage::put($name, file_get_contents($request->file('image')->getRealPath()));
            $file->move('storage/', $name);
            $input['image'] = $name;
        }

            $categoria = Category::findOrFail($input['categoria_id']);
            $user = Auth::user(); //asociarlo al usuario authenticado
            $peticion = new Peticiones($input);
            $peticion->user()->associate($user);
            $peticion->categoria()->associate($categoria);
            $peticion->firmantes = 0;
            $peticion->estado = 'pendiente';
            $peticion->image = $input['image'];
            $peticion->save();

            $imgdb = new File();
            $imgdb->name = $input['image'];
            $imgdb->peticiones_id = $peticion->id;
            $imgdb->save();

            return $peticion;

    }

    /**
     * @OA\Put(
     *      path="/api/peticiones/estado/{id}",
     *      tags={"Peticiones"},
     *      summary="Cambiar estado de peticion",
     *     security={{"bearerAuth":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * )
     */

    public function cambiarEstado(Request $request, $id)
    {
        $peticion = Peticiones::findOrFail($id);
        if ($request->user()->can('cambiarEstado', $peticion)) {
            $peticion->estado = 'aceptada';
            $peticion->save();
            return response()->json(['message' => 'Peticion actualizada satisfactioriamente', 'peticion' => $peticion]);
        } else if ($request->user()->cannot('cambiarEstado', $peticion)) {
            return response()->json(['message' => 'No estás autorizado para realizar esta acción'], 403);
        } else {
            return response()->json(['message' => 'Error actualizando la peticion'], 500);
        }
    }

    /**
     * @OA\Delete(
     *      path="/api/peticiones/delete/{id}",
     *      tags={"Peticiones"},
     *      summary="Delete existing peticion",
     *      description="Deletes a record and returns no content",
     *     security={{"bearerAuth":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */

    public function destroy(Request $request, $id) {
        $peticion = Peticiones::findOrFail($id);
        if ($request->user()->cannot('delete', $peticion)) {
            return response()->json(['message' => 'No estás autorizado para realizar esta acción'], 403);
        }
        $peticion->delete();
        return $peticion;
    }
}
