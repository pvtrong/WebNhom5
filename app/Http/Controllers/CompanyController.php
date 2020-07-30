<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\teacher;
use App\company;
class CompanyController extends Controller
{
    //
    public function getHome(){
        return view('Pages.Company.home');
    }
    public function getBlog(){
        return view('Pages.Company.Blog');
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
            
            $company->save();
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
            $company->save();
            return view('Pages.Company.Profile',['company'=>$company]);
        }
    }
}
