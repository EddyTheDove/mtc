<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function admin(User $user) {
        // Check if user has a role and permissions
        if (!$user->role) {
            return false;
        }
        
        return $user->role->permissions()->where('name', 'create_post')->exists();
    }


    /**
     * Determine whether the user can view the user.
     *
     * @param  \App\User  $user
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function view(User $user, User $client)
    {
        //
    }

    /**
     * Determine whether the user can create users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the user.
     *
     * @param  \App\User  $user
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function update(User $user, User $client)
    {
        //
    }

    /**
     * Determine whether the user can delete the user.
     *
     * @param  \App\User  $user
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function delete(User $user, User $client)
    {
        //
    }
}
