<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', [PizzaController::class, "getpizza"])->name("menu");
Route::post('/menu', [PizzaController::class, "addpizza"]);
Route::get('/payment', [OrderController::class, "payment"])->name("payment");
