<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function Login(REQUEST $request){
        dd($request);
    }
}
