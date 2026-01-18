<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $table = 'settings';
    
    protected $fillable = [
        'app_name', 
        'admin_email', 
        'app_motto', 
        'app_url', 
        'logo_url', 
        'is_live',
        'users_can_register', 
        'default_role_id', 
        'is_bilingual', 
        'default_language',
        'posts_pagination', 
        'comments_to_display', 
        'auto_approve_comments',
        'business_to_email', 
        'business_to_name'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_live' => 'boolean',
            'users_can_register' => 'boolean',
            'is_bilingual' => 'boolean',
            'auto_approve_comments' => 'boolean',
        ];
    }
}
