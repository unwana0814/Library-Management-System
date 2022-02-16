<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AuthorController extends Controller
{
   public function index($user_id){
       $books = Book::where('user_id', $user_id)->get();
        return view('author.index', [
        'books' => $books,
        'user_id' => $user_id
    ]);
   }

   public function createBook($user_id){

       return view('author.create', [
           'user_id' => $user_id,
       ]);
   }

   public function store(Request $request, $user_id){
       $this->validate($request, [
            'name' => 'required',
            'bookcase' => 'required',
            'author' => 'required',
        ]);

        $fields = $request->only(['name', 'bookcase', 'author']);
        $fields['user_id'] = $user_id;

        Book::create($fields);

        return redirect()->route('author.index', $user_id);
   }
}
