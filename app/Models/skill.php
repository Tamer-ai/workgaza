<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class skill extends Model
{
    use HasFactory;

    // الاسم الي جنب فانكشن سميه ما تشاء
    function projects(){

        return $this->belongsToMany(Project::class);
    }
    function users(){

        return $this->belongsToMany(User::class ,'user_skill');
    }
    // ليه حطيت يوزر سكيلز بعد الكلاس لانه
    //  انا مسمي الجدول غلط بالابجدية حاطت يو قبل اس عشان كده حطيت اسمالجدول الي غلطان فيه بلاش يكبسك ايرور
}
