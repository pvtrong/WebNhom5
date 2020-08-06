<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\student;
use App\teacher;
use App\company;
use App\User;
use App\Model\Category;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    //
    public function getHome(){
        $category = category::all()[0];
        return view('Pages.Teacher.home', ['category'=>$category]);

    }
    public function getBlog(){
            $category = category::all()[2];
        $BL_Tr = DB::table('blog')->paginate(4);
        return view('Pages.Teacher.Blog', ['BL_Tr' => $BL_Tr, 'category'=>$category]);
    }
    public function getDS1(){
        $category = category::all()[5];
        $DS_paging = DB::table('company')->paginate(2);
        return view('Pages.Teacher.DS1', ['DS_paging' => $DS_paging, 'category'=>$category]);
    }
    public function getDS2(){
        $category = category::all()[4];
        return view('Pages.Teacher.DS2', ['category'=>$category]);
    }
    public function getHelp(){
        $category = category::all()[7];
        return view('Pages.Teacher.Help', ['category'=>$category]);
    }
    public function getProfile($id){
        $teacher = teacher::find($id);
        $category = category::all()[1];
        if($teacher != null)

        return view('Pages.Teacher.Profile',['teacher'=>$teacher, 'category'=>$category]);
        else return view('Pages.Teacher.Profile2');


    }
    public function getSetting(){
        $category = category::all()[6];
        return view('Pages.Teacher.Setting', ['category'=>$category]);
    }
    public function postUpdate(Request $request, $id){
        $teacher = teacher::find($id);
        $category = category::all()[1];
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
            $teacher ->bonus =$request ->bonus;
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
            return view('Pages.Teacher.Profile',['teacher'=>$teacher2, 'category'=>$category]);
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
            $teacher ->bonus =$request ->bonus;
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
            return view('Pages.Teacher.Profile',['teacher'=>$teacher, 'category'=>$category]);
        }
    }
    public function getCV($id){
        $teacher = teacher::find($id);
        $user = User::find($id);
        $category = category::all()[8];
        if($teacher != null){
          
            return view('Pages.Teacher.CV',['teacher'=>$teacher, 'user'=>$user, 'category'=>$category]);
        }

    }
    public function getShare($id){
        $student = student::find($id);
        $user = User::find($id);
        $category = category::all()[9];
        if($company != null){
          
            return view('Pages.Teacher.CV',['company'=>$company, 'user'=>$user, 'category'=>$category]);
        }

    }
}
