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

class StudentController extends Controller
{
    //
    public function getHome(){
        $category = category::all()[0];
        return view('Pages.Student.home', ['category'=>$category]);

    }
    public function getBlog(){
        $category = category::all()[2];
        $BL_St = DB::table('blog')->paginate(4);
        return view('Pages.Student.Blog', ['BL_St' => $BL_St, 'category'=>$category]);
    }
    public function getDS1(Request $request){
        $category = category::all()[5];
        $company = company::all();
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

        return view('Pages.Student.DS1', ['user' => $user,'company' => $company,  'data' => $data, 'category'=>$category]);
    }
    public function getDS2(Request $request){
        $category = category::all()[3];
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
            
        return view('Pages.Student.DS2',['user' => $user, 'teacher' => $teacher, 'data' => $data, 'category'=>$category]);
    }
    
    public function getHelp(){
        $category = category::all()[7];
        return view('Pages.Student.Help', ['category'=>$category]);
    }
    public function getProfile($id){
        $student = student::find($id);
        $category = category::all()[1];
        if($student != null)

        return view('Pages.Student.Profile',['student'=>$student, 'category'=>$category]);
        return view('Pages.Student.Profile2', ['category'=>$category]);


    }
    public function getSetting(){
        $category = category::all()[6];
        return view('Pages.Student.Setting', ['category'=>$category]);
    }
    public function postUpdate(Request $request, $id){
        $category = category::all()[1];
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
            }
            $student2->save();
            return view('Pages.Student.Profile',['student'=>$student2, 'category'=>$category]);
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
            }
            $student->save();
            return view('Pages.Student.Profile',['student'=>$student, 'category'=>$categor]);
        }


    }
    public function getCV($id){
        $category = category::all()[8];
        $student = student::find($id);
        $user = User::find($id);
        
        if($student != null){
          
            return view('Pages.Student.CV',['student'=>$student, 'user'=>$user, 'category'=>$category]);
        }

    }
    public function getShare($id){
        $category = category::all()[9];
        $student = student::find($id);
        $user = User::find($id);
        
        if($company != null){
          
            return view('Pages.Student.CV',['company'=>$company, 'user'=>$user, 'category'=>$category]);
        }

    }

}
