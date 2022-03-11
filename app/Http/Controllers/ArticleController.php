<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Validator;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $favorite = Article::orderBy("view", 'desc')->paginate(3);
        $terbaru = Article::orderBy("created_at", 'desc')->paginate(3);
        $article = Article::paginate(5);
        return view('user.dashboard', compact('article', 'terbaru', 'favorite'));
    }

    public function show(Request $request, $id)
    {
        $baca = Article::where('id', $id)->value('view');
        $article = Article::where('id', $id)->first();
        $article->view = $baca + 1;
        $article->save();
        return view('user.artikel-show', compact('article'));
    }

}
