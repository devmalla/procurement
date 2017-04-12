<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mpp;
use App\App;
use Sentinel;

class CreatorController extends Controller
{
    public function index(){
        return view('creator.dashboard');
    }

    // Add MPP

    public function getAddMpp(){
        return view('creator.add-mpp');
    }

    public function postAddMpp(Request $request){
        $this->validate($request,  [
            'name'   =>  'required',
        ]);

        $mpp = new Mpp;
        $user_id = Sentinel::getUser()->id;
        $mpp->user_id = $user_id;
        $mpp->name = $request->name;
        $mpp->project_name = $request->project_name;
        $mpp->fiscal_year = $request->fiscal_year;
        $mpp->budget_sub_head_no = $request->budget_sub_head_no;
        $mpp->procurement_description = $request->procurement_description;
        $mpp->procurement_category = $request->procurement_category;
        $mpp->contract_type = $request->contract_type;
        $mpp->duration = $request->duration;

        $mpp->save();
        return redirect('creator/view/mpp');
    }

    public function getViewMpp(){
        $user_id = Sentinel::getUser()->id;
        $mpps =  Mpp::where('user_id', $user_id)->get();
        return view('creator.view-mpp')->with('mpps', $mpps);
    }

    // Edit MPP

    public function getEditMpp($id){
        $mpp =  Mpp::find($id);
        return view('creator.edit-mpp')->with('mpp', $mpp);
    }

    public function postEditMpp(Request $request, $id){
        $mpp = Mpp::find($id);

        $user_id = Sentinel::getUser()->id;
        $mpp->user_id = $user_id;
        $mpp->name = $request->name;
        $mpp->project_name = $request->project_name;
        $mpp->fiscal_year = $request->fiscal_year;
        $mpp->budget_sub_head_no = $request->budget_sub_head_no;
        $mpp->procurement_description = $request->procurement_description;
        $mpp->procurement_category = $request->procurement_category;
        $mpp->contract_type = $request->contract_type;
        $mpp->duration = $request->duration;
        $mpp->update();
        return redirect('creator/view/mpp');
    }

    //  Send for Review

    public function getReviewMpp($id){
        $mpp = Mpp::find($id);
        $mpp->status = 1;
        $mpp->update();
        return redirect('creator/view/mpp');
    }

    //    Delete Mpp

    public function deleteMpp($id)
    {
        $mpp = Mpp::find($id);
        $mpp->delete();
        return redirect('creator/view/mpp');
    }

    //    APP

    public function getAddApp(){
        return view('creator.add-app');
    }

    public function postAddApp(Request $request){
        $this->validate($request,  [
//            'name'   =>  'required',
        ]);

        $app = new App;
        $user_id = Sentinel::getUser()->id;
        $app->user_id = $user_id;
        $app->fiscal_year = $request->fiscal_year;
        $app->procurement_description = $request->procurement_description;
        $app->procurement_category = $request->procurement_category;
        $app->contract_type = $request->contract_type;
        $app->estimated_cost = $request->estimated_cost;
        $app->date_for_tender = $request->date_for_tender;
        $app->date_of_agreement = $request->date_of_agreement;
        $app->bid_invitation_date = $request->bid_invitation_date;
        $app->date_of_consent = $request->date_of_consent;
        $app->bid_opening_date = $request->bid_opening_date;
        $app->bid_evalutaion_completion_date = $request->bid_evalutaion_completion_date;
        $app->date_of_approval = $request->date_of_approval;
        $app->loi_issue_date = $request->loi_issue_date;
        $app->contract_signing_date = $request->contract_signing_date;
        $app->work_initiation_date = $request->work_initiation_date;
        $app->work_completion_date = $request->work_completion_date;
        $app->status = $request->status;

        $app->save();
        return redirect('creator/view/app');
    }

    public function getViewApp(){
        $user_id = Sentinel::getUser()->id;
        $apps =  App::where('user_id', $user_id)->get();
        return view('creator.view-app')->with('apps', $apps);
    }

    // Edit MPP

    public function getEditApp($id){
        $app =  App::find($id);
        return view('creator.edit-app')->with('app', $app);
    }

    public function postEditApp(Request $request, $id){
        $app = App::find($id);

        $user_id = Sentinel::getUser()->id;
        $app->user_id = $user_id;
        $app->fiscal_year = $request->fiscal_year;
        $app->procurement_description = $request->procurement_description;
        $app->procurement_category = $request->procurement_category;
        $app->contract_type = $request->contract_type;
        $app->estimated_cost = $request->estimated_cost;
        $app->date_for_tender = $request->date_for_tender;
        $app->date_of_agreement = $request->date_of_agreement;
        $app->bid_invitation_date = $request->bid_invitation_date;
        $app->date_of_consent = $request->date_of_consent;
        $app->bid_opening_date = $request->bid_opening_date;
        $app->bid_evalutaion_completion_date = $request->bid_evalutaion_completion_date;
        $app->date_of_approval = $request->date_of_approval;
        $app->loi_issue_date = $request->loi_issue_date;
        $app->contract_signing_date = $request->contract_signing_date;
        $app->work_initiation_date = $request->work_initiation_date;
        $app->work_completion_date = $request->work_completion_date;
        $app->status = $request->status;

        $app->save();
        return redirect('creator/view/app');
    }

    //  Send for Review

    public function getReviewApp($id){
        $app = App::find($id);
        $app->status = 1;
        $app->update();
        return redirect('creator/view/app');
    }

    //    Delete Mpp

    public function deleteApp($id)
    {
        $app = App::find($id);
        $app->delete();
        return redirect('creator/view/app');
    }

}

