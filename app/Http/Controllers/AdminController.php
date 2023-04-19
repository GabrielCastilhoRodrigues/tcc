<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use DateTime;
use Exception;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $this->listagemUsuario();

        return view('admin.principal');
    }

    public function buscaUsuario($id){
        $usuario = Usuario::where('id_usuario', '=', $id)->first();

        if ($usuario != null){
            return view('acesso.dados.admin-usuario', ['user' => $usuario]);
        }
        else{
            return view('acesso.dados.admin-usuario', ['user' => $usuario])->with('error-6', 'Não foi possível localizar o usuário');
        }
    }

    public function listagemUsuario(){
        $this->limpaSessao();

        $usuarios = Usuario::where('id_usuario', '<>', session()->get('usuario')['id_usuario'])->get();

        session()->put('usuarios', $usuarios);
    }

    public function listagemContrato(){
        //

        return view('admin.principal-contrato');
    }

    public function limpaSessao(){
        if (session()->has('usuarios')){
            session()->remove('usuarios');
        }
    }

    public function deletaUsuario($id){       
        $this->limpaSessao();

        if (session()->has('ok-3')){
            session()->remove('ok-3');
        }

        if (session()->has('error-5')){
            session()->remove('error-5');
        }
        
        try{
            Usuario::findOrFail($id)->delete();
            
            $this->listagemUsuario();

            return redirect('/principal-admin')->with('ok-3', 'Usuário excluído com sucesso!');
        }
        catch (Exception $e){
            session()->flash('error-5', 'Não foi possível excluir o usuário');

            return view('admin.principal');
        }
    }

    public function atualizaUsuario($id, Request $request){
        if ($request->session()->has('error-4')){
            $request->session()->remove('error-4');
        }

        if($request->senha != $request->confirmaSenha){
            $request->session()->flash('error-4', 'As senhas devem ser compatíveis');
        }
        else{
            $dados = $request->except('confirmaSenha');
            $dataAtual = new DateTime;

            $dados['dt_alteracao'] = $dataAtual;
            $dados['senha'] = Hash::make($request->senha);

            $usuario = Usuario::findOrFail($id);
            $usuario->update($dados);

            $request->session()->flash('ok-2', 'Dados alterados com sucesso!');
        }

        return $this->buscaUsuario($id);
    }
}
