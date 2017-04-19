<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Mpp;
use App\App;
use App\Bid;

class BidderController extends Controller
{
    public function index(){
        return view('bidder.dashboard');
    }
    //     MPP
    public function getViewMpp(){
        $mpps =  Mpp::where('status', 2)->get();
        return view('bidder.view-mpp')->with('mpps', $mpps);
    }

    public function postMppBid(Request $request, $mpp){
        $bid = new Bid;
        $user_id = Sentinel::getUser()->id;
        $bid->user_id = $user_id;
        $bid->mpp_id = $mpp;
        $bid->name = $request->name;
        $bid->save();
        return redirect('bidder/dashboard');
    }

    //    APP
    public function getViewApp(){
        $apps =  App::where('status', 2)->get();
        return view('bidder.view-app')->with('apps', $apps);
    }

    public function postAppBid(Request $request){
        $bid = new Bid;
        $user_id = Sentinel::getUser()->id;
        $bid->user_id = $user_id;
        $bid->app_id = $app;
        $bid->name = $request->name;
        $bid->save();
        return redirect('bidder/dashboard');
    }
    //  View Bids
    public function getViewBid(){
        $user_id = Sentinel::getUser()->id;
        $bids =  Bid::where('user_id', $user_id)->get();
        return view('bidder.view-bid')->with('bids', $bids);
    }
}

