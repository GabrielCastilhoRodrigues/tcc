<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index(Request $request){
        return view('acesso.login');
    }

    public function conectaUsuario(Request $request){
        if($request->session()->has('usuario')){
            $request->session()->remove('usuario');
        }
        else if($request->session()->has('error')){
            $request->session()->remove('error');
        }

        $email = $request->email;
        $senha = $request->senha;

        $usuario = Usuario::where('email', '=', $email)
                          ->first();

        if((@$usuario->id_usuario != null) && (Hash::check($request->senha, $usuario->senha))){            
            $request->session()->put('usuario', $usuario);

            $_SESSION['id_usuario'] = $usuario->id_usuario;
            $_SESSION['nome_usuario'] = $usuario->nome;
            $_SESSION['email_usuario'] = $usuario->email;

            if($_SESSION['email_usuario'] == 'adminOficial@email.com'){
                return view('admin.principal');
            }
            else{
                Log::channel('main')->info('logado usuário '.$_SESSION['nome_usuario']);

                return view('principal');
            }
        }
        else{
            Log::channel('main')->info('erro de login. Email: '.$email. ' Senha: '. $senha.
                                       Hash::check($request->senha, $usuario->senha));
            session()->flash('error', 'Login ou senha inválidos');

            return $this->index($request);
        }
    }

    public function logout(Request $request, $guard = null){
        Auth::logout();

        if($request->session()->has('usuario')){
            $request->session()->remove('usuario');
        }

        return view('acesso.login');
    }
}
