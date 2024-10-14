<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



 class OrderController extends Controller
{
    private $pizza_all = "";
    private $qtd_all = [];
    private $qtdNum = [];

    private function numCast($value, $key){
            array_push($this->qtdNum, (int) $value );
    }

    private function fh ($value, $key){
      if((int) $value){
            array_push($this->qtd_all, $value);
      }else{
            $this->pizza_all = $this->pizza_all."$value ".", ";
      }
      
} 


    public function payment(Request $request){
        $d_pizza = $request->session()->only(["pizzas"]);
        $d_qtd = $request->session()->only(["pizza_qtd"]);
        dump($d_pizza);
        dump($d_qtd);
        //$data = array_combine($data_pizza, $data_qtd);
        $data_pizza = $d_pizza["pizzas"];
        $data_qtd = $d_qtd["pizza_qtd"];
        dump($data_pizza);
        dump($data_qtd);
        array_walk($data_qtd,[$this, "numCast"]);
        array_walk($data_pizza,[$this, "fh"]);
        array_walk($this->qtdNum,[$this, "fh"]);
        dump($this->pizza_all);
        
        
        
        return view("payment",[
            "orders" => $this->pizza_all,
            "qtd" => $this->qtd_all     
        ]);
    }


    public function order(){

    }

}
