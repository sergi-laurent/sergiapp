<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\User;



class HomeController extends Controller
{
    public function index()
    {
        $articles=Article::take(4)->latest()->get();
        $authors = User::whereHas('articles')->orderBy('name')->get();

        return view('welcome', ['articles'=>$articles, 'authors'=>$authors]);
    }
}
