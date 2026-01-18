<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Page;

class PagePolicy
{
    public function create(User $user)
    {
        if (!$user->role) {
            return false;
        }
        
        return $user->role->permissions()->where('name', 'create_page')->exists();
    }
}
