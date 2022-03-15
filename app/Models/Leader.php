<?php

namespace App\Models;

use App\Models\Marketing;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $table = 'leader';

     public function marketing()
     {
     return $this->hasMany(Marketing::class);
     }
}
