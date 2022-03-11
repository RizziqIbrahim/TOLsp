<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }

    public function category(){
        return $this->belongsTo(Category::class, "category_id");
    }

    protected $fillable = [
        'judul_artikel',
        'isi_artikel',
        'user_id',
        'category_id',
        'gambar_artikel'
    ];
}
