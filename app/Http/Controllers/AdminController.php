<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Admin;
use App\User;
use App\Model\Category;
use Auth;

use App\Model\Messenger;
use App\blog;
use App\student;
use App\teacher;
use App\company;
// use Illuminate\Auth\SessionGuard;

class AdminController extends Controller
{

    public function adminHome(){
        return view('Admin.home');
    }
    public function Login_admin(){
        return view('Admin.Login_admin');
    }

    public function post_Login_admin(Request $request){
 		if(Auth::guard('adm')->attempt($request->only('email','password'))){
                return redirect()->route('admin-home')->with('success','chào mừng quay trở lại');
		} else {
			return 'false';
		}
    }

    public function registration_admin(){
        return view('Admin.registration_admin');
    }

    public function post_registration_admin(Request $request){
        // dd($request->all());
        $request->merge(['password'=>bcrypt($request->password)]);
        if(Admin::create($request->all())){
			return redirect()->route('login-admin');
		}else{
			return 'false';
		}
    }
    public function Logout_admin(){
        Auth::guard('adm')->logout();
        return redirect()->route('login-admin');
    }

    public function category(){
        $category = Category::all();
        return view('Admin.category',['cat'=>$category]);
    }

    public function post_category(Request $req){
        $this->validate($req,[
            'name' =>'required|unique:Category',
        ],[
            'name.required'=>' Không được trống',
        ]);
        $category = Category::create($req->all());
        return response()->json(['success'=>'them thanh cong san pham']);
    }

    public function edit_category($id){
        $category = Category::find($id);
        return json_encode([
			'cat'=>$category,
		]);
    }

    public function post_edit_category(Request $req, $id){
        $this->validate($req,[
            'name'=>'required|unique:Category,name,'.$id,
        ],[
            'name.required'=>'Tên danh mục không được trống',
            'name.unique'=>'Tên danh đã tồn tại ',
        ]);
        Category::find($id)->update($req->all());
        return response()->json(['success'=>'update thành cong']);
        
    }

    public function delete_category($id){
        $category = Category::find($id)->delete();
        return response()->json(['success'=>'xóa thành cong']);

    }
    public function user(){
        $users = user::all();
        return view('Admin.user',[ 'users'=>$users]);
    }
    public function numbers(){
        $users = user::all()->count();
        $companys = user::where('category', 1)->count();
        $teachers = user::where('category', 2)->count();
        $students = user::where('category', 3)->count();
        $blogs= blog::all()->count();
        $messages = messenger::all() ->count();
        return view('Admin.numbers',['messages'=>$messages, 'companys'=>$companys, 'teachers'=>$teachers, 'students' => $students, 'blogs' => $blogs, 'users'=>$users]);
    }
    public function delete_user($id){
        
        messenger::where("fk_user_id", $id)->delete();
        blog::where("id", $id)->delete();
        if(user::find($id)->category == 3){
            if( student::find($id)!= null)
            student::find($id)->delete();
            \App\Model\ThreadMessenger::where("user_student", $id)->delete();
        }
        else if(user::find($id)->category == 2){
            \App\Model\ThreadMessenger::where("user_teacher", $id)->delete();
            if( teacher::find($id)!= null)
            teacher::find($id)->delete();
            
        }
        else {
            if( company::find($id)!= null)
            company::find($id)->delete();
        
            \App\Model\ThreadMessenger::where("user_company", $id)->delete();
        }
        
        
        user::find($id)->delete();
        return redirect() -> back()-> with("success", "Xoá thành công!");
    }
}
