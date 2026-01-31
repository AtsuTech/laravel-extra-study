<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    // public fuction index(){
    //     $books = Book::all();
    //     return view('books.index', compact('books'));
    // }

    public function store(Request $request){
        $book = Book::create($request->all());
        return redirect()->route('books.index');
    }
}
