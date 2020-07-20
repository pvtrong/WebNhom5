<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
    protected $table = "company";

    public function studentOFCompany(){
        return $this -> hasMany('App\student','CompanyID','StudentID');
    }
}

