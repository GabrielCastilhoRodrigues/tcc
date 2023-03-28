<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JangadaController extends Controller
{
    public function index(Request $request){
        return view('jangada', ['usuario' => isset($request->session()->get('usuario')['nome']) 
                                                ? $request->session()->get('usuario')['nome'] 
                                                : ""]);
    }
}
