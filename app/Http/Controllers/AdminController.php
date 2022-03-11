<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Validator;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $article = Article::paginate(5);
        return view('admin.dashboard', compact('article'));
    }

    public function article(Request $request)
    {
        $article = Article::all();
        return view('admin.article', compact('article'));
    }

    //function tampilan add artikel
    public function create(Request $request)
    {
        $kategori = Category::all();
        return view('admin.addArticle', compact('kategori'));
    }

    //proses tambah data artikel
    public function store(Request $request)
    {
        $rules = array(
            'judul_artikel' => 'required|string',
            'category_id' => 'required|integer',
            'user_id' => 'required|integer',
            'isi_artikel' => 'required|string',
        );

        $cek = Validator::make($request->all(),$rules);

        if($cek->fails()){
            $errorString = implode(",",$cek->messages()->all());
            return response()->json([
                'message' => $errorString
            ], 401);
        }else{

            $imageName = time().'.'.$request->gambar_artikel->extension();  //membuat nama random untuk image beserta extension file
            $request->file('gambar_artikel')->move(public_path('images\artikel'), $imageName);//proses pemindahan file

            $article = Article::create([
                'judul_artikel' => $request->judul_artikel,
                'category_id' => $request->category_id,
                'user_id' => $request->user_id,
                'isi_artikel' => $request->isi_artikel,
                'gambar_artikel' => $imageName,
            ]);

            return redirect()->route('adminArticle')->with("success", "success membuat data");
        }
    }

    //function tampilan edit 
    public function edit(Request $request, $id)
    {
        $kategori = Category::all();
        $article = Article::where('id', $id)->first();
        return view('admin.editArticle', compact('article', 'kategori'));
    }

    //proses edit data artikel
    public function update(Request $request)
    {
        $imageName = time().'.'.$request->gambar_artikel->extension();  
        $request->file('gambar_artikel')->move(public_path('images\artikel'), $imageName);

        $artikel = Article::where('id', $request->id)->first();
        $artikel->judul_artikel = $request->judul_artikel;
        $artikel->user_id = $request->user_id;
        $artikel->category_id = $request->category_id;
        $artikel->isi_artikel = $request->isi_artikel;
        $artikel->gambar_artikel = $imageName;
        $artikel->save();
        return redirect()->route('adminArticle')->with("success", "success mengedit data");
    }

    //proses delete data artikel
    public function destroy($id)
    {
        Article::where("id", $id)->delete();
        return redirect()->route('adminArticle')->with("success", "success menghapus data");
    }
}
