<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use DateTime;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{
    public function cadastroUsuario(Request $request){
        return view('cadastros.cadastro');
    }

    public function cadastroCliente(Request $request){
        return view('cadastros.cadastro-cliente');
    }

    public function insereUsuario(Request $request){
        $this->limpaMensagens($request);

        $dataAtual = new DateTime;

        if($request->senha != $request->confirmaSenha){
            $request->session()->flash('error-4', 'As senhas devem ser compatíveis');
        }
        else{
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

            $request->session()->flash('ok-1', 'Dados inseridos com sucesso!');
        }

        return view('cadastros.cadastro');
    }

    public function insereCliente(Request $request){
        $this->limpaMensagens($request);

        $dataAtual = new DateTime;

        if($request->senha != $request->confirmaSenha){
            $request->session()->flash('error-4', 'As senhas devem ser compatíveis');
        }
        else{
            Cliente::create(
                [   
                    'nome' => $request->nome,
                    'dt_nascimento' => $request->dt_nascimento,
                    'cpf' => $request->cpf,
                    'email' => $request->email,
                    'senha' => Hash::make($request->senha),
                    'dt_cadastro' => $dataAtual,
                    'dt_alteracao' => $dataAtual,
                    'ativo' => 1
                ]
            );

            $request->session()->flash('ok-1', 'Dados inseridos com sucesso!');
        }

        return view('cadastros.cadastro-cliente');
    }

    public function atualizaUsuario(Request $request){
        $this->limpaMensagens($request);

        if($request->senha != $request->confirmaSenha){
            $request->session()->flash('error-4', 'As senhas devem ser compatíveis');
        }
        else{
            $dados = $request->except('confirmaSenha');
            $dataAtual = new DateTime;

            $dados['dt_alteracao'] = $dataAtual;
            $dados['senha'] = Hash::make($request->senha);

            $usuario = Usuario::findOrFail(session()->get('usuario')['id_usuario']);
            $salvou = $usuario->update($dados);

            if ($salvou){
                $request->session()->put('usuario', $usuario);
                $request->session()->flash('ok-2', 'Dados alterados com sucesso!');
            }
            else{
                $request->session()->flash('error-3', 'Não foi possível realizar as alterações. Favor contatar o suporte');
            }
        }

        return view('acesso.dados.usuario');
    }

    public function validaSenha(Request $request){
        $request->validate([
            'senha' => ['required'],
            'confirmaSenha' => ['required|same:senha']
        ]);
    }

    public function limpaMensagens(Request $request){
        if($request->session()->has('error-3')){
            $request->session()->remove('error-3');
        }

        if($request->session()->has('error-4')){
            $request->session()->remove('error-4');
        }

        if($request->session()->has('ok-2')){
            $request->session()->remove('ok-2');
        }

        if($request->session()->has('ok-1')){
            $request->session()->remove('ok-1');
        }
    }
}
