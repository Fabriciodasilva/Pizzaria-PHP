<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function register(){
        return view('register');
    }

    public function store(){
        $validated = request()->validate([
            "name" => "required|min:3|max:50",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed",
        ]);
        User::Create([
            "name" => $validated["name"],
            "email" => $validated["email"],
            "password" =>Hash::make($validated["password"])
        ]);
        return redirect()->route("menu")->with("success", "User registered successfully!!!");
    }

    public function login(){
        return view("login");
    }

    public function authenticate(){
        $validated = request()->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if(auth()->attempt($validated)){
            request()->session()->regenerate();
            return redirect()->route('menu')->with("success", "Logged in successfully!!!");
        }
        return redirect()->route("menu")->withErrors(["error" => "Wrong credentials"]);
    }

    public function logout(){
        Auth::logout();
        request()->session()->regenerate();
        request()->session()->regenerateToken();

        return redirect()->route("menu")->with("success", "User Logged out");
    }
}
