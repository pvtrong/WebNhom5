<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    //
    protected $table = "teacher";

    public function studentOfTeacher(){
        return $this -> hasMany('App\student','TeacherID','StudentID');
    }
}
