<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticles()
    {
        $articles = Article::query()->where('is_published', '=', true)->paginate(6);

        return view('blog', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('post', compact('article'));
    }
}
