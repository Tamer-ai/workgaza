<?php

namespace App\Models;

use Faker\Provider\ar_EG\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    function user_project(){

        return $this->belongsToMany(User_project::class);
    }
    function company(){

        return $this->hasMany(Company::class);
    }
}
