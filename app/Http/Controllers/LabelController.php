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

    public function save(REQUEST $request){
        if(!empty($request->input())){
            foreach($request->input() as $k => $v){
                $id = explode('_', $k)[1];
                $label = Label::find($id);
                $label->color = $v;
                $label->save();
            }
        }
        return redirect('/label');
    }
}
