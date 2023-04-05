<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Exception;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $this->listagemUsuario();

        return view('admin.principal');
    }

    public function listagemUsuario(){
        $this->limpaSessao();

        $usuarios = Usuario::where('id_usuario', '<>', session()->get('usuario')['id_usuario'])->get();

        session()->put('usuarios', $usuarios);
    }

    public function limpaSessao(){
        if (session()->has('usuarios')){
            session()->remove('usuarios');
        }
    }

    public function deletaUsuario($id, Request $request){       
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
}
