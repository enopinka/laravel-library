<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view("admin.add-items");
    }
    public function addBook(Request $request) {
        $request->validate([
            "title" => "required",
            "author" => "required",
            "year" => "required",
            "availability" => "required",
        ]);
    
        $query = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'availability' => $request->availability
        ]);
    
        if ($query) {
            return redirect()->route('manageBooks')->with("success", "Data berhasil ditambahkan");
        } else {
            return redirect()->route('manageBooks')->with("error", "Data gagal ditambahkan");
        }
    }
    
    public function showBook(Request $request){
        $data = Book::all();
        return view('member.dashboard', compact('data'));
    }
    public function showBookAdmin(Request $request){
        $data = Book::all();
        return view('admin.manage-book', compact('data'));
    }

    public function deleteBook($id){
        $data = Book::find($id);
        if($data){
            $data->delete();
            return back()->with("success", "Data berhasil dihapus!");
        }else{
            return back()->with("error", "Data tidak ditemukan!");
        }
    }

    public function showEditForm($id) {
        $book = Book::find($id);
        if ($book) {
            return view('admin.add-items', compact('book'));
        } else {
            return redirect()->route('manageBooks')->with('error', 'Data tidak ditemukan!');
        }
    }
     

    public function editBook(Request $request, $id) {
        $request->validate([
            "title" => "required",
            "author" => "required",
            "year" => "required",
            "availability" => "required",
        ]);
    
        $data = Book::find($id);
        if ($data) {
            $data->title = $request->title;
            $data->author = $request->author;
            $data->year = $request->year;
            $data->availability = $request->availability;
            $data->save();
    
            return redirect()->route('manageBooks')->with("success", "Data berhasil diubah!");
        } else {
            return back()->with("error", "Data tidak ditemukan!");
        }
    }
    
}