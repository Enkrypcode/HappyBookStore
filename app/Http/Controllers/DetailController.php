<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    public function getDetail($id){
        $bookdetail = Detail::find($id);

        return view('bookdetail', compact('bookdetail'));
    }
}
