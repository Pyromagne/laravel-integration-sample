<?php

namespace App\Http\Controllers;

use App\Models\Book;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $books = Book::all();
        return view('dashboard', compact('books'));
    }
}
