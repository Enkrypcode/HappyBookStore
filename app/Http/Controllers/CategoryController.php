<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getData(Request $request){
        $category = Category::where('id', '=', $request->input('id'))->get()[0];
        $categories = Category::all(); //ngambil semua data kategori
        $books = Book::with(['detail'])->where('category_id', '=', $request->input('id'))->simplePaginate(4); //mindahin page
        return view('category')->with('categories',$categories)->with('books',$books)->with('categoryTitle', $category->category);
        //ke page home dengan membawa data categories dan books
    }
}
