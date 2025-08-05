<?php

namespace App\Http\Controllers;

use App\Models\Book;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $books = Book::all(); // You can use paginate() if needed
        return view('dashboard', compact('books'));
    }
}
