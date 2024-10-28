<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PizzaController extends Controller
{
    public function getpizza(Request $request){
       
        //  Pizza::create([
        //      "name" => "calabresa",
        //      "ingredients"=> "calabresa,mussarela,orégano,tomate",
        //      "price" => 18,50
        //  ]);
       
        $id = Auth::id();
        $pizzas = Pizza::all();
        return view("menu", [
            "pizzas" => $pizzas,
            "session" => null,
            "id" => $id
        ]);
        
    }

    public function addpizza(Request $request){
           $id = $request->input("id");
           $name = $request->input("name");
           $price = $request->input("price");
           $qtd = $request->input("qtd");
           if ($id == Auth::id() & $id !== null){
                Order::create([
                    "user_id" => $id,
                    "name" => $name,
                    "price" =>  $price,
                    "qtd" => $qtd

                ]);
                
                return redirect()->route("menu") ;
           }else{
             print_r($id);
           }
           
    }


}
