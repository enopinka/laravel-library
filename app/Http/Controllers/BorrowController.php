<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    public function borrowForm($id)
    {
        $book = Book::findOrFail($id);
        return view('member.borrow-form', compact('book'));
    }

    public function borrowBook(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $user = Auth::user();

        if ($book->availability == 1) {
            $book->borrowers()->attach($user->id);
            $book->availability = 0;
            $book->save();

            return redirect()->route('manageBooks')->with('success', 'Buku berhasil dipinjam');
        } else {
            return redirect()->route('manageBooks')->with('error', 'Buku tidak tersedia');
        }
    }

    public function borrowedBook(){
        $user = Auth::user();
        $data = $user->borrowedBooks;

        
        // return view('member.borrowed-books-list', compact('borrowedBooks'));
        return view('member.borrowed-book-list', compact('data')); 
    }

    public function returnBook($id)
{
    $user = Auth::user();
    $book = Book::findOrFail($id);

    $book->borrowers()->detach($user->id);


    $book->availability = 1;
    $book->save();

    return redirect()->back()->with('success', 'Buku berhasil dikembalikan');
}
}