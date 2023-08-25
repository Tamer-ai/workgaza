<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class proposal extends Model
{
    use HasFactory;
    function users(){

        return $this->belongsTo(User::class)->withDefault();
    }
    function projects(){

        return $this->belongsTo(Project::class)->withDefault();
    }
}
