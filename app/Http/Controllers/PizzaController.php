<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PizzaController extends Controller
{
    public function getpizza(Request $request){
       
        $id = Auth::id();
        $pizzas = Pizza::all();
        if($id != null){
            return view("menu", [
            "pizzas" => $pizzas,
            "session" => null,
            "id" => $id
        ]);
        }else{
            @dump($id);
        }
        
    }

    public function addpizza(Request $request){
           $id = $request->input("id");
           $name = $request->input("name");
           $price = $request->input("price");
           $qtd = $request->input("qtd");
           $description = "$name.''.$price.''.$qtd";
           if ($id == Auth::id()){
                Order::create([
                    "user_id" => $id,
                    "description" => $description,

                ]);
                return redirect()->route("menu") ;
           }else{
             @dump($id);
           }
           
    }


}
