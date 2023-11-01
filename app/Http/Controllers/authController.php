<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    public function login(){
        return view('/login');
    }
    public function loginPost(Request $request){
        $request->validate([
            'email' => 'string|email|required',
            'password' => 'required|min:5'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->jenis == 'admin') {
                return redirect('/admin')->with('success', 'Login Success');
            }
            return redirect('/');
        }
        return back()->with('error', 'Login Gagal - Coba Lagi');
    }
    public function register(){
        return view('/register');
    }
    public function registerPost(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email'=> 'email|required|string|unique:users',
            'password' => 'required|min:5|confirmed'
        ]);
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        return view('/login')->with('success', 'Login Berhasil');
    }
        public function logout() {
        Auth::logout();
        return redirect('/login')->with('success', 'Logout Success'); 
    }
}
