<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view("register");
    }

    public function store(Request $request){
        $credentials = $request->validate([
            "name"=>"required|max:255",
            "email"=>"required|email|unique:users",
            "password"=>"required|min:5|max:255",
        ]);

       $user = User::create([
            'name' => $request->name, 
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' =>"member"
        ]);

        return back()->withErrors(['email' => 'gtw']);
    }


}