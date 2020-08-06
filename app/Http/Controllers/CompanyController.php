<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\student;
use App\teacher;
use App\company;
use App\User;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    //
    public function getHome(){
        return view('Pages.Company.home');
    }
    public function getBlog(){
        $BL_cpn = DB::table('blog')->paginate(4);
        return view('Pages.Company.Blog', ['BL_cpn' => $BL_cpn]);
    }
    public function getDS1(Request $request){
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
            
        return view('Pages.Company.DS1',['user' => $user, 'students' => $students, 'data' => $data]);
    }
    public function getDS2(Request $request){
        if($request->search)
            {
            $search = $request->search;
            $data = DB::table('teacher')
            ->join('user','user.id','=','teacher.id')
            ->select('user.name as name1','teacher.department as department1','teacher.office as office1','teacher.age as age1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
            ->where('name', 'like', "%$search%")
            ->orwhere('department', 'like', "%$search%")
            ->orwhere('office', 'like', "%$search%")
            ->orwhere('age', 'like', "%$search%")
            ->orwhere('topicResearch', 'like', "%$search%")
            ->orwhere('offer', 'like', "%$search%")
            ->orwhere('numbers', 'like', "%$search%")
            ->paginate(2);
            }
            elseif($request->name)
            {
                $filter = $request->name;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.name as name1','teacher.department as department1','teacher.office as office1','teacher.age as age1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('user.id', $filter)
                ->paginate(2);
                
            }
            elseif($request->department)
            {
                $filter = $request->department;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.name as name1','teacher.department as department1','teacher.office as office1','teacher.age as age1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('department', $filter)
                ->paginate(2);
            }
            elseif($request->office)
            {
                $filter = $request->office;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.name as name1','teacher.department as department1','teacher.office as office1','teacher.age as age1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('office', $filter)
                ->paginate(2);
                
            }
            elseif($request->age)
            {
                $filter = $request->age;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.name as name1','teacher.department as department1','teacher.office as office1','teacher.age as age1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('age', $filter)
                ->paginate(2);
                
            }
            elseif($request->topic)
            {
                $filter = $request->topic;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.name as name1','teacher.department as department1','teacher.office as office1','teacher.age as age1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('topicResearch', $filter)
                ->paginate(2);
                
            }
            elseif($request->number)
            {
                $filter = $request->number;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.name as name1','teacher.department as department1','teacher.office as office1','teacher.age as age1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('numbers', $filter)
                ->paginate(2);
                
            }
            else {
                $data = DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.name as name1','teacher.department as department1','teacher.office as office1','teacher.age as age1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->paginate(2);
            }

        $user = DB::table('user')
            ->join('teacher','user.id','=','teacher.id')
            ->select("user.*")
            ->get();
        
        $teacher = DB::table('teacher')
            ->select("*")
            ->get();
            
        return view('Pages.Company.DS2',['user' => $user, 'teacher' => $teacher, 'data' => $data]);
    }
    public function getHelp(){
        return view('Pages.Company.Help');
    }
    public function getProfile($id){
        $company = company::find($id);

        if($company != null)

        return view('Pages.Company.Profile',['company'=>$company]);
        else return view('Pages.Company.Profile2');


    }
    public function getSetting(){
        return view('Pages.Company.Setting');
    }
    public function postUpdate(Request $request, $id){
        $company = company::find($id);

        if($company == null){
            $company2 = new company;
            $company2 ->id =$request ->id;
            $company2 ->address =$request ->address;
            $company2 ->mobile =$request ->mobile;
            $company2 ->fax =$request ->fax;
            $company2 ->yearEstablish =$request ->yearEstablish;
            $company2 ->offer =$request ->offer;
            $company2 ->salary =$request ->salary;
            $company2 ->numbers =$request ->numbers;
            $company2 ->bonus =$request ->bonus;
            $company2 ->startDayOffer =$request ->startDayOffer;
            $company2 ->endDayOffer =$request ->endDayOffer;
            if($request->hasFile('Hinh')){
                $file = $request ->file('Hinh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){

                }
                $name = $file-> getClientOriginalName();
                $Hinh = Str::random(4).'_'. $name;
                while(file_exists('upload/company'.$Hinh)){
                    $Hinh = Str::random(4)."_". $name;
                }
                $file->move('upload/company', $Hinh);
                $company2->Hinh = $Hinh;
            }
            $company2->save();
            return view('Pages.Company.Profile',['company'=>$company2]);
        }


        else {
            $company ->address =$request ->address;
            $company ->mobile =$request ->mobile;
            $company ->fax =$request ->fax;
            $company ->yearEstablish =$request ->yearEstablish;
            $company ->offer =$request ->offer;
            $company ->salary =$request ->salary;
            $company ->numbers =$request ->numbers;
            $company ->bonus =$request ->bonus;
            $company ->startDayOffer =$request ->startDayOffer;
            $company ->endDayOffer =$request ->endDayOffer;
            if($request->hasFile('Hinh')){
                $file = $request ->file('Hinh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){

                }
                $name = $file-> getClientOriginalName();
                $Hinh = Str::random(4).'_'. $name;
                while(file_exists('upload/company'.$Hinh)){
                    $Hinh = Str::random(4)."_". $name;
                }
                $file->move('upload/company', $Hinh);
                $company->Hinh = $Hinh;
            }
            $company->save();
            return view('Pages.Company.Profile',['company'=>$company]);
        }
    }
    public function getCV($id){
        $company = company::find($id);
        $user = User::find($id);

        if($company != null){

            return view('Pages.Company.CV',['company'=>$company, 'user'=>$user]);
        }

    }
    public function getShare($id){
        $company = company::find($id);
        $user = User::find($id);

        if($company != null){
            $BL_temp = DB::table('blog')->paginate(4); // viết truy vấn cho từng công ty tại đây
            return view('Pages.Company.Share',['company'=>$company, 'user'=>$user, 'BL_temp' => $BL_temp]);
        }

    }
}
