<?php

namespace App\Policies;

use App\Models\Peticiones;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class PeticionesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Peticiones  $peticiones
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Peticiones $peticiones)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Peticiones  $peticiones
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Peticiones $peticione)
    {
        return $user->role_id==1
            ? Response::allow()
            : Response::deny('You are not allowed to perform this action.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Peticiones  $peticiones
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Peticiones $peticiones)
    {
        return $user->role_id==1
            ? Response::allow()
            : Response::deny('You are not allowed to perform this action.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Peticiones  $peticiones
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Peticiones $peticiones)
    {
        //
    }

    public function firmar(User $user, Peticiones $peticione){
        return false;
    }


    public function before(User $user, string $ability)
    {

        if ($user->isAdministrator()) {
            return true;
        }else{
            return false;
        }
    }

    public function cambiarEstado(User $user, Peticiones $peticione){
        return false;
    }
}
