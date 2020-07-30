<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

use App\teacher;
class CompanyController extends Controller
{
    //
    public function getHome(){
        return view('Pages.Company.home');
    }
    public function getBlog(){
        return view('Pages.Company.Blog');
    }
    public function getDS1(){
        $student = student::all();
        return view('Pages.Company.DS1', ['student'=>$student]);
    }
    public function getDS2(){
        return view('Pages.Company.DS2');
    }
    public function getHelp(){
        return view('Pages.Company.Help');
    }
    public function getProfile(){
        return view('Pages.Company.Profile');
    }
    public function getSetting(){
        return view('Pages.Company.Setting');
    }
}
