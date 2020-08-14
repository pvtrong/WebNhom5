<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\student;
use App\teacher;
use App\company;
use App\Model\Category;
use Auth;
use App\Http\Requests\RequestPassword;
use App\Http\Requests\RequestRegistration;
use Illuminate\Support\Facades\Hash;
use App\Feedback;   

class UserController extends Controller
{
    //
    public function Login(){
        return view('Login.login');
    }

    public function post_login(Request $request){
        // dd($request->all());
        Auth::logout();
 		if(Auth::attempt($request->only('email','password'),'category'==='1')){
 			if (Auth::user()->category=='1') {
 				return redirect()->route('company-home')->with('success','Chào mừng quay trở lại');
 			} elseif (Auth::user()->category=='2') {
 				return redirect()->route('teacher-home')->with('success','Chào mừng quay trở lại');
 			} elseif (Auth::user()->category=='3') {
                return redirect()->route('student-home')->with('success','Chào mừng quay trở lại');
            }
		} else {
			return redirect()->back()->with('danger', "Đăng nhập thất bại");
		}
    }

    public function registration(){
        return view('Registration.registration');
    }

    public function post_registration( RequestRegistration $requestRegistration){
        
        $requestRegistration->merge(['password'=>bcrypt($requestRegistration->password)]);
        if(User::create($requestRegistration->all())){
			return redirect()->route('login')-> with('success', 'Đăng kí thành công');;
		}else{
			return redirect()->back()->with('danger', "Đăng kí thất bại");
		}
    }
    public function shareViews($view){
        $id = Auth::user()->id;
        $category = Auth::user()->category;
        if($category == 1){
            $user = company::find($id);
        } elseif($category == 2){
            $user = teacher::find($id);
        }
        else $user = student::find($id);
        $hinh = $user -> Hinh;
        $view->with ('user', $hinh);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')-> with('success', 'Đăng xuất thành công');
    }
    public function updatePassword(){
        $category = category::all()[6];
        return view('Password/updatePassword', ['category'=>$category]);
    }
    public function saveUpdatePassword(RequestPassword $requestPassword){
        
        $user = user::find($requestPassword-> id);

        if(Hash::check($requestPassword->password_old, $user ->password)){
            $user ->password = bcrypt($requestPassword -> password);
            $user ->save();
            return redirect() ->back() -> with('success', 'Cập nhật thành công');
        }
        return redirect() ->back() ->with('danger', "Mật khẩu cũ không đúng");
    }
    
    public function postHelp(Request $request){
        $category = category::all()[7];
        $feedback = new feedback;
        $feedback -> id_user = $request-> id_user;
        $feedback -> name = $request-> name;
        $feedback -> email = $request-> email;
        $feedback -> content = $request-> content;
        $feedback -> title = $request-> title;
        $feedback->save();
        return redirect()->back()->with('success', "Cảm ơn bạn đã viết phản hồi!");
    }
    public function getHelp(){
        $category = category::all()[7];
        return view('Pages.Help', ['category'=>$category]);
    }

}
