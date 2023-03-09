<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::query()
            ->where('is_published', '=', true);

        if ($request->get('q')) {
            $query = strtolower(trim($request->get('q')));

            $articles = $articles->where('title', 'LIKE', "%$query%");
        }

        $articles = $articles->orderByDesc('created_at')->limit(3)->get();

        return view('home', compact('articles'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

    public function post()
    {
        return view('post');
    }

    public function signin()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }
}
