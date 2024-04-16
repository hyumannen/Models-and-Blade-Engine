<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminte\Support\Facades\DB;
use App\Models\Book;

class BookController extends Controller
{

    /*

        $data = DB::table('books')->select('id', 'isbn', 'title', 'author', 'description', 'date_published')->get();

    */
    function show(){
        $data=Book::all();
        return view('book', ['book' => $data]);
    } 
    }

