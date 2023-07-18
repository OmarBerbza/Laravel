<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function store(Request $request, $articleId)
    {
        $article = Article::findOrFail($articleId);
        $commentaire = new Commentaire();
        $commentaire->contenu = $request->contenu;
        $article->commentaires()->save($commentaire);

        return redirect()->route('articles.show', $article->id);
    }

}
