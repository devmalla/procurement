<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class HomepageController extends Controller
{
    public function index(){
        return view('homepage');
//        if(Sentinel::check()){
//            dd('logged in');
//        }else{
//            return view('authentication.login');
//        }
    }
}
