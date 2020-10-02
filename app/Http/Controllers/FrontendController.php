<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function blog()
    {
        $articles=Article::all();
        return view('blog',compact('articles'));
    }

    public function article($article_id)
    {
        $article =Article:: find($article_id);
        return view('article', compact('article'));
    }
}
