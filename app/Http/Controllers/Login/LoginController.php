<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function Login(REQUEST $request){
        $name = $request->username;
        $password = $request->password;
        dd($request->input());
    }
}
