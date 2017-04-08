<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class HomepageController extends Controller
{
    public function index(){
        if(Sentinel::check()){
            return redirect('/superadmin');
        }else{
            return view('homepage');
        }
    }
}
