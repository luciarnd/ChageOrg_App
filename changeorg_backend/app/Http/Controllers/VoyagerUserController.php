<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\User;

class VoyagerUserController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/users/firmas",
     *      tags={"Users"},
     *      summary="Firmas del usuario",
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

    public function peticionesFirmadas(Request $request)
    {
        $id = Auth::id();
        $usuario = User::findOrFail($id);
        $peticiones = $usuario->firmas;
        return $peticiones;
    }
}
