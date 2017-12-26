<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    protected $table = 'losts';
    protected $guarded = ['id'];
    protected $dates = ['collected_on'];


    public function getCollectedOnAttribute ($q) {
        if ($q)
        return Carbon::parse($q)->format('Y-m-d');
        return '';
    }
}
