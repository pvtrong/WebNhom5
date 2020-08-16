<?php


use Illuminate\Support\Facades\DB;
use App\student;
use App\teacher;
use App\company;
use App\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'Pages','middleware'=>'auth'], function(){
    Route::get('Setting', 'UserController@updatePassword')->name('user.update.password');
    Route::post('Setting', 'UserController@saveUpdatePassword');
    Route::get('Help', 'UserController@getHelp')->name('get-help');
    Route::post('Help', 'UserController@postHelp');
    Route::group(['prefix'=>'Student'], function(){
        Route::get('Home', 'StudentController@getHome')->name('student-home');

        Route::get('Blog', 'StudentController@getBlog');
        Route::post('Blog', 'StudentController@postBlog');
        Route::post('updateBlog/{id_blog}', 'StudentController@updateBlog');
        Route::get('getUpdateBlog/{id_blog}', 'StudentController@getupdateBlog');
        Route::get('delBlog/{id_blog}', 'StudentController@delBlog');

        
        Route::get('DS1', 'StudentController@getDS1');
        Route::get('DS2', 'StudentController@getDS2');
        
        Route::get('Profile/{id}', 'StudentController@getProfile');
        //


        Route::get('CV/{id}', 'StudentController@getCV');
        Route::get('Share/{id}', 'StudentController@getShare');
        Route::get('Share2/{id_blog}', 'StudentController@getShare2');
        Route::post('updateProfile/{id}', 'StudentController@postUpdate');
        Route::get('messenger-student/{id}','StudentController@messenger')->name('messenger-student');
        Route::post('send-mes','StudentController@send_messenger');
        Route::post('load-mes','StudentController@load_mes');
    });
    Route::group(['prefix'=>'Teacher'], function(){
        Route::get('Home', 'TeacherController@getHome')->name('teacher-home');
        Route::get('Blog', 'TeacherController@getBlog');
        Route::post('Blog', 'TeacherController@postBlog');
        Route::post('updateBlog/{id_blog}', 'TeacherController@updateBlog');
        Route::get('getUpdateBlog/{id_blog}', 'TeacherController@getupdateBlog');
        Route::get('delBlog/{id_blog}', 'TeacherController@delBlog');

        Route::get('DS1', 'TeacherController@getDS1');
        Route::get('DS2', 'TeacherController@getDS2');
        Route::get('Profile/{id}', 'TeacherController@getProfile');

        Route::get('CV/{id}', 'TeacherController@getCV');
        Route::get('Share/{id}', 'TeacherController@getShare');
        Route::get('Share2/{id_blog}', 'TeacherController@getShare2');
        Route::get('updateProfile', 'TeacherController@postUpdate');
        Route::post('updateProfile/{id}', 'TeacherController@postUpdate');
        Route::get('messenger-teacher/{id}','TeacherController@messenger')->name('messenger-teacher');
        Route::post('send-mes','TeacherController@send_messenger');
        Route::post('load-mes','TeacherController@load_mes');
    });
    Route::group(['prefix'=>'Company'], function(){
        Route::get('Home', 'CompanyController@getHome')->name('company-home');
        Route::get('Blog', 'CompanyController@getBlog');
        Route::post('Blog', 'CompanyController@postBlog');
        Route::post('updateBlog/{id_blog}', 'CompanyController@updateBlog');
        Route::get('getUpdateBlog/{id_blog}', 'CompanyController@getupdateBlog');
        Route::get('delBlog/{id_blog}', 'CompanyController@delBlog');

        Route::get('DS1', 'CompanyController@getDS1');
        Route::get('DS2', 'CompanyController@getDS2');
        
        Route::get('Profile/{id}', 'CompanyController@getProfile');
        
        Route::get('CV/{id}', 'CompanyController@getCV');
        Route::get('Share/{id}', 'CompanyController@getShare');
        Route::get('Share2/{id_blog}', 'CompanyController@getShare2');
        Route::post('updateProfile/{id}', 'CompanyController@postUpdate');
        Route::get('updateProfile', 'CompanyController@postUpdate');
        Route::get('messenger-company/{id}','CompanyController@messenger')->name('messenger-company');
        Route::post('send-mes','CompanyController@send_messenger');
        Route::post('load-mes','CompanyController@load_mes');
    });
});
Route::get('login', 'UserController@Login')->name('login');
Route::post('login', 'UserController@post_Login');
Route::get('logout', 'UserController@Logout')->name('logout');
// Route::get('logout', 'UserController@logout')->name('logout');

// Auth::routes(['verify'=>true]);

Route::get('registration', 'UserController@registration')->name('registration');
Route::post('registration', 'UserController@post_registration');






//  admin
Route::group(['prefix' => 'admin','middleware'=>'admin'], function(){
        Route::get('users', 'AdminController@user')->name('users');
        Route::get('feedback', 'AdminController@feedback')->name('feedback');
        Route::get('numbers', 'AdminController@numbers')->name('numbers');
        Route::get('deleteUser', 'AdminController@delete_user');
        Route::get('deleteBlog', 'AdminController@get_blog')->name('delete_blog');
        Route::post('deleteBlog', 'AdminController@delete_blog');
        Route::get('home', 'AdminController@adminHome')->name('admin-home');
        //category
        Route::get('category', 'AdminController@category')->name('category');
        Route::post('ajax_add_category', 'AdminController@post_category');
        Route::get('edit_category/{id}', 'AdminController@edit_category')->name('edit_category');
        Route::post('ajax_edit_category/{id}', 'AdminController@post_edit_category');
        Route::get('delete_category/{id}', 'AdminController@delete_category')->name('delete_category');
        //skill
        Route::get('skill', 'AdminController@skill')->name('skill');
        Route::post('ajax_add_skill', 'AdminController@post_skill');
        Route::get('edit_skill/{id}', 'AdminController@edit_skill')->name('edit_skill');
        Route::post('ajax_edit_skill/{id}', 'AdminController@post_edit_skill');
        Route::get('delete_skill/{id}', 'AdminController@delete_skill')->name('delete_skill');
});
Route::get('admin-login', 'AdminController@Login_admin')->name('login-admin');
Route::post('admin-login', 'AdminController@post_Login_admin');
Route::get('admin-logout', 'AdminController@Logout_admin')->name('logout-admin');
// Route::get('admin-logout', 'AdminController@admin_logout')->name('admin-login');

Route::get('registration-admin', 'AdminController@registration_admin')->name('registration-admin');
Route::post('registration-admin', 'AdminController@post_registration_admin');

//View share header
View::composer(['*'], function($view){
    if(Auth::user() != null){
        $id = Auth::user()->id;
        $category = Auth::user()->category;
        if($category == 1){
            $user = company::find($id);
        } elseif($category == 2){
            $user = teacher::find($id);
        }
        else $user = student::find($id);
        if($user != null){
            $hinh = $user -> Hinh;
            $view->with ('hinh', $hinh);
        } else $view->with ('hinh', null);
    }
});
