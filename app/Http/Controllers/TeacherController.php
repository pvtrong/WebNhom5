<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\student;
use App\teacher;
use App\company;
use App\User;
use App\blog;
use App\Model\Category;
use App\Model\Messenger;
use App\Model\ThreadMessenger;
use App\Model\Skill;
use App\Model\Fk_Skill;
use Illuminate\Support\Facades\DB;
use Auth;

class TeacherController extends Controller
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
        return view('Pages.Teacher.home', ['skill_all3'=> $skill_all3, 'skill_all2'=> $skill_all2, 'skill_all'=> $skill_all,'category'=>$category, 'companys'=>$companys, 'teachers'=>$teachers, 'students' => $students, 'blogs' => $blogs]);

    }
    public function getBlog(){
       
        $category = category::all()[2];
        $id = Auth::user()->id;
        $BL_Tr = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);
       
        return view('Pages.Teacher.Blog', ['BL_Tr' => $BL_Tr, 'category'=>$category]);
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
        $BL_Tr = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);
        return view('Pages.Teacher.Blog',['category'=>$category,'BL_Tr' => $BL_Tr]) -> with('success','Bạn thêm bài đăng thành công');
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
        $BL_Tr = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);

        return view('Pages.Teacher.Blog',['category'=>$category,'BL_Tr' => $BL_Tr])-> with('success','Bạn cập nhật thành công');
    
    }
    public function getUpdateBlog($id_blog){
        $category = category::all()[2]; 
        $BL_Tr = DB::table('blog')->paginate(4);

        $blog= blog::find($id_blog);

        return view('Pages.Teacher.updateBlog',['blog'=>$blog,'category'=>$category,'BL_Tr' => $BL_Tr]);
    }

    public function delBlog($id_blog) {
        $category = category::all()[2]; 
        $blog = blog::find($id_blog);
        if($blog->Hinh != NULL) unlink('upload/blog/'.$blog->Hinh);
        $blog->delete();
        $id = Auth::user()->id;
        $BL_Tr = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);
        return view('Pages.Teacher.Blog',['category'=>$category,'BL_Tr' => $BL_Tr])-> with('success','Bạn xoá bài đăng thành công');
    
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
            ->select('user.id as id1','user.name as name1','email as email1',  'address as address1', 'mobile as mobile1', 'salary as salary1')
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
        return view('Pages.Teacher.DS1', ['user' => $user, 'skill' => $skill, 'skill1' => $skill1,'user1'=>$user1,'user2'=>$user2,'company' => $company,  'data' => $data, 'category'=>$category]);
    }
    public function getDS2(Request $request){
        $category = category::all()[4];
        if($request->search)
        {
        $search = $request->search;
        $data = DB::table('students')
        ->join('user','user.id','=','students.id')
        ->join('fk_skill','fk_skill.student_id','=','user.id')
        ->join('skill','skill.id','=','fk_skill.skill_id')
        ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1')
        ->where('user.name', 'like', "%$search%")
        ->orwhere('email', 'like', "%$search%")
        ->orwhere('mobile', 'like', "%$search%")
        ->orwhere('department', 'like', "%$search%")
        ->orwhere('gpa', 'like', "%$search%")
        ->orwhere('skill.name', 'like', "%$search%")
        ->orderBy('id1')
        ->distinct()
        ->paginate(2);
        
        } 
        elseif($request->name)
        {
            $filter = $request->name;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1')
            ->where('user.id', $filter)
            ->paginate(2);
            
        }
        elseif($request->email)
        {
            $filter = $request->email;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1')
            ->where('user.id', $filter)
            ->paginate(2);
            
        }
        elseif($request->mobile)
        {
            $filter = $request->mobile;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1')
            ->where('mobile', $filter)
            ->paginate(2);
            
        }
        elseif($request->department)
        {
            $filter = $request->department;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1')
            ->where('department', $filter)
            ->paginate(2);
            
        }
        elseif($request->gpa)
        {
            $filter = $request->gpa;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1')
            ->where('gpa', $filter)
            ->paginate(2);
            
        }
        elseif($request->skill)
        {
           
            $filter = $request->skill;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->join('fk_skill', 'fk_skill.student_id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1')
            ->where('fk_skill.skill_id', $filter)
            ->orderBy('id1')
            ->paginate(2);
            
        }
        
        else {
            $data = DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1')
            ->paginate(2);
        }
        
        $user = DB::table('user')
        ->join('students','user.id','=','students.id')
        ->select("user.*")
        ->get();
       
        $user1 = DB::table('user')
        ->join('students','user.id','=','students.id')
        ->orderBy('name', 'asc')
        ->get();

        $user2 = DB::table('user')
        ->join('students','user.id','=','students.id')
        ->orderBy('email', 'asc')
        ->get();
        
        $students = DB::table('students')
        ->select("*")
        ->get();

        $skill1 = DB::table('fk_skill')
        ->join('skill','skill.id','=','fk_skill.skill_id')
        ->select('fk_skill.student_id as student_id1','skill.name as name1' )
        ->get();

        $skill = skill::all();
    return view('Pages.Teacher.DS2',['user' => $user, 'skill' => $skill, 'skill1' => $skill1,'user1'=> $user1,'user2'=>$user2 ,'students' => $students, 'data' => $data, 'category'=>$category]);
}
    public function getProfile($id){
        $kcheck = [];
        $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('teacher','teacher.id','=','fk_skill.teacher_id')
                ->where(['fk_skill.teacher_id'=>$id])
                ->get()->toArray();
        foreach($skill_all as $k){
            array_push($kcheck,$k['name']);
        }
        $skill = skill::all();
        $teacher = teacher::find($id);
        $category = category::all()[1];
        if($teacher != null)

        return view('Pages.Teacher.Profile',['teacher'=>$teacher, 'category'=>$category,'skill'=>$skill,'skillcheck'=>$kcheck]);
        return view('Pages.Teacher.Profile2',[ 'category'=>$category,'skill'=>$skill]);


    }
    public function getSetting(){
        $category = category::all()[6];
        return view('Pages.Teacher.Setting', ['category'=>$category]);
    }
    public function postUpdate(Request $request, $id){
        $kcheck = [];
        $skill = skill::all();
        $skill_id = $request->skill_id;
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
            if($teacher->save()){
                if($skill_id){
                    $adc = FK_Skill::where('teacher_id',$id)->delete();
                    foreach($skill_id as $sk){
                        FK_Skill::create(['skill_id'=>$sk,'teacher_id'=>$request->id]);
                    }
                }else{
                    $adc = FK_Skill::where('teacher_id',$id)->delete();
                }
            }
            $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('teacher','teacher.id','=','fk_skill.teacher_id')
                ->where(['fk_skill.teacher_id'=>$id])
                ->get()->toArray();
            foreach($skill_all as $k){
                array_push($kcheck,$k['name']);
            }
            return view('Pages.Teacher.Profile',['teacher'=>$teacher2, 'category'=>$category,'skill'=>$skill,'skillcheck'=>$kcheck])->with('success', "Cập nhật thông tin thành công!");
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
            if($teacher->save()){
                if($skill_id){
                    FK_Skill::where('teacher_id',$id)->delete();
                    foreach($skill_id as $sk){
                        FK_Skill::create(['skill_id'=>$sk,'teacher_id'=>$request->id]);
                    }
                }else{
                    FK_Skill::where('teacher_id',$id)->delete();
                }
            }
            $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('teacher','teacher.id','=','fk_skill.teacher_id')
                ->where(['fk_skill.teacher_id'=>$id])
                ->get()->toArray();
            foreach($skill_all as $k){
                array_push($kcheck,$k['name']);
            }
            return view('Pages.Teacher.Profile',['teacher'=>$teacher, 'category'=>$category,'skill'=>$skill,'skillcheck'=>$kcheck])->with('success', "Cập nhật thông tin thành công!");
        }
    }
    public function getCV($id){
        $teacher = teacher::find($id);
        $user = User::find($id);
        $category = category::all()[8];
        $kcheck = [];
        $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('teacher','teacher.id','=','fk_skill.teacher_id')
                ->where(['fk_skill.teacher_id'=>$id])
                ->get()->toArray();
        foreach($skill_all as $k){
            array_push($kcheck,$k['name']);
        }
        if($teacher != null){
        
            return view('Pages.Teacher.CV',['teacher'=>$teacher, 'user'=>$user, 'category'=>$category,'skillcheck'=>$kcheck]);
        }return redirect()-> back() ->with('success', 'Tài khoản này không tồn tại');

    }
    public function getShare($id){
        $category = category::all()[9];
        $user = User::find($id);
        $user_blog = blog::where('id', $id);
        
        if(!empty($user_blog->get())){
            
            $blog = $user_blog->first();
            if($blog != null){
                $BL_temp = $user_blog->simplePaginate(2);
                return view('Pages.Teacher.Share',['blog'=>$blog, 'user_blog'=>$user_blog, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
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
            return view('Pages.Teacher.Share',['blog'=>$blog, 'user_blog'=>$user_blog, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
        }return redirect()->back()->with('danger', "Không có bài đăng nào như bạn chọn");
        

    }
    public function messenger($id){
        $teacher_id = Auth::user()->id;
        $category = category::all()[10];
        $category_user = User::select(['user.category'])->where('id',$id)->first();
        if($category_user->category == '1'){
            $thread_id = ThreadMessenger::where(['user_teacher'=>$teacher_id,'user_company'=>$id])->first();
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
        }elseif($category_user->category == '3'){
            $thread_id = ThreadMessenger::where(['user_teacher'=>$teacher_id,'user_student'=>$id])->first();
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
            return view('Pages.Teacher.Messenger',['category'=>$category,'id'=>$id,'messenger'=>$messenger,'user_id'=>$teacher_id]);
    }
    public function send_messenger(Request $request){
        $mes = $request->mes;
        $name = Auth::user()->name;
        $teacher_id = Auth::user()->id;
        $id = $request->id;
        $category_user = User::select(['user.category'])->where('id',$id)->first();
        if($category_user->category == '1'){
            $thread_mes = ThreadMessenger::where(['user_teacher'=>$teacher_id,'user_company'=>$id])->first();
            if($thread_mes == null){
                if($ThreadMessenger = ThreadMessenger::create(['user_teacher'=>$teacher_id,'user_company'=>$id])){
                    $Messenger = Messenger::create(['fk_thread_id'=>$ThreadMessenger->id,'fk_user_id'=>$teacher_id,'message'=>$mes]);
                }
            }else{
                    $Messenger = Messenger::create(['fk_thread_id'=>$thread_mes->id,'fk_user_id'=>$teacher_id,'message'=>$mes]);
            }
        } elseif($category_user->category == '3'){
             $thread_mes = ThreadMessenger::where(['user_teacher'=>$teacher_id,'user_student'=>$id])->first();
            if($thread_mes == null){
                if($ThreadMessenger = ThreadMessenger::create(['user_teacher'=>$teacher_id,'user_student'=>$id])){
                    $Messenger = Messenger::create(['fk_thread_id'=>$ThreadMessenger->id,'fk_user_id'=>$teacher_id,'message'=>$mes]);
                }
            }else{
                    $Messenger = Messenger::create(['fk_thread_id'=>$thread_mes->id,'fk_user_id'=>$teacher_id,'message'=>$mes]);
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
        $teacher_id = Auth::user()->id;
        $category = category::all()[1];
        $category_user = User::select(['user.category'])->where('id',$nguoinhan)->first();
        if($category_user->category == '1'){
            $thread_id = ThreadMessenger::where(['user_teacher'=>$teacher_id,'user_company'=>$nguoinhan])->first();
            if($thread_id){
                $messenger = Messenger::select('messenger.id','messenger.fk_thread_id','messenger.fk_user_id','messenger.message','user.name','user.category','messenger_threads.user_student','messenger_threads.user_teacher','messenger_threads.user_company','messenger.created_at')
                ->join('user','user.id','=','messenger.fk_user_id')
                ->join('messenger_threads','messenger_threads.id','=','messenger.fk_thread_id')
                ->where(['messenger_threads.id'=>$thread_id->id])->where('messenger.id','<', $itemlast)->orderBy('messenger.created_at', 'DESC')->limit(10)
                ->get();
            }else{
                $messenger = null;
            }
        }elseif($category_user->category == '3'){
            $thread_id = ThreadMessenger::where(['user_teacher'=>$teacher_id,'user_student'=>$nguoinhan])->first();
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
            'user_id'=>$teacher_id
        ]);
    }
}
