<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Organization;
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
           'email'   =>  'required',
           'address'   =>  'required',
       ]);

        $organization = new Organization;
        $organization->name = $request->name;
        $organization->email = $request->email;
        $organization->address = $request->address;
        $organization->save();
        $message = 'Organization successfully added';
        return redirect('admin/view/organization');
    }

    public function getViewOrganization(){
        $organizations =  Organization::all();
        return view('superadmin.view-organization')->with('organizations', $organizations);
    }

    //    User
    public function getAddUser(){
        return view('superadmin.add-user');
    }

    public function postAddUser(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
            'role' => 'required',
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
        $users = User::all();
        return view('superadmin.view-user')->with('users', $users);
    }

}
