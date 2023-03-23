<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Auth;
use Closure;
use DateTime;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('acesso.login');
    }

    public function conectaUsuario(Request $request){
        $email = $request->email;
        $senha = $request->senha;

        $usuario = Usuario::where('email', '=', $email)
                          ->where('senha', '=', $senha)
                          ->first();

        if(@$usuario->id_usuario != null){
            @session_start();

            session()->flash('Login realizado com sucesso!');
            session()->put('usuario', $usuario);

            $_SESSION['id_usuario'] = $usuario->id_usuario;
            $_SESSION['nome_usuario'] = $usuario->nome;
            $_SESSION['email_usuario'] = $usuario->email;

            if($_SESSION['email_usuario'] == 'adminOficial@email.com'){
                return view('admin.principal');
            }
            else{
                return view('principal');
            }
        }
    }

    public function logout(Request $request, $guard = null){
        Auth::logout();
        return view('acesso.login');
    }
}
