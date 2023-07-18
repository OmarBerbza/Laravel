<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $articles = Article::paginate(10);
        return view('articles.index', compact('articles'));

    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'content' => $request->contenu,
        ]);

        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
    
        $article = Article::create($validatedData);

        return redirect()->route('articles.show', $article->id);
    }


    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect()->route('articles.show', $article->id);
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index');
    }

    // public function search(Request $request)
    // {
    //     $search = $request->input('search');
    //     $articles = Article::where('title', 'LIKE', "%$search%")
    //                     ->orWhere('content', 'LIKE', "%$search%")
    //                     ->paginate(10);

    //     return view('articles.index', compact('articles'));
    // }
    public function search(Request $request)
    {
        $title = $request->input('title');
        $articles = Article::where('title', 'LIKE', "%$title%")->get();
        return view('articles.search', compact('articles'));
    }
}
