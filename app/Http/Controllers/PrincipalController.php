<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        $usuario = "aleluia a";
        $dado = "A sei lá mano";
        $loja = "A Lojinha";

        $dados = [
            'usuario'=>$usuario,
            'dado'=>$dado,
            'loja'=>$loja
        ];

        return view('principal', $dados);
    }
}
