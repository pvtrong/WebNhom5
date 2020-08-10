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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    //
    public function getHome(){
        $category = category::all()[0];
        return view('Pages.Company.home', ['category'=>$category]);

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
        return view('Pages.Company.Blog',['category'=>$category,'BL_cpn' => $BL_cpn]) -> with('thongbao','thành công');
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

        return view('Pages.Company.Blog',['category'=>$category,'BL_cpn' => $BL_cpn])-> with('thongbao','thành công');
    
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
        return view('Pages.Company.Blog',['category'=>$category,'BL_cpn' => $BL_cpn]);
    
    }
    public function getDS1(Request $request){
        $category = category::all()[4];
        $company = company::all();
        
        if($request->search)
        {
        $search = $request->search;
        $data = DB::table('students')
        ->join('user','user.id','=','students.id')
        ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
        ->where('name', 'like', "%$search%")
        ->where('email', 'like', "%$search%")
        ->orwhere('mobile', 'like', "%$search%")
        ->orwhere('department', 'like', "%$search%")
        ->orwhere('gpa', 'like', "%$search%")
        ->orwhere('skill', 'like', "%$search%")
        ->paginate(2);
        }
        
        elseif($request->name)
        {
            $filter = $request->name;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('user.id', $filter)
            ->paginate(2);
            
        }
        elseif($request->email)
        {
            $filter = $request->email;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('user.id', $filter)
            ->paginate(2);
            
        }
        elseif($request->mobile)
        {
            $filter = $request->mobile;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('mobile', $filter)
            ->paginate(2);
            
        }
        elseif($request->department)
        {
            $filter = $request->department;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('department', $filter)
            ->paginate(2);
            
        }
        elseif($request->gpa)
        {
            $filter = $request->gpa;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('gpa', $filter)
            ->paginate(2);
            
        }
        elseif($request->skill)
        {
            $filter = $request->skill;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('skill', $filter)
            ->paginate(2);
            
        }
        
        else {
            $data = DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
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
            
        return view('Pages.Company.DS1',['user' => $user,'user1'=> $user1,'user2'=>$user2 ,'students' => $students, 'data' => $data, 'category'=>$category]);
    }
    public function getDS2(Request $request){
        $category = category::all()[3];
        if($request->search)
            {
            $search = $request->search;
            $data = DB::table('teacher')
            ->join('user','user.id','=','teacher.id')
            ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
            ->where('name', 'like', "%$search%")
            ->orwhere('department', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
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
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('user.id', $filter)
                ->paginate(2);
                
            }
            elseif($request->email)
            {
                $filter = $request->email;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('user.id', $filter)
                ->paginate(2);
                
            }
            elseif($request->department)
            {
                $filter = $request->department;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('department', $filter)
                ->paginate(2);
            }
            
            elseif($request->topic)
            {
                $filter = $request->topic;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('topicResearch', $filter)
                ->paginate(2);
                
            }
            elseif($request->offer)
            {
                $filter = $request->offer;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('offer', $filter)
                ->paginate(2);
                
            }
            elseif($request->number)
            {
                $filter = $request->number;
                $data =DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
                ->where('numbers', $filter)
                ->paginate(2);
                
            }
            else {
                $data = DB::table('teacher')
                ->join('user','user.id','=','teacher.id')
                ->select('user.id as id1','user.name as name1','user.email as email1', 'teacher.department as department1', 'teacher.topicResearch as topicResearch1','teacher.offer as offer1','teacher.numbers as numbers1')
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
            
        return view('Pages.Company.DS2',['user' => $user, 'user1'=>$user1,'user2'=>$user2, 'teacher' => $teacher, 'data' => $data, 'category'=>$category]);
    }
    public function getHelp(){
        $category = category::all()[7];
        return view('Pages.Company.Help', ['category'=>$category]);
    }
    public function getProfile($id){
        $company = company::find($id);
        $category = category::all()[1];
        if($company != null)

        return view('Pages.Company.Profile',['company'=>$company, 'category'=>$category]);
        else return view('Pages.Company.Profile2');


    }
    public function getSetting(){
        $category = category::all()[6];
        return view('Pages.Company.Setting', ['category'=>$category]);
    }
    public function postUpdate(Request $request, $id){
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
            $company2->save();
            return view('Pages.Company.Profile',['company'=>$company2, 'category'=>$category])->with('success', "Cập nhật thông tin thành công!");
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
            return view('Pages.Company.Profile',['company'=>$company, 'category'=>$category])->with('success', "Cập nhật thông tin thành công!");
        }
    }
    public function getCV($id){
        $company = company::find($id);
        $user = User::find($id);
        $category = category::all()[8];
        if($company != null){

            return view('Pages.Company.CV',['company'=>$company, 'user'=>$user, 'category'=>$category]);
        }

    }
    public function getShare($id){
        $category = category::all()[9];
        $user = User::find($id);
        $user_blog = blog::where('id', $id);
        
        if($user_blog != null){
            $blog = $user_blog->first();
            $BL_temp = $user_blog->simplePaginate(2);
            return view('Pages.Company.Share',['blog'=>$blog, 'user_blog'=>$user_blog, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
        }
        

    }
    public function getShare2( $id_blog){
        $category = category::all()[9];
        
        $blog = blog::find($id_blog);
        
        if($blog != null){
            $user = User::find($blog -> id);
            $user_blog = blog::where('id', $blog ->id);
            $BL_temp = $user_blog;
            return view('Pages.Company.Share',['blog'=>$blog, 'user_blog'=>$user_blog, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
        }
        

    }
}
