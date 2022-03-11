<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Validator;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::paginate(5);
        return view('admin.category', compact('category'));
    }

    //function tampilan add penggunaan
    public function create(Request $request)
    {
        $category = Category::all();
        return view('admin.addCategory', compact('category'));
    }

    //proses tambah data Penggunaan
    public function store(Request $request)
    {
        $rules = array(
            'nama_category' => 'required|string',
        );

        $cek = Validator::make($request->all(),$rules);

        if($cek->fails()){
            $errorString = implode(",",$cek->messages()->all());
            return response()->json([
                'message' => $errorString
            ], 401);
        }else{
            $category = Category::create([
                'nama_category' => $request->nama_category,
            ]);

            return redirect()->route('category')->with("success", "success membuat data");
        }
    }

    //function tampilan edit 
    public function edit(Request $request, $id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.editCategory', compact('category'));
    }

    //proses edit data Penggunaan
    public function update(Request $request)
    {
        $artikel = Category::where('id', $request->id)->first();
        $artikel->nama_category = $request->nama_category;
        $artikel->save();
        
        return redirect()->route('category')->with("success", "success mengedit data");
    }

    //proses delete data penggunaan
    public function destroy($id)
    {
        Category::where("id", $id)->delete();
        return redirect()->route('category')->with("success", "success menghapus data");
    }
}
