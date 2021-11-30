<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    //- Sebuah Kategori dapat memiliki lebih dari satu Buku (One to Many)
    //- Sebuah Buku hanya memiliki sebuah Detail (One to One)
    public function detail(){
        // return $this->hasOne(DetailModel::class); //details : buku sama detail -> one to one relationship
        return $this->hasOne(Detail::class, 'book_id', 'id');
    }

    public function categories(){
        // return $this->hasMany(CategoryModel::class); //1 kategori punya banyak buku
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
