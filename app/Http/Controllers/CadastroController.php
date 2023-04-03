<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{
    public function index(Request $request){
        return view('cadastro');
    }

    public function insereUsuario(Request $request){
        $dataAtual = new DateTime;

        Usuario::create(
            [   
                'nome' => $request->nome,
                'dt_nascimento' => $request->dt_nascimento,
                'cpf' => $request->cpf,
                'email' => $request->email,
                'senha' => Hash::make($request->senha),
                'dt_cadastro' => $dataAtual,
                'dt_alteracao' => $dataAtual,
                'nivel' => 1
            ]
        );

        return redirect()->route('cadastro.usuario');
    }

    public function atualizaUsuario(Request $request){
        $dados = $request->all();
        $dataAtual = new DateTime;

        $dados['dt_alteracao'] = $dataAtual;

        $usuario = Usuario::findOrFail(session()->get('usuario')['id_usuario']);
        $salvou = $usuario->update($dados);

        if ($salvou){
            $request->session()->remove('error');
            $request->session()->put('usuario', $usuario);
        }
        else{
            $request->session()->flash('error-3', 'Não foi possível realizar as alterações. Favor contatar o suporte');
        }

        return view('acesso.dados.usuario');
    }
}
