<?php

namespace App\Models;

use App\Models\User;
use App\Models\Users;
use App\Models\Leader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marketing extends Model
{
    protected $table = 'marketing';


    public function leader()
    {
    return $this->belongsTo(Leader::class);
    }
    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
