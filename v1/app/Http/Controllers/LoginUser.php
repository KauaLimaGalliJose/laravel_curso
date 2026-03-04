<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginUser extends Controller
{
    public function login(){

       return view('telas.index');
    }

    public function loginSubmit(Request $dados){

        // Validação =============================
        $dados->validate(
            // rules
            [
                'usuario' => 'required',
                'senha' => 'required|min:4',
                'local' => 'required',

            ],
            //params
            [
                // se estiver vazio
                'usuario.required' => "Não Pode estar vazio" ,
                'senha.required' => "Não Pode estar vazio" ,
                'local.required' => "Não Pode estar vazio",

                //outros erros
                'senha.min' => "O minimo é 6 caracteres",
            ]
        );
        
        $usuario = $dados->input('usuario');
        $local = $dados->input('local');
        $senha = $dados->input('senha');

        $bancoUser = usuario::where('nome' , $usuario)
                                ->first();

        // se o banco retornar vazio ele entra no if
        if(!$bancoUser){

            return redirect()->back()->withInput()->with('ErroLogin' , 'Erro Usuario ou Senha Incorretos');
            // redirect() redireciona para pagina anterior back() volta para pagina anterior 
        }

        if($bancoUser->deleted_at !== null){

            return redirect()->back()->withInput()->with('ErroUsuarioDelete' , 'Erro_Usuario_Delete');

        }

        if(!password_verify($senha, $bancoUser->senha)){

            return redirect()->back()->withInput()->with('ErroLogin' , 'Erro Usuario ou Senha Incorretos');

        }
        
        if($local !== $bancoUser->tipo){

            return redirect()->back()->withInput()->with('ErroLocal' , 'Erro Tipo Incorreto');

        }

        echo '<pre>';
        print_r($bancoUser);

        // ==========================================

        
    }

    public function logout(){

        echo "Login_aut";
    }
}
