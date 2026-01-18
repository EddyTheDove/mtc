<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicefield extends Model
{
    use HasFactory;

    protected $table = 'service_fields';
    
    protected $fillable = [
        'name', 
        'value', 
        'service_id'
    ];
}
