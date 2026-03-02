<?php

use App\Http\Controllers\LoginUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return  view('telas.escritorio.escritorio');
});


Route::get('/login', [LoginUser::class , 'login']);

Route::post('/loginSubmit' , [LoginUser::class , 'loginSubmit']);



