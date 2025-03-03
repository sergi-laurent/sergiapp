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

    public function create()
    {
        return view('site.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required', 'string', 'min:10', 'max:255'],
            'content'=>['required', 'string', 'min:10', 'max:255'],
        ]);

        Article::create([
                'title' => $request->title,
                'content'=> $request->content,
                'author_id'=> 1,
            ]);      
            
        return redirect('/articles');
    }

    public function edit(int $id)
    {
        $article = \App\Models\Article::where('id',$id )->first();
        return view('site.articles.edit', compact('article'));
    }

    public function update(Request $request, int $id)
    {
        $article = \App\Models\Article::where('id',$id )->first();

        $request->validate([
            'title'=>['required', 'string', 'min:10', 'max:255'],
            'content'=>['required'],
        ]);


        $article->update([
                'title' => $request->title,
                'content'=> $request->content,
            ]);      
            
        return redirect('/articles/' . $article->id);
    }

    public function destroy(Request $request, int $id)
    {
        $article = \App\Models\Article::where('id',$id )->first();

        $article->delete();
            
        return redirect('/articles');
    }
}

