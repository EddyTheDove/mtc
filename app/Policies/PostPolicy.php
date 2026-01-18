<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;

class PostPolicy
{
    public function create(User $user)
    {
        if (!$user->role) {
            return false;
        }
        
        return $user->role->permissions()->where('name', 'create_post')->exists();
    }
}
