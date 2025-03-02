<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function index()
	{
        $authors = User::orderBy('name')->get();
        return view('site.authors.index', ['authors'=>$authors]);
	}

    public function show(int $author)
	{
        //fetch the data
        $author = \App\Models\User::where('id',$author )->first();

        //render the data
        return view('site.authors.show', ['author'=>$author]);
	}
}
