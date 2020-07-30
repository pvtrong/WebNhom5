<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class StudentController extends Controller
{
    //
    public function getHome(){
        return view('Pages.Student.home');
    }
    public function getBlog(){
        return view('Pages.Student.Blog');
    }
    public function getDS1(){
        return view('Pages.Student.DS1');
    }
    public function getDS2(){
        return view('Pages.Student.DS2');
    }
    public function getHelp(){
        return view('Pages.Student.Help');
    }
    public function getProfile(){
        return view('Pages.Student.Profile');
    }
    public function getSetting(){
        return view('Pages.Student.Setting');
    }
    
}
