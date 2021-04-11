<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    //
    // public function pro
    public function show(Request $req){
        // $vg = Auth::user()->id;

        // $email = $req->input('email');
        // $password = $req->input('password');
        // $email = $req->email;
        // $password = $req->password;

        // $checkLogin = DB::table('users')->where(['email' => $email, 'password' => $password])->first();
        // if (count($checkLogin) > 0) {
        //     return view('users')->with(['name' => $checkLogin->name]);
        // } else {
        //     // echo "Login Failed!";

        //     return Redirect::route('login')->with(['error' => "Invalid email or Password!!"]);
        // }
        // return view('dashboard.dashboard');

        $user =  DB::table("users")->where("id", Auth::user()->id)->get();
        // return $user;
        return view('dashboard.dashboard', compact('user'));
    }



}
