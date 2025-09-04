<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class DashboardController extends Controller
{
    //
    public function index()
    {

        $user = User::all();
        $book = Book::all();
        $totalUsers = $user->count();
        $totalBooks = $book->count();
        return view('dashboard.index', compact('totalUsers', 'totalBooks'));
    }
}
