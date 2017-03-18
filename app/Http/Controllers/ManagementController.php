<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Label;

use App\Article;
class ManagementController extends Controller
{
    public function index(){
        $labels = Label::all();
        $articles = Article::all();

        return view('management.management', ['articles' => $articles, 'labels' => $labels]);
    }
}
