<?php

// Controllers
use App\Http\Controllers\LoginUser;
use App\Http\Controllers\HomeController;

// middleware (Serve para proteger as views caso o usuario não esteja logado)
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckLogout;

// Para rotas 
use Illuminate\Support\Facades\Route;

// Caso não esteja logado 
Route::middleware([CheckLogout::class])->group( function(){
    
    
    // Aba Login 
    Route::get('/login', [LoginUser::class , 'login']);
    Route::post('/loginSubmit' , [LoginUser::class , 'loginSubmit']);
    
    });
    
    
    
// Caso esteja Logado    
Route::middleware([CheckLogin::class])->group( function(){
        
    // aba para deslogar
    Route::get('/logout', [LoginUser::class , 'logout']);

    // Abas da Aplicação
    Route::get('/', [HomeController::class , 'home']);
});
