<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Label;

use App\Article;

class ArticleController extends Controller
{
    public function index($id){
        $ar = Article::find($id);

        return view('blog.index', ['article' => $ar]);
    }

    public function create(){
        $labels = Label::all();
        return view('blog.publish', ['labels' => $labels]);
    }

    public function saveArticle(REQUEST $request){
        $ar = new Article;
        $ar->header = $request->title;
        $ar->content = $request->content;
        $ar->description = $request->description;

        $labels = [];
        if($request->labels != ""){
            $labels = explode(",", json_decode($request->labels));
            foreach($labels as $la){
                $res = Label::where('name', $la)->count();
                if($res == 0){
                    $newLabel = new Label;
                    $newLabel->name = $la;
                    $newLabel->color = "grey";
                    $newLabel->save();
                }
            }
        }
        $ar->labels = $labels;

        $ar->save();

        return redirect('/management');
    }
}
