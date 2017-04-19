<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegistrationController extends Controller
{
    //

    public function getRegister()
    {
        return view('authentication.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|max:255',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required|confirmed',
        ]);
        $user = Sentinel::registerAndActivate($request->all());
        $role = Sentinel::findRoleBySlug('bidder');
        $role->users()->attach($user);
        return redirect('/');
    }

    public function getAdminRegister()
    {
        return view('superadmin.register');
    }

    public function postAdminRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|max:255',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required|confirmed',
        ]);
        $user = Sentinel::registerAndActivate($request->all());
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($user);
        return redirect('/');
    }

}
