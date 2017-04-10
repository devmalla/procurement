<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function postLogin(Request $request){
        if (Sentinel::Authenticate($request->all())){
            if(Sentinel::getUser()->roles->first()->slug == 'admin'){
                return redirect(route('admin.dashboard'));
            }elseif (Sentinel::getUser()->roles->first()->slug == 'creator'){
                return redirect(route('creator.dashboard'));
            }elseif (Sentinel::getUser()->roles->first()->slug == 'approver'){
                return redirect(route('approver.dashboard'));
            }elseif (Sentinel::getUser()->roles->first()->slug == 'reviewer'){
                return redirect(route('reviewer.dashboard'));
            }elseif (Sentinel::getUser()->roles->first()->slug == 'bidder'){
                return redirect(route('bidder.dashboard'));
            }

        }else{
            $errors = 'Incorrect username or Password.';
            return redirect('/')->with('errors', $errors);
        }
    }

    public function logout(){
        Sentinel::logout();
        return redirect('/');
    }
}
