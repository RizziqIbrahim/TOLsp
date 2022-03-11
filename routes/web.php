<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    ArticleController,
    CategoryController,
    AdminController
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ ArticleController::class, 'index'])->name('article');
Route::get('/admin',[ AdminController::class, 'index'])->name('admin');

Route::get('login',[ AuthController::class, 'loginT'])->name('loginT');
Route::post('/check',[ AuthController::class, 'login'])->name('login');



Route::get('article/{id}',[ArticleController::class, 'show'])->name('showarticle');

Route::group(['auth:sanctum'],function () {
    //protected route admin
    Route::middleware('role:admin')->prefix('admin')->group(function (){
        Route::get('category',[CategoryController::class, 'index'])->name('category');
        Route::get('add-category',[CategoryController::class, 'create'])->name('addcategory');
        Route::post('post-category',[CategoryController::class, 'store'])->name('postcategory');
        Route::get('edit-category/{id}',[CategoryController::class, 'edit'])->name('editcategory');
        Route::any('updatecategory',[CategoryController::class, 'update'])->name('updatecategory');
        Route::get('deletecategory/{id}',[CategoryController::class, 'destroy'])->name('deletecategory');


        Route::get('article',[AdminController::class, 'article'])->name('adminArticle');
        Route::get('add-article',[AdminController::class, 'create'])->name('addarticle');
        Route::post('post-article',[AdminController::class, 'store'])->name('postarticle');
        Route::get('edit-article/{id}',[AdminController::class, 'edit'])->name('editarticle');
        Route::any('updatearticle',[AdminController::class, 'update'])->name('updatearticle');
        Route::get('deletearticle/{id}',[AdminController::class, 'destroy'])->name('deletearticle');
    });
});