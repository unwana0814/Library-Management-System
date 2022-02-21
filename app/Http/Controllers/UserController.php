<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('user.user_index', [
            'books' => $books,
        ]);
    }

    public function download()
    {
        $books = DB::table('books')->get();
        return view('user.user_index', [
            'books' => $books
        ]);
    }
}
