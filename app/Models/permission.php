<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;
    function permission_roles(){

        return $this->belongsToMany(Permission_Roles::class);
    }
}
