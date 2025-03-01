<?php

namespace App\Http\Controllers;

use \App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
	{
        $articles = Article::all();
		//return view(view:'site/articles/index.blade.php');
        //we can write it like this:
        return view('site.articles.index', ['articles'=>$articles]);
	}

    public function show(int $article)
	{
        //fetch the data
        $article = \App\Models\Article::where('id',$article )->first();

        //render the data
        return view('site.articles.show', ['article'=>$article]);
	}
}

