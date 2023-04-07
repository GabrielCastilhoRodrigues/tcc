<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index($nivel){
        if ($nivel == 1){
            return view('acesso.dados.usuario');
        }
        else if ($nivel == 2){
            return redirect('/principal-admin');
        }
    }
}
