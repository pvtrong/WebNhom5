<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\teacher;
use App\company;
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
        $company = company::all();
        return view('Pages.Student.DS1', ['company'=>$company]);
    }
    public function getDS2(){
        return view('Pages.Student.DS2');
    }
    public function getHelp(){
        return view('Pages.Student.Help');
    }
    public function getProfile($id){
        $student = student::find($id);
        
        if($student != null)
        
        return view('Pages.Student.Profile',['student'=>$student]);
        else return view('Pages.Student.Profile2');
        

    }
    public function getSetting(){
        return view('Pages.Student.Setting');
    }
    public function postUpdate(Request $request){
        $student = new student;
        $student -> studentCode = $request->studentCode;
        $student ->id =$request ->id;
        $student->save();

    }

}
