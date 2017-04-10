<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class HomepageController extends Controller
{
    public function index(){
        if(Sentinel::check()){
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
            return view('homepage');
        }
    }
}
