<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Label;

class LabelController extends Controller
{
    public function index(){
        $labels = Label::all();
        return view('management.label', ['labels' => $labels]);
    }
}
