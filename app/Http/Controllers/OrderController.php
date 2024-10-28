<?php

namespace App\Http\Controllers;

use App\Models\confirmed;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

 class OrderController extends Controller
{
    



    public function payment(){
        $orders = Order::all();
        return view('payment', ['orders' => $orders]);
    }


    public function order(Request $request){
        $confirmed = confirmed::all();
        return view('orders', [
            "confirmed" => $confirmed
        ]);
    }

    public function add_order(Request $request){
        $confirmed_id = $request->input("id");
        $user_id = $request->input("user_id");
        $name = $request->input("name");
        $price = $request->input("price");
        $qtd = $request->input("qtd");
        confirmed::create([
                    "confirmed_id" => $confirmed_id,
                    "user_id" => $user_id,
                    "name" => $name,
                    "price" =>  $price,
                    "qtd" => $qtd
        ]);
        Order::destroy($confirmed_id);
    }

}
