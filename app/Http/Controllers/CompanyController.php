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

class CompanyController extends Controller
{
    //
    public function getHome(){
        $category = category::all()[0];
        return view('Pages.Company.home', ['category'=>$category]);

    }
    public function getBlog(){
        $category = category::all()[2];
        $BL_cpn = DB::table('blog')->paginate(4);
        return view('Pages.Company.Blog', ['BL_cpn' => $BL_cpn, 'category'=>$category]);
    }
    public function getDS1(){
        $category = category::all()[4];
        return view('Pages.Company.DS1', ['category'=>$category]);
    }
    public function getDS2(){
        $category = category::all()[3];
        return view('Pages.Company.DS2', ['category'=>$category]);
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
            return view('Pages.Company.Profile',['company'=>$company2, 'category'=>$category]);
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
            return view('Pages.Company.Profile',['company'=>$company, 'category'=>$category]);
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
        $company = company::find($id);
        $user = User::find($id);
        $category = category::all()[9];
        if($company != null){
            $BL_temp = DB::table('blog')->paginate(6); // viết truy vấn cho từng công ty tại đây
            return view('Pages.Company.Share',['company'=>$company, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
        }

    }
}
