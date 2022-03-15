<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
        protected $table = 'lokasi';
        public function unit()
        {
        return $this->hasMany(Unit::class);
        }
}
