<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Commentaire extends Model
{
    protected $fillable = [
        'contenu',
        'published_at',
        'article_id'
    ];    

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
