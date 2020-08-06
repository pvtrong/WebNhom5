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
    Route::group(['prefix'=>'Student'], function(){
        Route::get('Home', 'StudentController@getHome')->name('student-home');
        Route::get('Blog', 'StudentController@getBlog');
        Route::get('DS1', 'StudentController@getDS1');
        Route::get('DS2', 'StudentController@getDS2');
        Route::get('Help', 'StudentController@getHelp');
        Route::get('Profile/{id}', 'StudentController@getProfile');
        Route::get('Setting', 'StudentController@getSetting');
        Route::post('updateProfile/{id}', 'StudentController@postUpdate');
    });
    Route::group(['prefix'=>'Teacher'], function(){
        Route::get('Home', 'TeacherController@getHome')->name('teacher-home');
        Route::get('Blog', 'TeacherController@getBlog');
        Route::get('DS1', 'TeacherController@getDS1');
        Route::get('DS2', 'TeacherController@getDS2');
        Route::get('Help', 'TeacherController@getHelp');
        Route::get('Profile/{id}', 'TeacherController@getProfile');
        Route::get('Setting', 'TeacherController@getSetting');
        Route::post('updateProfile/{id}', 'TeacherController@postUpdate');
    });
    Route::group(['prefix'=>'Company'], function(){
        Route::get('Home', 'CompanyController@getHome')->name('company-home');
        Route::get('Blog', 'CompanyController@getBlog');
        Route::get('DS1', 'CompanyController@getDS1');
        Route::get('DS2', 'CompanyController@getDS2');
        Route::get('Help', 'CompanyController@getHelp');
        Route::get('Profile/{id}', 'CompanyController@getProfile');
        Route::get('Setting', 'CompanyController@getSetting');
        
        Route::get('CV/{id}', 'CompanyController@getCV');
        Route::get('Share/{id}', 'CompanyController@getShare');
        Route::post('updateProfile/{id}', 'CompanyController@postUpdate');
    });
});
Route::get('login', 'UserController@Login')->name('login');
Route::post('login', 'UserController@post_Login');
Route::get('logout', 'UserController@Logout')->name('logout');
Route::get('logout', 'UserController@logout')->name('logout');

Route::get('registration', 'UserController@registration')->name('registration');
Route::post('registration', 'UserController@post_registration');






//  admin
Route::group(['prefix' => 'admin','middleware'=>'admin'], function(){
        Route::get('home', 'AdminController@adminHome')->name('admin-home');
        Route::get('category', 'AdminController@category')->name('category');
        Route::post('ajax_add_category', 'AdminController@post_category');
        Route::get('edit_category/{id}', 'AdminController@edit_category')->name('edit_category');
        Route::post('ajax_edit_category/{id}', 'AdminController@post_edit_category');
        Route::get('delete_category/{id}', 'AdminController@delete_category')->name('delete_category');
});
Route::post('admin-login', 'AdminController@post_Login_admin');
Route::get('admin-logout', 'AdminController@Logout_admin')->name('logout-admin');

Route::get('registration-admin', 'AdminController@registration_admin')->name('registration-admin');
Route::post('registration-admin', 'AdminController@post_registration_admin');

//View share hader
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
