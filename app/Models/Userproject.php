<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userproject extends Model
{
    use HasFactory;
    function users(){

        return $this->belongsToMany(User::class);
    }
    function projects(){

        return $this->belongsToMany(Project::class);
    }
    function reviews(){

        return $this->hasMany(Review::class);
    }
}
