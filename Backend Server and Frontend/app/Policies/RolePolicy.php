<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use App\Models\Role;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

        /**
     * Determine whether the user can see the roles.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    // public function create(User $user)
    // {
    //     return $user->isAdmin();
    // }

    /**
     * Determine whether the user can update the role.
     *
     * @param  \App\User  $user
     * @param  \App\Role  $role
     * @return boolean
     */
    public function update(User $user, Role $role)
    {
        return $user->isAdmin();
    }

    public function delete(User $user, Role $role) {
        if (config('app.is_demo')) {
            return false;
        }
        return $user->isAdmin();
    }
}
