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

        $user = $request->all();
        Sentinel::registerAndActivate($user);
        return redirect('login');
    }
}
