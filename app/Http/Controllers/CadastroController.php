<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function index(){
        return view('cadastro');
    }

    public function insereUsuario(Request $request){
        //$usuario = new Usuario;
        $dataAtual = new DateTime;

        Usuario::create(
            [   
                'nome' => $request->nome,
                'dt_nascimento' => $request->dt_nascimento,
                'cpf' => $request->cpf,
                'email' => $request->email,
                'senha' => $request->senha,
                'dt_cadastro' => $dataAtual,
                'dt_alteracao' => $dataAtual
            ]
        );

        /*
        $usuario->nome = $request->nome;
        $usuario->dt_nascimento = $request->dt_nascimento;
        $usuario->cpf = $request->cpf;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->dt_cadastro = $dataAtual;
        $usuario->dt_alteracao = $dataAtual;
        $usuario->save();*/

        return redirect()->route('cadastro.usuario');
    }
}
