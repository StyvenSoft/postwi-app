<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        dd('Test');
        // Validation 
        // Store User
        // Sign the user
        // Redirect
    }
}
