<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\student;
use App\teacher;
use App\company;
class teacher extends Model
{
    //
    protected $table = "teacher";

    public function studentOfTeacher(){
        return $this -> hasMany('App\student','TeacherID','StudentID');
    }
}
