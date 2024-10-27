<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', [PizzaController::class, "getpizza"])->name("menu");
Route::post('/menu', [PizzaController::class, "addpizza"])->middleware("auth");
Route::get('/payment', [OrderController::class, "payment"])->name("payment")->middleware("auth");
Route::get('order', [OrderController::class, "order"])->name("order")->middleware("auth");
Route::post('order', [OrderController::class, "add_order"])->middleware("auth");
Route::get('/register', [AuthController::class, "register"])->name("register");
Route::post('/register', [AuthController::class, "store"]);
Route::get('/login', [AuthController::class, "login"])->name("login");
Route::post('/login', [AuthController::class, "authenticate"]);
Route::get('/logout', [AuthController::class, "logout"])->middleware("auth");
