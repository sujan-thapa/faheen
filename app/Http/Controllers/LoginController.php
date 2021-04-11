<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //for loggin in
    public function authenticate(Request $request){

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/dashboard');
        }else{
            return back();
        }
    }


    // for log out
    public function logout(Request $request){
        Auth::logout();

        // Logout can be done by ending session
        // $request->session()->invalidate();

        return redirect('/');
    }


}
