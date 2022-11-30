<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;

// Nama : Hanustavira Guru Acarya
// NIM : 2440046031

class LoginController extends Controller
{
    public function registration(){
        return view('signin');
    }

    public function save_reg(Request $request){
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = $request->all();
        $create = User::create([
            'name' => $data['name'],
            'nim' => $data['nim'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        if($create){
            Session::flash('success', 'Berhasil mendaftar !');
            return redirect('/');
        }else{
            Session::flash('error', 'Pendaftaran gagal !');
            return redirect('/');
        }
    }
}
