<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\company;
class TeacherController extends Controller
{
    //
    public function getHome(){
        return view('Pages.Teacher.home');
    }
    public function getBlog(){
        return view('Pages.Teacher.Blog');
    }
    public function getDS1(){
        return view('Pages.Teacher.DS1');
    }
    public function getDS2(){
        return view('Pages.Teacher.DS2');
    }
    public function getHelp(){
        return view('Pages.Teacher.Help');
    }
    public function getProfile(){
        return view('Pages.Teacher.Profile');
    }
    public function getSetting(){
        return view('Pages.Teacher.Setting');
    }
}
