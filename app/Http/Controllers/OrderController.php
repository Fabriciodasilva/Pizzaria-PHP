<?php

namespace App\Http\Controllers;

use App\Models\Confirmed_Order;
use App\Models\Order;
use Illuminate\Http\Request;



 class OrderController extends Controller
{
    



    public function payment(){
        $orders = Order::all();

        return view('payment', ['orders' => $orders]);
    }


    public function order(Request $request){
        
    }

    public function add_order(Request $request){
        $user_id = $request->id();
        Confirmed_Order::create();
        Order::destroy($user_id);
    }

}
