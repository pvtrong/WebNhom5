<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\student;
use App\teacher;
use App\company;
use App\User;
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
    public function getProfile($id){
        $teacher = teacher::find($id);
        
        if($teacher != null)
        
        return view('Pages.Teacher.Profile',['teacher'=>$teacher]);
        else return view('Pages.Teacher.Profile2');
        

    }
    public function getSetting(){
        return view('Pages.Teacher.Setting');
    }
    public function postUpdate(Request $request, $id){
        $teacher = teacher::find($id);
        
        if($teacher == null){
            $teacher2 = new teacher;
            $teacher2 ->id =$request ->id;
            $teacher2 ->age =$request ->age;
            $teacher2 ->gender =$request ->gender;
            $teacher2 ->mobile =$request ->mobile;
            $teacher2 ->department =$request ->department;
            $teacher2 ->major =$request ->major;
            $teacher2 ->numberCMT =$request ->numberCMT;
            $teacher2 ->position =$request ->position;
            $teacher2 ->office =$request ->office;
            $teacher2 ->offer =$request ->offer;
            $teacher2 ->topicResearch =$request ->topicResearch;
            $teacher2 ->numbers =$request ->numbers;
            $teacher2 ->startDayOffer =$request ->startDayOffer;
            $teacher2 ->endDayOffer =$request ->endDayOffer;
            if($request->hasFile('Hinh')){
                $file = $request ->file('Hinh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                
                }
                $name = $file-> getClientOriginalName();
                $Hinh = Str::random(4).'_'. $name;
                while(file_exists('upload/teacher'.$Hinh)){
                    $Hinh = Str::random(4)."_". $name;
                }
                $file->move('upload/teacher', $Hinh);
                $teacher2->Hinh = $Hinh;
            }
            $teacher2->save();
            return view('Pages.Teacher.Profile',['teacher'=>$teacher2]);
        }
        
        
        else {
            $teacher ->age =$request ->age;
            $teacher ->gender =$request ->gender;
            $teacher ->mobile =$request ->mobile;
            $teacher ->department =$request ->department;
            $teacher ->major =$request ->major;
            $teacher ->numberCMT =$request ->numberCMT;
            $teacher ->position =$request ->position;
            $teacher ->office =$request ->office;
            $teacher ->offer =$request ->offer;
            $teacher ->topicResearch =$request ->topicResearch;
            $teacher ->numbers =$request ->numbers;
            $teacher ->startDayOffer =$request ->startDayOffer;
            $teacher ->endDayOffer =$request ->endDayOffer;
            if($request->hasFile('Hinh')){
                $file = $request ->file('Hinh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                
                }
                $name = $file-> getClientOriginalName();
                $Hinh = Str::random(4).'_'. $name;
                while(file_exists('upload/teacher'.$Hinh)){
                    $Hinh = Str::random(4)."_". $name;
                }
                $file->move('upload/teacher', $Hinh);
                $teacher->Hinh = $Hinh;
            }
            $teacher->save();
            return view('Pages.Teacher.Profile',['teacher'=>$teacher]);
        }
    }
    public function getCV($id){
        $teacher = teacher::find($id);
        $user = User::find($id);
        
        if($teacher != null){
          
            return view('Pages.Teacher.CV',['teacher'=>$teacher, 'user'=>$user]);
        }

    }
    public function getShare($id){
        $student = student::find($id);
        $user = User::find($id);
        
        if($company != null){
          
            return view('Pages.Teacher.CV',['company'=>$company, 'user'=>$user]);
        }

    }
}
