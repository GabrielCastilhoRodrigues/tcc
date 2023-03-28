<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            if($request->session()->has('usuario')){
                $request->session()->remove('usuario');
            }
            
            $request->session()->put('usuario', $usuario);

            $_SESSION['id_usuario'] = $usuario->id_usuario;
            $_SESSION['nome_usuario'] = $usuario->nome;
            $_SESSION['email_usuario'] = $usuario->email;

            if($_SESSION['email_usuario'] == 'adminOficial@email.com'){
                return view('admin.principal');
            }
            else{
                Log::channel('main')->info('logado usuário '.$_SESSION['nome_usuario']);

                return view('principal', 
                            ['usuario' => $request->session()->get('usuario')['nome']]);
            }
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
