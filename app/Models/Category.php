<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //- Sebuah Kategori dapat memiliki lebih dari satu Buku (One to Many)
    //- Sebuah Buku hanya memiliki sebuah Detail (One to One)
    public function books(){         
        // return $this->hasMany(BookModel::class);  
        return $this->belongsTo(Book::class, 'book_id', 'id');   
    }
}
