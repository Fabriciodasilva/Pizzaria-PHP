<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



 class OrderController extends Controller
{
    private $pizza_all = "";

    private function fh ($key, $value){
      $this->pizza_all = $this->pizza_all."$key".":"."$value"."  ";
} 


    public function payment(Request $request){
        $d_pizza = $request->session()->only(["pizzas"]);
        $d_qtd = $request->session()->only(["pizza_qtd"]);
        //$data = array_combine($data_pizza, $data_qtd);
        $data_pizza = $d_pizza["pizzas"];
        $data_qtd = $d_qtd["pizza_qtd"];
        $pizzas = array_combine($data_qtd, $data_pizza);
        array_walk($pizzas,[$this, "fh"]);
        //dump($this->pizza_all);
        
        
        
        return view("payment",[
            "orders" => $this->pizza_all,     
        ]);
    }


    public function order(){

    }

}
