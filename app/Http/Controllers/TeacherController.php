<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\student;
use App\teacher;
use App\company;
use App\User;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    //
    public function getHome(){
        return view('Pages.Teacher.home');
    }
    public function getBlog(){
        $BL_Tr = DB::table('blog')->paginate(4);
        return view('Pages.Teacher.Blog', ['BL_Tr' => $BL_Tr]);
    }
    public function getDS1(Request $request){
        if($request->search){
            $search = $request->search;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('name as name1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1','numbers as numbers1', 'bonus as bonus1')
            ->where('name', 'like', "%$search%")
            ->orwhere('offer', 'like', "%$search%")
            ->orwhere('address', 'like', "%$search%")
            ->orwhere('mobile', 'like', "%$search%")
            ->orwhere('salary', 'like', "%$search%")
            ->orwhere('numbers', 'like', "%$search%")
            ->orwhere('bonus', 'like', "%$search%")
            ->paginate(2);
        }
        elseif($request->name) {
            $filter = $request->name;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.name as name1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1', 'numbers as numbers1','bonus as bonus1')
            ->where('user.id', $filter)
            ->paginate(2);
        }
        elseif($request->offer) {
            $filter = $request->offer;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('name as name1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1', 'numbers as numbers1','bonus as bonus1')
            ->where('offer', $filter)
            ->paginate(2);
        }
        elseif($request->address) {
            $filter = $request->address;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('name as name1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1', 'numbers as numbers1','bonus as bonus1')
            ->where('address', $filter)
            ->paginate(2);
        }
        elseif($request->mobile) {
            $filter = $request->mobile;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('name as name1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1', 'numbers as numbers1','bonus as bonus1')
            ->where('mobile', $filter)
            ->paginate(2);
        }
        elseif($request->salary) {
            $filter = $request->salary;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('name as name1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1', 'numbers as numbers1','bonus as bonus1')
            ->where('salary', $filter)
            ->paginate(2);    
        }
        elseif($request->number) {
            $filter = $request->number;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('name as name1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1', 'numbers as numbers1','bonus as bonus1')
            ->where('numbers', $filter)
            ->paginate(2);
        }
        elseif($request->bonus) {
            $filter = $request->bonus;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('name as name1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1', 'numbers as numbers1','bonus as bonus1')
            ->where('bonus', $filter)
            ->paginate(2);
        }
        else {
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('name as name1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1', 'numbers as numbers1','bonus as bonus1')
            ->paginate(2);
        }
        
        $user = DB::table('user')
            ->join('company','user.id','=','company.id')
            ->select("user.*")
            ->get();

        $company = DB::table('company')
            ->select("*")
            ->get();

        return view('Pages.Teacher.DS1', ['user' => $user,'company' => $company,  'data' => $data]);
    }
    public function getDS2(Request $request){
        if($request->search)
            {
            $search = $request->search;
            $data = DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.name as name1','students.studentCode as studentCode1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1','students.prize as prize1')
            ->where('name', 'like', "%$search%")
            ->orwhere('studentCode', 'like', "%$search%")
            ->orwhere('mobile', 'like', "%$search%")
            ->orwhere('department', 'like', "%$search%")
            ->orwhere('gpa', 'like', "%$search%")
            ->orwhere('skill', 'like', "%$search%")
            ->orwhere('prize', 'like', "%$search%")
            ->paginate(2);
            }
            
            elseif($request->name)
            {
                $filter = $request->name;
                $data =DB::table('students')
                ->join('user','user.id','=','students.id')
                ->select('user.name as name1','students.studentCode as studentCode1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1','students.prize as prize1')
                ->where('user.id', $filter)
                ->paginate(2);
                
            }
            elseif($request->studentCode)
            {
                $filter = $request->studentCode;
                $data =DB::table('students')
                ->join('user','user.id','=','students.id')
                ->select('user.name as name1','students.studentCode as studentCode1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1','students.prize as prize1')
                ->where('studentCode', $filter)
                ->paginate(2);
            }
            elseif($request->mobile)
            {
                $filter = $request->mobile;
                $data =DB::table('students')
                ->join('user','user.id','=','students.id')
                ->select('user.name as name1','students.studentCode as studentCode1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1','students.prize as prize1')
                ->where('mobile', $filter)
                ->paginate(2);
                
            }
            elseif($request->department)
            {
                $filter = $request->department;
                $data =DB::table('students')
                ->join('user','user.id','=','students.id')
                ->select('user.name as name1','students.studentCode as studentCode1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1','students.prize as prize1')
                ->where('department', $filter)
                ->paginate(2);
                
            }
            elseif($request->gpa)
            {
                $filter = $request->gpa;
                $data =DB::table('students')
                ->join('user','user.id','=','students.id')
                ->select('user.name as name1','students.studentCode as studentCode1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1','students.prize as prize1')
                ->where('gpa', $filter)
                ->paginate(2);
                
            }
            elseif($request->skill)
            {
                $filter = $request->skill;
                $data =DB::table('students')
                ->join('user','user.id','=','students.id')
                ->select('user.name as name1','students.studentCode as studentCode1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1','students.prize as prize1')
                ->where('skill', $filter)
                ->paginate(2);
                
            }
            elseif($request->prize)
            {
                $filter = $request->prize;
                $data =DB::table('students')
                ->join('user','user.id','=','students.id')
                ->select('user.name as name1','students.studentCode as studentCode1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1','students.prize as prize1')
                ->where('prize', $filter)
                ->paginate(2);
                
            }
            else {
                $data = DB::table('students')
                ->join('user','user.id','=','students.id')
                ->select('user.name as name1','students.studentCode as studentCode1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1','students.prize as prize1')
                ->paginate(2);
            }

        $user = DB::table('user')
            ->join('students','user.id','=','students.id')
            ->select("user.*")
            ->get();
        
        $students = DB::table('students')
            ->select("*")
            ->get();
            
        return view('Pages.Teacher.DS2',['user' => $user, 'students' => $students, 'data' => $data]);
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
