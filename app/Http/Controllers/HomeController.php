<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;

class HomeController extends Controller
{
    public function getData(){
        $categories = Category::all(); //ngambil semua data kategori
        $books = Book::with(['detail'])->simplePaginate(4); //mindahin page
        return view('home')->with('categories',$categories)->with('books',$books);
        //ke page home dengan membawa data categories dan books
    }
}

