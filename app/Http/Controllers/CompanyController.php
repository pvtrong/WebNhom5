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
use Illuminate\Support\Facades\DB;
use App\Model\Skill;
use App\Model\Fk_Skill;
use Auth;
class CompanyController extends Controller
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
        return view('Pages.Company.home', ['skill_all3'=> $skill_all3, 'skill_all2'=> $skill_all2, 'skill_all'=> $skill_all,'category'=>$category, 'companys'=>$companys, 'teachers'=>$teachers, 'students' => $students, 'blogs' => $blogs]);

    }
    public function getBlog(){
       
        $category = category::all()[2];
        $id = Auth::user()->id;
        $BL_cpn = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);
       
        return view('Pages.Company.Blog', ['BL_cpn' => $BL_cpn, 'category'=>$category]);
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
        $BL_cpn = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);
        return view('Pages.Company.Blog',['category'=>$category,'BL_cpn' => $BL_cpn]) -> with('success','Bạn thêm bài đăng thành công');
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
        $BL_cpn = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);

        return view('Pages.Company.Blog',['category'=>$category,'BL_cpn' => $BL_cpn])-> with('success','Bạn cập nhật thành công');
    
    }
    public function getUpdateBlog($id_blog){
        $category = category::all()[2]; 
        $BL_cpn = DB::table('blog')->paginate(4);

        $blog= blog::find($id_blog);

        return view('Pages.Company.updateBlog',['blog'=>$blog,'category'=>$category,'BL_cpn' => $BL_cpn]);
    }

    public function delBlog($id_blog) {
        $category = category::all()[2]; 
        $blog = blog::find($id_blog);
        if($blog->Hinh != NULL) unlink('upload/blog/'.$blog->Hinh);
        $blog->delete();
        $id = Auth::user()->id;
        $BL_cpn = DB::table('blog')
        ->where('id',$id)
        ->paginate(4);
        return view('Pages.Company.Blog',['category'=>$category,'BL_cpn' => $BL_cpn])-> with('success','Bạn xoá bài đăng thành công');
    
    }
    public function getDS1(Request $request){
        $category = category::all()[4];
        $company = company::all();
        
        if($request->search)
        {
        $search = $request->search;
        $data = DB::table('students')
        ->join('user','user.id','=','students.id')
        ->join('fk_skill','fk_skill.student_id','=','students.id')
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
        //dd($data);
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

        return view('Pages.Company.DS1',['user' => $user, 'skill'=>$skill,'skill1'=>$skill1,'user1'=> $user1,'user2'=>$user2 ,'students' => $students, 'data' => $data, 'category'=>$category]);
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
            ->orwhere('skill.name', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
            ->orwhere('topicResearch', 'like', "%$search%")
            ->orwhere('numbers', 'like', "%$search%")
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
        return view('Pages.Company.DS2',['user' => $user, 'skill'=>$skill,'skill1'=>$skill1, 'user1'=>$user1,'user2'=>$user2, 'teacher' => $teacher, 'data' => $data, 'category'=>$category]);
    }
    public function getProfile($id){
        $kcheck = [];
        $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('company','company.id','=','fk_skill.company_id')
                ->where(['fk_skill.company_id'=>$id])
                ->get()->toArray();
        foreach($skill_all as $k){
            array_push($kcheck,$k['name']);
        }
        $skill = skill::all();
        $company = company::find($id);
        $category = category::all()[1];
        if($company != null)

        return view('Pages.Company.Profile',['company'=>$company, 'category'=>$category,'skill'=>$skill,'skillcheck'=>$kcheck]);
        else return view('Pages.Company.Profile2',[ 'category'=>$category,'skill'=>$skill]);


    }
    public function getSetting(){
        $category = category::all()[6];
        return view('Pages.Company.Setting', ['category'=>$category]);
    }
    public function postUpdate(Request $request, $id){
        $kcheck = [];
        $skill = skill::all();
        $skill_id = $request->skill_id;
        $company = company::find($id);
        $category = category::all()[1];
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
            if($company2->save()){
                if($skill_id){
                    $adc = FK_Skill::where('company_id',$id)->delete();
                    foreach($skill_id as $sk){
                        FK_Skill::create(['skill_id'=>$sk,'company_id'=>$request->id]);
                    }
                }else{
                    $adc = FK_Skill::where('company_id',$id)->delete();
                }
            }
            $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('company','company.id','=','fk_skill.company_id')
                ->where(['fk_skill.company_id'=>$id])
                ->get()->toArray();
            foreach($skill_all as $k){
                array_push($kcheck,$k['name']);
            }
            return view('Pages.Company.Profile',['company'=>$company2, 'category'=>$category,'skill'=>$skill,'skillcheck'=>$kcheck])->with('success', "Cập nhật thông tin thành công!");
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
            if($company->save()){
                if($skill_id){
                    FK_Skill::where('company_id',$id)->delete();
                    foreach($skill_id as $sk){
                        FK_Skill::create(['skill_id'=>$sk,'company_id'=>$request->id]);
                    }
                }else{
                    FK_Skill::where('company_id',$id)->delete();
                }
            }
            $skill_all = Fk_Skill::select('skill.name')
                ->join('skill','skill.id','=','fk_skill.skill_id')
                ->join('company','company.id','=','fk_skill.company_id')
                ->where(['fk_skill.company_id'=>$id])
                ->get()->toArray();
            foreach($skill_all as $k){
                array_push($kcheck,$k['name']);
            }
            return view('Pages.Company.Profile',['company'=>$company, 'category'=>$category,'skill'=>$skill,'skillcheck'=>$kcheck])->with('success', "Cập nhật thông tin thành công!");
        }
    }
    public function getCV($id){
        $company = company::find($id);
        $user = User::find($id);
        $category = category::all()[8];
        $kcheck = [];
        $skill_all = Fk_Skill::select('skill.name')
            ->join('skill','skill.id','=','fk_skill.skill_id')
            ->join('company','company.id','=','fk_skill.company_id')
            ->where(['fk_skill.company_id'=>$id])
            ->get()->toArray();
        foreach($skill_all as $k){
            array_push($kcheck,$k['name']);
        }
        if($company != null){

            return view('Pages.Company.CV',['company'=>$company, 'user'=>$user, 'category'=>$category,'skillcheck'=>$kcheck]);
        }

    }
    public function getShare($id){
        $category = category::all()[9];
        $user = User::find($id);
        $user_blog = blog::where('id', $id);
        
        if(!empty($user_blog->get())){
            
            $blog = $user_blog->first();
            if($blog != null){
                $BL_temp = $user_blog->simplePaginate(2);
                return view('Pages.Company.Share',['blog'=>$blog, 'user_blog'=>$user_blog, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
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
            return view('Pages.Company.Share',['blog'=>$blog, 'user_blog'=>$user_blog, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
        }return redirect()->back()->with('danger', "Không có bài đăng nào như bạn chọn");
        

    }
    public function messenger($id){
        $company_id = Auth::user()->id;
        $category = category::all()[10];
        $category_user = User::select(['user.category'])->where('id',$id)->first();
        if($category_user->category == '3'){
            $thread_id = ThreadMessenger::where(['user_company'=>$company_id,'user_student'=>$id])->first();
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
            $thread_id = ThreadMessenger::where(['user_company'=>$company_id,'user_teacher'=>$id])->first();
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
            return view('Pages.Company.Messenger',['category'=>$category,'id'=>$id,'messenger'=>$messenger,'user_id'=>$company_id]);
    }
    public function send_messenger(Request $request){
        $mes = $request->mes;
        $name = Auth::user()->name;
        $company_id = Auth::user()->id;
        $id = $request->id;
        $category_user = User::select(['user.category'])->where('id',$id)->first();
        if($category_user->category == '3'){
            $thread_mes = ThreadMessenger::where(['user_company'=>$company_id,'user_student'=>$id])->first();
            if($thread_mes == null){
                if($ThreadMessenger = ThreadMessenger::create(['user_company'=>$company_id,'user_student'=>$id])){
                    $Messenger = Messenger::create(['fk_thread_id'=>$ThreadMessenger->id,'fk_user_id'=>$company_id,'message'=>$mes]);
                }
            }else{
                    $Messenger = Messenger::create(['fk_thread_id'=>$thread_mes->id,'fk_user_id'=>$company_id,'message'=>$mes]);
            }
        } elseif($category_user->category == '2'){
             $thread_mes = ThreadMessenger::where(['user_company'=>$company_id,'user_teacher'=>$id])->first();
            if($thread_mes == null){
                if($ThreadMessenger = ThreadMessenger::create(['user_company'=>$company_id,'user_teacher'=>$id])){
                    $Messenger = Messenger::create(['fk_thread_id'=>$ThreadMessenger->id,'fk_user_id'=>$company_id,'message'=>$mes]);
                }
            }else{
                    $Messenger = Messenger::create(['fk_thread_id'=>$thread_mes->id,'fk_user_id'=>$company_id,'message'=>$mes]);
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
        $company_id = Auth::user()->id;
        $category = category::all()[1];
        $category_user = User::select(['user.category'])->where('id',$nguoinhan)->first();
        if($category_user->category == '3'){
            $thread_id = ThreadMessenger::where(['user_company'=>$company_id,'user_student'=>$nguoinhan])->first();
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
            $thread_id = ThreadMessenger::where(['user_company'=>$company_id,'user_teacher'=>$nguoinhan])->first();
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
            'user_id'=>$company_id
        ]);
    }
}
