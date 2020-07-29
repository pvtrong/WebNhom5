<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;


class BackendController extends Controller
{

    public function adminHome(){
        return view('Admin.home');
    }

}