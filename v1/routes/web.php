<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Olá mundo";
});

Route::get('/about' , function(){

    echo "Tela_2";
});
