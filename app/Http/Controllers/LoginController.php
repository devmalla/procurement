<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function getOrganizerLogin(){
        return view('authentication.login');
    }
    public function postLogin(Request $request){
        if (Sentinel::Authenticate($request->all())){
            return redirect('/');
        }else{
            $errors = 'Incorrect username or Password.';
            return redirect('organizer/login')->with('errors', $errors);
        }
    }

    public function logout(){
        Sentinel::logout();
        return redirect('/');
    }
}
