<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class WelcomeController extends Controller
{
    //

    public function __construct() {
        $this->middleware('guest');
    }


    public function index(){
        $topNewArticles = Article::orderBy('article_id', 'desc')
            ->take(6)
            ->get();
            
        return view('welcome')
            ->with('topNewArticles', $topNewArticles);
    }



}
