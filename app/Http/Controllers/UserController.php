<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser(Request $request) {
        $data = User::all();

        return view("admin.manage-user", compact("data"));
    }

    public function deleteUser($id){
        $data = User::find($id);
        if($data){
            $data->delete();
            return back()->with("success", "Data berhasil dihapus!");
        }else{
            return back()->with("error", "Data tidak ditemukan!");
        }
    }
}