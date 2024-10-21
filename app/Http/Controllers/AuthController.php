<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function Register(){
        return view('register');
    }

    public function Store(){
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
        return redirect()->route("welcome")->with("success", "User registered successfully!!!");
    }
}
