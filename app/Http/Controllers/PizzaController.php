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
            "session" => null
        ]);
    }

    public function addpizza( Request $request){
        //$pizzas = Pizza::all();
        // $request->session()->push("pizzas",$request->input("name"));
        // $request->session()->push("pizza_qtd",$request->input("pizza"));
        // $data = $request->session()->only(["pizzas", "pizza_qtd"]);
        request()->session()->push("orders",$request->all());
        return json_encode($request->session()->all());
    }
}
