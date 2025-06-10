<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    public function index() {
        return view('bookForm');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'title' => ['required','max:255','unique:books,title'],
            'author' => ['required','max:100'],
            'genre' => ['required']
        ]);

        $book = new Book($request->all());
        $book->save();

        return Redirect::route('index');
    }
}
