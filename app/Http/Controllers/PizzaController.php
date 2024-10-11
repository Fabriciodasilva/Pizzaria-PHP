<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function getpizza(){
        $pizzas = Pizza::all();
        return view("menu", [
            "pizzas" => $pizzas,
            "request" => null
        ]);
    }

    public function addpizza( Request $request){
        $pizzas = Pizza::all();
        return view("menu", [
            "pizzas" => $pizzas,
            "request" => $request->input("pizza"),
            "name" => $request->input("name")
            
        ]);
    }
}
