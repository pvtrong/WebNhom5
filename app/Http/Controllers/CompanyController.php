<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\student;
use App\teacher;
use App\company;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    //
    public function getHome(){
        return view('Pages.Company.home');
    }
    public function getBlog(){
        $BL_cpn = DB::table('blog')->paginate(4);
        return view('Pages.Company.Blog', ['BL_cpn' => $BL_cpn]);
    }
    public function getDS1(){
        return view('Pages.Company.DS1');
    }
    public function getDS2(){
        return view('Pages.Company.DS2');
    }
    public function getHelp(){
        return view('Pages.Company.Help');
    }
    public function getProfile($id){
        $company = company::find($id);

        if($company != null)

        return view('Pages.Company.Profile',['company'=>$company]);
        else return view('Pages.Company.Profile2');


    }
    public function getSetting(){
        return view('Pages.Company.Setting');
    }
    public function postUpdate(Request $request, $id){
        $company = company::find($id);

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
            }else {
                $company2-> Hinh = '';
            }
            $company2->save();
            return view('Pages.Company.Profile',['company'=>$company2]);
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
            }else {
                $company-> Hinh = '';
            }
            $company->save();
            return view('Pages.Company.Profile',['company'=>$company]);
        }
    }
}
