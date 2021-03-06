<?php

namespace App\Http\Controllers;

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

        if(Auth::attempt(['name' => $name, 'password' => $password])){
            return redirect()->intended();
        }
        else{
            return redirect('/login')->with('error', 'Username or Password is wrong!');
        }
    }
}
