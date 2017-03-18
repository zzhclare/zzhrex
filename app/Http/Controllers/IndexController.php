<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class IndexController extends Controller
{
    public function index(){
        $articles = Article::all();

        return view('index.index', ['articles' => $articles]);
    }
}
