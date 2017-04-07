<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Label;

use App\Article;

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

    public function delete(REQUEST $request){
        $id = $request->id;
        $label = Label::find($id);
        foreach(Article::all() as $ar){
            if(in_array($label->name, $ar->labels)){
                $name = [];
                foreach($ar->labels as $labelName){
                    if($labelName !== $label->name){
                        $name[] = $labelName;
                    }
                }
                $ar->labels = $name;
                $ar->save();
            }
        }

        Label::destroy($id);

        return redirect('/label');
    }
}
