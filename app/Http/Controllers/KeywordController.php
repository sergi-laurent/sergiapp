<?php

namespace App\Http\Controllers;

use \App\Models\Keyword;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keywords = Keyword::all();
        return view('admin.keywords.index', compact('keywords'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.keywords.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required', 'string', 'max:20'],
        ]);

        Keyword::create([
            'title'=>$request->title,
        ]);
        return redirect()->route('admin.keywords.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keyword $keyword)
    {
        return view('admin.keywords.edit', compact('keyword'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keyword $keyword)
    {
        $request->validate([
            'title'=>['required', 'string', 'max:20'],
        ]);

        $keyword->update([
            'title'=>$request->title,
        ]);
        return redirect()->route('admin.keywords.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Keyword $keyword)
    {
        $keyword->delete();

        return redirect()->route('admin.keywords.index');
    }
}
