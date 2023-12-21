<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{
     public function login(Request $request)
    {
        return response()->json(['message' => 'Please use POST request for login.']);
    }

    public function loginPost(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'string|email|required',
        'password' => 'required|min:5',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    $credentials = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Return all user data
        return response()->json(['message' => 'Login Success', 'user' => $user]);
    }

    return response()->json(['error' => 'Login Gagal - Coba Lagi'], 401);
}


    public function register(Request $request)
    {
        return response()->json(['message' => 'Please use POST request for registration.']);
    }

    public function registerPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email'=> 'email|required|string|unique:users',
            'password' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'Registration successful.']);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Logout Success']);
    }
}
