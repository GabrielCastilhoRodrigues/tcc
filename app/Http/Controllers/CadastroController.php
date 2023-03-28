<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function index(Request $request){
        return view('cadastro', ['usuario' => isset($request->session()->get('usuario')['nome']) 
                                                ? $request->session()->get('usuario')['nome'] 
                                                : ""]);
    }

    public function insereUsuario(Request $request){
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

        return redirect()->route('cadastro.usuario');
    }
}
