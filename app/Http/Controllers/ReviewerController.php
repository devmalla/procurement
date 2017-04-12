<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\App;
use App\Mpp;

class ReviewerController extends Controller
{
    public function index(){
        return view('reviewer.dashboard');
    }

    //  View MPP List
    public function getViewMpp(){
        $status = [1, 3];
        $mpps =  Mpp::whereIn('status', $status)->get();
        return view('reviewer.view-mpp')->with('mpps', $mpps);
    }
    //  Decline Review Request MPP
    public function getDeclineMpp($id){
        $mpp = Mpp::find($id);
        $mpp->status = 0;
        $mpp->update();
        return redirect('reviewer/view/mpp');
    }
    //  Send for approval MPP
    public function getApproveMpp($id){
        $mpp = Mpp::find($id);
        $mpp->status = 3;
        $mpp->update();
        return redirect('reviewer/view/mpp');
    }

    //    View APP List
    public function getViewApp(){
        $status = [1, 3];
        $apps =  App::whereIn('status', $status)->get();
        return view('reviewer.view-app')->with('apps', $apps);
    }

    //  Decline Review Request MPP
    public function getDeclineApp($id){
        $app = App::find($id);
        $app->status = 0;
        $app->update();
        return redirect('reviewer/view/app');
    }
    //  Send for approval MPP
    public function getApproveApp($id){
        $app = Mpp::find($id);
        $app->status = 3;
        $app->update();
        return redirect('reviewer/view/app');
    }

}
