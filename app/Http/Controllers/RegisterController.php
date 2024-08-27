<?php

namespace App\Http\Controllers;

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
            'username' => 'required|alpha|max:10'
        ]);

    }
}
