<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return  "Olá mundo";
});


Route::get('/login', [AuthController::class , 'login']);

Route::post('/loginSubmit' , [AuthController::class , 'loginSubmit']);

