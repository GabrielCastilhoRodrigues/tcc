<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    public function index(Request $request){
        return view('restaurante', ['usuario' => isset($request->session()->get('usuario')['nome']) 
                                                    ? $request->session()->get('usuario')['nome'] 
                                                    : ""]);
    }
}
