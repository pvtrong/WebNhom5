<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\student;
use App\teacher;
use App\company;
use App\Model\Skill;
use App\Model\Fk_Skill;
use App\User;
use App\blog;
use App\Model\Messenger;
use App\Model\ThreadMessenger;
use App\Model\Category;
use Illuminate\Support\Facades\DB;
use Auth;

class StudentController extends Controller
{
    //
    public function getHome(){
        $companys = user::where('category', 1)->count();
        $teachers = user::where('category', 2)->count();
        $students = user::where('category', 3)->count();
        $blogs= blog::all()->count();
        $category = category::all()[0];
        $skill_all = Fk_Skill::select('skill.name', DB::raw('count(*) as total'))
            ->join('skill','skill.id','=','fk_skill.skill_id')
            ->groupBy('skill.name')
            ->join('students','students.id','=','fk_skill.student_id')
            ->get()
            ->toArray();
        $skill_all2 = Fk_Skill::select('skill.name', DB::raw('count(*) as total'))
            ->join('skill','skill.id','=','fk_skill.skill_id')
            ->groupBy('skill.name')
            ->join('teacher','teacher.id','=','fk_skill.teacher_id')
            ->get()
            ->toArray();
        $skill_all3 = Fk_Skill::select('skill.name', DB::raw('count(*) as total'))
            ->join('skill','skill.id','=','fk_skill.skill_id')
            ->groupBy('skill.name')
            ->join('company','company.id','=','fk_skill.company_id')
            ->get()
            ->toArray();
        return view('Pages.Student.home', ['skill_all3'=> $skill_all3, 'skill_all2'=> $skill_all2, 'skill_all'=> $skill_all, 'category'=>$category, 'companys'=>$companys, 'teachers'=>$teachers, 'students' => $students, 'blogs' => $blogs]);

    }
    public function getBlog(){
       
        $category = category::all()[2];
        $id = Auth::user()->id;
        $BL_St = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);
       
        return view('Pages.Student.Blog', ['BL_St' => $BL_St, 'category'=>$category]);
    }
    public function postBlog(Request $request) { 
        $category = category::all()[2]; 
        $id = Auth::user()->id;
        $this->validate($request, [
            'Tieude'=>'required',
            'Noidung'=>'required',
            'Tomtat'=>'required'
        ],[
            'Tieude.required'=>'Bạn chưa nhập tiêu đề',
            'Noidung.required'=>'Bạn chưa nhập nội dung',
            'Tomtat.required'=>'Bạn chưa nhập tóm tắt'
        ]);

        $blog = new bLog;
        $blog->id = $id;
        $blog->title = $request->Tieude;
        $blog->content = $request->Noidung;
        $blog->description = $request->Tomtat;

        if($request->hasFile('Hinh')){
            $file = $request ->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){

            }
            $name = $file-> getClientOriginalName();
            $Hinh = Str::random(4).'_'. $name;
            while(file_exists('upload/blog/'.$Hinh)){
                $Hinh = Str::random(4)."_". $name;
            }
            $file->move('upload/blog', $Hinh);
            $blog->Hinh = $Hinh;
        }
        
        $blog->save();
        $BL_St = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);
        return view('Pages/Student/Blog',['category'=>$category,'BL_St' => $BL_St]) -> with('success','Bạn thêm bài đăng thành công');
    }

    public function updateBlog(Request $request, $id_blog){
        $category = category::all()[2]; 
        $blog= blog::find($id_blog);

        $this->validate($request, [
            'Tieude'=>'required',
            'Noidung'=>'required',
            'Tomtat'=>'required'
        ],[
            'Tieude.required'=>'Bạn chưa nhập tiêu đề',
            'Noidung.required'=>'Bạn chưa nhập nội dung',
            'Tomtat.required'=>'Bạn chưa nhập tóm tắt'
        ]);

        $blog->title = $request->Tieude;
        $blog->content = $request->Noidung;
        $blog->description = $request->Tomtat;

        if($request->hasFile('Hinh')){
            $file = $request ->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){

            }
            $name = $file-> getClientOriginalName();
            $Hinh = Str::random(4).'_'. $name;
            while(file_exists('upload/blog/'.$Hinh)){
                $Hinh = Str::random(4)."_". $name;
            }
            $file->move('upload/blog', $Hinh);
            if($blog->Hinh != NULL)
            unlink('upload/blog/'.$blog->Hinh);
            
            $blog->Hinh = $Hinh;
        }
        
        $blog->save();
        $id = Auth::user()->id;
        $BL_St = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);

        return view('Pages.Student.Blog',['category'=>$category,'BL_St' => $BL_St])->with ('success','Bạn cập nhật bài đăng thành công');
    
    }
    public function getUpdateBlog($id_blog){
        $category = category::all()[2]; 
        $BL_St = DB::table('blog')->paginate(4);

        $blog= blog::find($id_blog);

        return view('Pages.Student.updateBlog',['blog'=>$blog,'category'=>$category,'BL_St' => $BL_St]);
    }

    public function delBlog($id_blog) {
        $category = category::all()[2]; 
        $blog = blog::find($id_blog);
        if($blog->Hinh != NULL) unlink('upload/blog/'.$blog->Hinh);
        $blog->delete();
        $id = Auth::user()->id;
        $BL_St = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);
        return view('Pages.Student.Blog',['category'=>$category,'BL_St' => $BL_St])->with ('success','Bạn xoá bài đăng thành công');
    
    }

    public function getDS1(Request $request){
        $category = category::all()[5];
        if($request->search){
            $search = $request->search;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->join('fk_skill','fk_skill.company_id','=','user.id')
            ->join('skill','skill.id','=','fk_skill.skill_id')
            ->select('user.id as id1','user.name as name1','email as email1', 'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('user.name', 'like', "%$search%")
            ->orwhere('address', 'like', "%$search%")
            ->orwhere('mobile', 'like', "%$search%")
            ->orwhere('salary', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
            ->orwhere('skill.name', 'like', "%$search%")
            ->orderBy('id1')
            ->distinct()
            ->paginate(2);
        }
        elseif($request->name) {
            $filter = $request->name;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1',  'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('user.id', $filter)
            ->orderBy('id1')
            ->paginate(2);
        }
        elseif($request->email) {
            $filter = $request->email;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1',  'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('user.id', $filter)
            ->paginate(2);
        }
        elseif($request->offer) {
            $filter = $request->offer;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->join('fk_skill', 'fk_skill.company_id','=','company.id')
            ->select('user.id as id1','name as name1','email as email1',  'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('fk_skill.skill_id', $filter)
            ->orderBy('id1')
            ->paginate(2);
        }
        elseif($request->address) {
            $filter = $request->address;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1',  'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('address', $filter)
            ->paginate(2);
        }
        elseif($request->mobile) {
            $filter = $request->mobile;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1',  'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('mobile', $filter)
            ->paginate(2);
        }
        elseif($request->salary) {
            $filter = $request->salary;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1',  'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('salary', $filter)
            ->paginate(2);    
        }
        elseif($request->number) {
            $filter = $request->number;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1',  'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('numbers', $filter)
            ->paginate(2);
        }
        else {
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1',  'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->paginate(2);
        }
        
        $user = DB::table('user')
        ->join('company','user.id','=','company.id')
        ->select("user.*")
        ->get();

        $user1 = DB::table('user')
        ->join('company','user.id','=','company.id')
        ->orderBy('name', 'asc')
        ->get();

        $user2 = DB::table('user')
        ->join('company','user.id','=','company.id')
        ->orderBy('email', 'asc')
        ->get();
        
        $company = DB::table('company')
        ->select("*")
        ->get();

         $skill1 = DB::table('fk_skill')
        ->join('skill','skill.id','=','fk_skill.skill_id')
        ->select('fk_skill.company_id as company_id1','skill.name as name1' )
        ->get();

        $skill = skill::all();   
        return view('Pages.Student.DS1', ['user' => $user, 'skill' => $skill, 'skill1' => $skill1,'user1'=>$user1,'user2'=>$user2,'company' => $company,  'data' => $data, 'category'=>$category]);
    }
    public function getDS2(Request $request){
        $category = category::all()[3];
        if($request->search)
        {
            $search = $request->search;
            $data = DB::table('teacher')
            ->join('user','user.id','=','teacher.id')
            ->join('fk_skill','fk_skill.teacher_id','=','user.id')
            ->join('skill','skill.id','=','fk_skill.skill_id')
            ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.numbers as numbers1')
            ->where('user.name', 'like', "%$search%")
            ->orwhere('department', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
            ->orwhere('topicResearch', 'like', "%$search%")
            ->orwhere('numbers', 'like', "%$search%")
            ->orwhere('skill.name', 'like', "%$search%")
            ->orderBy('id1')
            ->distinct()
            ->paginate(2);
            }
            elseif($request->name)
            {
                $filter = $request->name;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.numbers as numbers1')
                ->where('user.id', $filter)
                ->paginate(2);
                
            }
            elseif($request->email)
            {
                $filter = $request->email;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.numbers as numbers1')
                ->where('user.id', $filter)
                ->paginate(2);
                
            }
            elseif($request->department)
            {
                $filter = $request->department;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.numbers as numbers1')
                ->where('department', $filter)
                ->paginate(2);
            }
            
            elseif($request->topic)
            {
                $filter = $request->topic;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.numbers as numbers1')
                ->where('topicResearch', $filter)
                ->paginate(2);
                
            }
            elseif($request->offer)
            {
                $filter = $request->offer;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->join('fk_skill', 'fk_skill.teacher_id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.numbers as numbers1')
                ->where('fk_skill.skill_id', $filter)
                ->orderBy('id1')
                ->paginate(2);
                
            }
            elseif($request->number)
            {
                $filter = $request->number;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.numbers as numbers1')
                ->where('numbers', $filter)
                ->paginate(2);
                
            }
            else {
                $data = DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.numbers as numbers1')
                ->paginate(2);
            }

        $user = DB::table('user')
        ->join('teacher','user.id','=','teacher.id')
        ->select("user.*")
        ->get();

        $user1 = DB::table('user')
        ->join('teacher','user.id','=','teacher.id')
        ->orderBy('name','asc')
        ->get();

        $user2 = DB::table('user')
        ->join('teacher','user.id','=','teacher.id')
        ->orderBy('email', 'asc')
        ->get();
        
        $teacher = DB::table('teacher')
        ->select("*")
        ->get();

        $skill1 = DB::table('fk_skill')
        ->join('skill','skill.id','=','fk_skill.skill_id')
        ->select('fk_skill.teacher_id as teacher_id1','skill.name as name1' )
        ->get();

        
        $skill = skill::all();
        return view('Pages.Student.DS2',['user' => $user, 'skill' => $skill, 'skill1' => $skill1,'user1' => $user1,'user2' => $user2, 'teacher' => $teacher,'data' => $data, 'category'=>$category]);
    }
    public function getProfile($id){
        $kcheck = [];
        $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('students','students.id','=','fk_skill.student_id')
                ->where(['fk_skill.student_id'=>$id])
                ->get()->toArray();
        foreach($skill_all as $k){
            array_push($kcheck,$k['name']);
        }
        $student = student::find($id);
        $category = category::all()[1];
        $skill = skill::all();
        if($student != null)

        return view('Pages.Student.Profile',['student'=>$student, 'category'=>$category,'skill'=>$skill,'skillcheck'=>$kcheck]);
        return view('Pages.Student.Profile2', ['category'=>$category,'skill'=>$skill]);


    }
    
    public function postUpdate(Request $request, $id){
        $kcheck = [];
        $skill = skill::all();
        $skill_id = $request->skill_id;
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
            $student2 -> city = $request->city;
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
            if($student2->save()){
                if($skill_id){
                    FK_Skill::where('student_id',$id)->delete();
                    foreach($skill_id as $sk){
                        FK_Skill::create(['skill_id'=>$sk,'student_id'=>$request->id]);
                    }
                }else{
                    FK_Skill::where('student_id',$id)->delete();
                }
            }
            $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('students','students.id','=','fk_skill.student_id')
                ->where(['fk_skill.student_id'=>$id])
                ->get()->toArray();
        foreach($skill_all as $k){
            array_push($kcheck,$k['name']);
        }
            return view('Pages.Student.Profile',['student'=>$student2, 'category'=>$category,'skill'=>$skill,'skillcheck'=>$kcheck])->with('success','Bạn cập nhật thành công!');
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
            $student -> city = $request->city;
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
            if($student->save()){
                if($skill_id){
                    FK_Skill::where('student_id',$id)->delete();
                    foreach($skill_id as $sk){
                        FK_Skill::create(['skill_id'=>$sk,'student_id'=>$request->id]);
                    }
                }else{
                    FK_Skill::where('student_id',$id)->delete();
                }
            }
            $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('students','students.id','=','fk_skill.student_id')
                ->where(['fk_skill.student_id'=>$id])
                ->get()->toArray();
        foreach($skill_all as $k){
            array_push($kcheck,$k['name']);
        }
            return view('Pages.Student.Profile',['student'=>$student, 'category'=>$category,'skill'=>$skill,'skillcheck'=>$kcheck])->with('success','Bạn cập nhật thành công!');
        }


    }
    public function getCV($id){
        $category = category::all()[8];
        $student = student::find($id);
        $user = User::find($id);

        $kcheck = [];
        $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('students','students.id','=','fk_skill.student_id')
                ->where(['fk_skill.student_id'=>$id])
                ->get()->toArray();
        foreach($skill_all as $k){
            array_push($kcheck,$k['name']);
        }
        if($student != null){

          
            return view('Pages.Student.CV',['student'=>$student, 'user'=>$user, 'category'=>$category,'skillcheck'=>$kcheck]);
        }  return redirect()-> back() ->with('success', 'Tài khoản này không tồn tại');

    }
    public function getShare($id){
        $category = category::all()[9];
        $user = User::find($id);
        $user_blog = blog::where('id', $id);
        
        if(!empty($user_blog->get())){
            
            $blog = $user_blog->first();
            if($blog != null){
                $BL_temp = $user_blog->simplePaginate(2);
                return view('Pages.Student.Share',['blog'=>$blog, 'user_blog'=>$user_blog, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
            }
            
            
        }return redirect()->back()->with('danger', "Tài khoản này chưa có bài đăng nào");
        

    }
    public function getShare2( $id_blog){
        $category = category::all()[9];
        
        $blog = blog::find($id_blog);
        
        if($blog != null){
            $user = User::find($blog -> id);
            $user_blog = blog::where('id', $blog ->id);
            
            $BL_temp = $user_blog->simplePaginate(2);
            return view('Pages.Student.Share',['blog'=>$blog, 'user_blog'=>$user_blog, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
        }return redirect()->back()->with('danger', "Không có bài đăng nào như bạn chọn");
        

    }
    public function messenger($id){
        $student_id = Auth::user()->id;
        $category = category::all()[10];
        $category_user = User::select(['user.category'])->where('id',$id)->first();
        if($category_user->category == '1'){
            $thread_id = ThreadMessenger::where(['user_student'=>$student_id,'user_company'=>$id])->first();
            if($thread_id){
                $messenger = Messenger::select('messenger.id','messenger.fk_thread_id','messenger.fk_user_id','messenger.message','user.name','user.category','messenger_threads.user_student','messenger_threads.user_teacher','messenger_threads.user_company')
                ->join('user','user.id','=','messenger.fk_user_id')
                ->join('messenger_threads','messenger_threads.id','=','messenger.fk_thread_id')
                ->where(['messenger_threads.id'=>$thread_id->id])->limit(10)
                ->orderBy('messenger.created_at', 'desc')
                ->get()->toArray();
            }else{
                $messenger = null;
            }
        }elseif($category_user->category == '2'){
            $thread_id = ThreadMessenger::where(['user_student'=>$student_id,'user_teacher'=>$id])->first();
            if($thread_id){
                $messenger = Messenger::select('messenger.id','messenger.fk_thread_id','messenger.fk_user_id','messenger.message','user.name','user.category','messenger_threads.user_student','messenger_threads.user_teacher','messenger_threads.user_company')
                ->join('user','user.id','=','messenger.fk_user_id')
                ->join('messenger_threads','messenger_threads.id','=','messenger.fk_thread_id')
                ->where(['messenger_threads.id'=>$thread_id->id])->limit(10)
                ->orderBy('messenger.created_at', 'desc')
                ->get()->toArray();
            }else{
                $messenger = null;
            }
        }
            return view('Pages.Student.Messenger',['category'=>$category,'id'=>$id,'messenger'=>$messenger,'user_id'=>$student_id]);
    }
    public function send_messenger(Request $request){
        $mes = $request->mes;
        $name = Auth::user()->name;
        $student_id = Auth::user()->id;
        $id = $request->id;
        $category_user = User::select(['user.category'])->where('id',$id)->first();
        if($category_user->category == '1'){
            $thread_mes = ThreadMessenger::where(['user_student'=>$student_id,'user_company'=>$id])->first();
            if($thread_mes == null){
                if($ThreadMessenger = ThreadMessenger::create(['user_student'=>$student_id,'user_company'=>$id])){
                    $Messenger = Messenger::create(['fk_thread_id'=>$ThreadMessenger->id,'fk_user_id'=>$student_id,'message'=>$mes]);
                }
            }else{
                    $Messenger = Messenger::create(['fk_thread_id'=>$thread_mes->id,'fk_user_id'=>$student_id,'message'=>$mes]);
            }
        } elseif($category_user->category == '2'){
             $thread_mes = ThreadMessenger::where(['user_student'=>$student_id,'user_teacher'=>$id])->first();
            if($thread_mes == null){
                if($ThreadMessenger = ThreadMessenger::create(['user_student'=>$student_id,'user_teacher'=>$id])){
                    // $thread_id = $ThreadMessenger->id;
                    $Messenger = Messenger::create(['fk_thread_id'=>$ThreadMessenger->id,'fk_user_id'=>$student_id,'message'=>$mes]);
                }
            }else{
                    $Messenger = Messenger::create(['fk_thread_id'=>$thread_mes->id,'fk_user_id'=>$student_id,'message'=>$mes]);
            }
        }
        return json_encode([
            'mes'=>$Messenger,
            'name'=>$name 
        ]);
    }
    public function load_mes(Request $request){
        $nguoinhan = $request->nguoinhan;
        $itemlast = $request->itemlast;
        $student_id = Auth::user()->id;
        $category = category::all()[1];
        $category_user = User::select(['user.category'])->where('id',$nguoinhan)->first();
        if($category_user->category == '1'){
            $thread_id = ThreadMessenger::where(['user_student'=>$student_id,'user_company'=>$nguoinhan])->first();
            if($thread_id){
                $messenger = Messenger::select('messenger.id','messenger.fk_thread_id','messenger.fk_user_id','messenger.message','user.name','user.category','messenger_threads.user_student','messenger_threads.user_teacher','messenger_threads.user_company','messenger.created_at')
                ->join('user','user.id','=','messenger.fk_user_id')
                ->join('messenger_threads','messenger_threads.id','=','messenger.fk_thread_id')
                ->where(['messenger_threads.id'=>$thread_id->id])->where('messenger.id','<', $itemlast)->orderBy('messenger.created_at', 'DESC')->limit(10)
                ->get();
            }else{
                $messenger = null;
            }
        }elseif($category_user->category == '2'){
            $thread_id = ThreadMessenger::where(['user_student'=>$student_id,'user_teacher'=>$nguoinhan])->first();
            if($thread_id){
                $messenger = Messenger::select('messenger.id','messenger.fk_thread_id','messenger.fk_user_id','messenger.message','user.name','user.category','messenger_threads.user_student','messenger_threads.user_teacher','messenger_threads.user_company','messenger.created_at')
                ->join('user','user.id','=','messenger.fk_user_id')
                ->join('messenger_threads','messenger_threads.id','=','messenger.fk_thread_id')
                ->where(['messenger_threads.id'=>$thread_id->id])->where('messenger.id','<', $itemlast)->orderBy('messenger.created_at', 'DESC')->limit(10)
                ->get();
            }else{
                $messenger = null;
            }
        }
        return json_encode([
            'load_mes'=>$messenger,
            'user_id'=>$student_id
        ]);
    }
}
