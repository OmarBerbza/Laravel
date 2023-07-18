<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commentaire;

class Article extends Model
{
    protected $fillable = [
        'title',
        'content',
        'published_at',
    ];

   public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
