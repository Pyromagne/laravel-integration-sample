<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class RemoteBookController extends Controller
{
    public function dashboard()
    {
        $response = Http::withToken(env('REMOTE_API_TOKEN'))
            ->acceptJson()
            ->get(env('REMOTE_API_URL') . '/books');

        if ($response->successful()) {
            $books = $response->json();
            return view('dashboard', compact('books'));
        }
        abort(500, 'Failed to fetch books from API');
    }
}

//('dashboard', compact('books'))