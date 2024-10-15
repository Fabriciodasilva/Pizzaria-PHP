<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



 class OrderController extends Controller
{
    



    public function payment(Request $request){
        
        $orders = $request->session()->only(["orders"]);
        return view("payment",[
            "orders" => $orders
        ]);
    }


    public function order(){

    }

}
