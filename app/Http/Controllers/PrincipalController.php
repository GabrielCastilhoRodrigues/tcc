<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PrincipalController extends Controller
{
    public function index(Request $request){
        $usuario = isset($request->session()->get('usuario')['nome']) 
                    ? $request->session()->get('usuario')['nome'] 
                    : "";

        return view('principal', ['usuario' => $usuario]);
    }
}
