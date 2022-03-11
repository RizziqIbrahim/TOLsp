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
        //mengambil data berurut dengan view yang terbesar
        $favorite = Article::orderBy("view", 'desc')->paginate(3);
        //mengambil data berurut dengan yang baru dibuat
        $terbaru = Article::orderBy("created_at", 'desc')->paginate(3);
        //mengambil data berurut dan dibatasi 5
        $article = Article::paginate(5);
        return view('user.dashboard', compact('article', 'terbaru', 'favorite'));
    }

    public function show(Request $request, $id)
    {
        //proses get isi column view di table artikel
        $baca = Article::where('id', $id)->value('view');
        $article = Article::where('id', $id)->first();
        $article->view = $baca + 1;//menambah jumlah 1 column view
        $article->save();
        return view('user.artikel-show', compact('article'));
    }

}
