<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return inertia('Auth/Register');
    }
    
    public function store(Request $request)
    {
        $user = User::make($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',  // users is table name
            'password' => 'required|min:8'
        ]));
        $user->save();
        Auth::login($user);

        return redirect()->intended('/');
    }
}