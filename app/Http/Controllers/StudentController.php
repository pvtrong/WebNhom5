<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\student;
use App\teacher;
use App\company;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function getHome(){
        return view('Pages.Student.home');
    }
    public function getBlog(){
        $BL_paging = DB::table('blog')->paginate(4);
        return view('Pages.Student.Blog', ['BL_paging' => $BL_paging]);
    }
    public function getDS1(){
        $company = company::all();
        $DS_paging = DB::table('company')->paginate(2);
        return view('Pages.Student.DS1', ['DS_paging'=> $DS_paging]);
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
    public function postUpdate(Request $request, $id){
        $student = student::find($id);

        if($student == null){
            $student2 = new student;
            $student2 ->id =$request ->id;
            $student2 -> studentCode = $request->studentCode;
            $student2 -> birth = $request->birth;
            $student2 -> gender = $request->gender;
            $student2 -> studentCode = $request->studentCode;
            $student2 -> mobile = $request->mobile;
            $student2 -> department = $request->department;
            $student2 -> major = $request->major;
            $student2 -> level = $request->level;
            $student2 -> trainingSystem= $request->trainingSystem;
            $student2 -> trainingProgram = $request->trainingProgram;
            $student2 -> gpa = $request->gpa;
            $student2 -> forte = $request->forte;
            $student2 -> skill = $request->skill;
            $student2 -> favourite = $request->favourite;
            $student2 -> nation = $request->nation;
            $student2 -> district = $request->district;
            $student2 -> commune = $request->commune;
            $student2 -> street = $request->street;
            $student2 -> homeNumber = $request->homeNumber;
            $student2 -> prize = $request->prize;
            $student2 -> numberCMT = $request->numberCMT;
            $student2 -> created_at = $request->created_at;
            $student2 -> updated_at = $request->updated_at;
            $student2 -> yearOfCourse = $request->yearOfCourse;
            if($request->hasFile('Hinh')){
                $file = $request ->file('Hinh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){

                }
                $name = $file-> getClientOriginalName();
                $Hinh = Str::random(4).'_'. $name;
                while(file_exists('upload/student'.$Hinh)){
                    $Hinh = Str::random(4)."_". $name;
                }
                $file->move('upload/student', $Hinh);
                $student2->Hinh = $Hinh;
            }else {

            }
            $student2->save();
            return view('Pages.Student.Profile',['student'=>$student2]);
        }


        else {
            $student -> studentCode = $request->studentCode;
            $student -> birth = $request->birth;
            $student -> gender = $request->gender;
            $student -> studentCode = $request->studentCode;
            $student -> mobile = $request->mobile;
            $student -> department = $request->department;
            $student -> major = $request->major;
            $student -> level = $request->level;
            $student -> trainingSystem= $request->trainingSystem;
            $student -> trainingProgram = $request->trainingProgram;
            $student -> gpa = $request->gpa;
            $student -> forte = $request->forte;
            $student -> skill = $request->skill;
            $student -> favourite = $request->favourite;
            $student -> nation = $request->nation;
            $student -> district = $request->district;
            $student -> commune = $request->commune;
            $student -> street = $request->street;
            $student -> homeNumber = $request->homeNumber;
            $student -> prize = $request->prize;
            $student -> numberCMT = $request->numberCMT;
            $student -> created_at = $request->created_at;
            $student -> updated_at = $request->updated_at;
            $student -> yearOfCourse = $request->yearOfCourse;
            if($request->hasFile('Hinh')){
                $file = $request ->file('Hinh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){

                }
                $name = $file-> getClientOriginalName();
                $Hinh = Str::random(4).'_'. $name;
                while(file_exists('upload/student'.$Hinh)){
                    $Hinh = Str::random(4)."_". $name;
                }
                $file->move('upload/student', $Hinh);
                $student->Hinh = $Hinh;
            }else {

            }
            $student->save();
            return view('Pages.Student.Profile',['student'=>$student]);
        }


    }

}
