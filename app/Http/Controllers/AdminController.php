<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Admin;
use Auth;
// use Illuminate\Auth\SessionGuard;

class AdminController extends Controller
{

    public function adminHome(){
        return view('Admin.home');
    }
    //
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

    public function admin_logout(){
        Auth::guard('adm')->logout();
		return redirect()->back()->with('success','thoát thành công');
    }
}
