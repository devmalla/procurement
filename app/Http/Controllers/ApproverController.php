<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\App;
use App\Mpp;

class ApproverController extends Controller
{
    public function index(){
        return view('approver.dashboard');
    }

    //   View MPP list

    public function getViewMpp(){
        $mpps =  Mpp::where('status', 3)->get();
        return view('approver.view-mpp')->with('mpps', $mpps);
    }

    //  Decline Review Request MPP
    public function getDeclineMpp($id){
        $mpp = Mpp::find($id);
        $mpp->status = 0;
        $mpp->update();
        return redirect('approver/view/mpp');
    }

    //  Send for approval MPP
    public function getApproveMpp($id){
        $mpp = Mpp::find($id);
        $mpp->status = 2;
        $mpp->update();
        return redirect('approver/view/mpp');
    }

    //    View APP List
    public function getViewApp(){
        $apps =  App::where('status', 3)->get();
        return view('approver.view-app')->with('apps', $apps);
    }

    //  Decline Review Request MPP
    public function getDeclineApp($id){
        $app = App::find($id);
        $app->status = 0;
        $app->update();
        return redirect('approver/view/app');
    }
    //  Send for approval MPP
    public function getApproveApp($id){
        $app = App::find($id);
        $app->status = 2;
        $app->update();
        return redirect('approver/view/app');
    }
}
