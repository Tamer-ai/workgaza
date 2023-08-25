<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class category extends Model
{
    use HasFactory;

    function projects(){

        return $this->hasMany(Project::class);
    }
}
