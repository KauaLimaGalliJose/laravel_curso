<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginUser extends Controller
{
    public function login(){

       return view('telas.index');
    }

    public function loginSubmit(Request $dados){

        // Validação 
        $dados->validate(
            // rules
            [
                'usuario' => 'required',
                'token' => 'required|min:4|max:7',

            ],
            //params
            [
                // se estiver vazio
                'usuario.required' => "Não Pode estar vazio" ,
                'token.required' => "Não Pode estar vazio" ,

                //outros erros
                'token.min' => "O minimo é 4 caracteres",
                'token.max' => "O maximo é 7 caracteres",
            ]
        );

        $usuario =$dados->input('usuario');

        
        //conection
        try{
            
            DB::connection()->getPdo();
            echo 'conection Ok';
        }
        catch(\PDOException $e){
                
            echo "Erro conexão Banco =>" . $e->getMessage();
            }
            
        echo $usuario;
    }

    public function logout(){

        echo "Login_aut";
    }
}
