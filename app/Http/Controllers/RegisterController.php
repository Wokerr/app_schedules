<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() 
    {
        return view('auth.register');
    }
    
    public function store(Request $request) 
    {
        // dd($request);

        $request->validate([
            'name' => 'required|alpha|max:50',
            'username' => 'required|alpha|max:10|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:30',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);

    }
}
