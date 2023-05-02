<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Usuario;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function loginUsuario(Request $request){
        return view('acesso.login');
    }

    public function loginCliente(Request $request){
        return view('acesso.login-cliente');
    }

    public function conectaUsuario(Request $request){
        $this->limpaMensagens($request);

        $email = $request->email;
        $senha = $request->senha;

        $usuario = Usuario::where('email', '=', $email)
                          ->first();

        if((@$usuario->id_usuario != null) && (Hash::check($request->senha, $usuario->senha))){            
            $request->session()->put('usuario', $usuario);
            Log::channel('main')->info('logado usuário '.$usuario->nome);

            if($usuario->nivel == 2){
                return redirect('/principal-admin');
            }
            else{
                return view('principal');
            }
        }
        else{
            Log::channel('main')->info('erro de login. Email: '.$email. ' Senha: '. $senha);
                                       
            session()->flash('error-1', 'Login ou senha inválidos');

            return $this->loginUsuario($request);
        }
    }

    public function conectaCliente(Request $request){
        $this->limpaMensagens($request);

        $email = $request->email;
        $senha = $request->senha;

        $cliente = Cliente::where('email', '=', $email)
                          ->first();

        if((@$cliente->id_cliente != null) && (Hash::check($request->senha, $cliente->senha))){            
            $request->session()->put('cliente', $cliente);
            Log::channel('main')->info('logado usuário '.$cliente->nome);

            return redirect('/');
        }
        else{
            Log::channel('main')->info('erro de login. Email: '.$email. ' Senha: '. $senha);
                                       
            session()->flash('error-1', 'Login ou senha inválidos');

            return $this->loginCliente($request);
        }
    }

    public function logout(Request $request, $guard = null){
        if($request->session()->has('usuario')){
            Auth::logout();

            $this->limpaMensagens($request);
        }
        
        return view('acesso.login');
    }

    public function logoutCliente(Request $request, $guard = null){
        if($request->session()->has('cliente')){
            Auth::logout();

            $this->limpaMensagens($request);
        }
        
        return view('acesso.login-cliente');
    }

    public function limpaMensagens(Request $request){
        if($request->session()->has('usuario')){
            $request->session()->remove('usuario');
        }

        if($request->session()->has('cliente')){
            $request->session()->remove('cliente');
        }
        
        if($request->session()->has('error-1')){
            $request->session()->remove('error-1');
        }
    }
}
