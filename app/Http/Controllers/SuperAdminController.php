<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Organization;
use App\Bid;
use Sentinel;


class SuperAdminController extends Controller
{
   public function index(){
       return view('superadmin.dashboard');
   }

    //   Organization
    public function getAddOrganization(){
        return view('superadmin.add-organization');
    }

    public function postAddOrganization(Request $request){
       $this->validate($request,  [
           'name'   =>  'required',
       ]);

        $organization = new Organization;
        $user_id = Sentinel::getUser()->id;
        $organization->user_id = $user_id;
        $organization->name = $request->name;
        $organization->acronym = $request->acronym;
        $organization->email = $request->email;
        $organization->description = $request->description;
        $organization->office_category = $request->office_category;
        $organization->website = $request->website;
        $organization->address_one = $request->address_one;
        $organization->address_two = $request->address_two;
        $organization->address_three = $request->address_three;
        $organization->city = $request->city;
        $organization->district = $request->district;
        $organization->municipality = $request->municipality;
        $organization->vdc = $request->vdc;
        $organization->contact_one = $request->contact_one;
        $organization->contact_two = $request->contact_two;
        $organization->save();
        return redirect('admin/view/organization');
    }

    public function getViewOrganization(){
        $organizations =  Organization::all();
        return view('superadmin.view-organization')->with('organizations', $organizations);
    }

    //    User
    public function getAddUser(){
        $user_id = Sentinel::getUser()->id;
        $organizations = Organization::where('user_id',$user_id)->get();
        return view('superadmin.add-user')->with('organizations',$organizations);
    }

    public function postAddUser(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
            'role' => 'required',
            'designation' => 'required',
            'officer_class' => 'required',
            'contact_one' => 'required',
        ]);
        $user =  Sentinel::registerAndActivate($request->all());
        if($request->role == 'creator'){
            $role = Sentinel::findRoleBySlug('creator');
        }
        if($request->role == 'reviewer'){
            $role = Sentinel::findRoleBySlug('reviewer');
        }
        if($request->role == 'approver'){
            $role = Sentinel::findRoleBySlug('approver');
        }
        if($request->role == 'bidder'){
            $role = Sentinel::findRoleBySlug('bidder');
        }
        $role->users()->attach($user);
        return redirect('admin/view/user');
    }

    public function getViewUser(){
        $user_id =  Sentinel::getUser()->id;
        $users = User::where('admin_id', $user_id)->get();
        return view('superadmin.view-user')->with('users', $users);
    }

    //  View Bids
    public function getViewBid(){
        $bids =  Bid::all();
        return view('superadmin.view-bid')->with('bids', $bids);
    }
}
