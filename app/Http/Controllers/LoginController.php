<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // *
    // * REGISTER USER
    // *
    public function register(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    // *
    // * LOGIN, AUTHENTICATION
    // *
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        // Initialize and fill remember_token in user database 
        $remember = $request->filled('remember');
 
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate(); 
            return response()->json(Auth::user(), 200);
        }

        return response()->json(['error' => 'The provided credentials do not match our records'], 401);
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
}
