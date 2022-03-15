<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
     protected $table = 'log';

     public function info()
     {
     return $this->belongsTo(User::class,'user','id');
     }
}
