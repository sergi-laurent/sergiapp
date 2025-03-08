<?php

namespace App\Http\Controllers\Admin;

use \App\Models\Article;

use Illuminate\Http\Request;

// I was having an error with the 'extends Controller' when I updated the namespace to \User.
// Undefined type 'App\Http\Controllers\User\Controller'
// Since Controller is inside App\Http\Controllers, our User\ArticleController should explicitly import it.
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index()
	{
        if(auth()->user()->is_admin){
            $articles = Article::all();	
        } 
        
        else {
            $articles = Article::where('author_id', auth()->user()->id)->get();		
        }
        
        return view('admin.articles.index', ['articles'=>$articles]);
	}

    public function show(Article $article)
	{
        //render the data
        return view('admin.articles.show', ['article'=>$article]);
	}

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required', 'string', 'min:10', 'max:255'],
            'content'=>['required'],
            'keywords'=>['required', 'array'],
        ]);

        $article = Article::create([
                'title' => $request->title,
                'content'=> $request->content,
                'author_id'=> auth()->user()->id ,
            ]);    
            
        $article->keywords()->sync($request->keywords);

        return redirect()->route('admin.articles.show', ['article'=>$article]);
    }

    public function edit(Article $article)
    {
        if(!$article->canEdit()){
            abort(401);
        };
        
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        if(!$article->canEdit()){
            abort(401);
        };
        
        
        $request->validate([
            'title'=>['required', 'string', 'min:10', 'max:255'],
            'content'=>['required'],
            'keywords'=>['required', 'array']
        ]);


        $article->update([
                'title' => $request->title,
                'content'=> $request->content,
            ]);      
            
        $article->keywords()->sync($request->keywords);

        return redirect()->route('admin.articles.show', ['article'=>$article]);
    }

    public function destroy(Request $request, Article $article)
    {
        if(!$article->canEdit()){
            abort(401);
        };

        $article->delete();
            
        return redirect()->route('admin.articles.index');
    }
}

