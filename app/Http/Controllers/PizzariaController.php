<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzariaController extends Controller
{
    public function index(Request $request){
        return view('pizzaria', ['usuario' => isset($request->session()->get('usuario')['nome']) 
                                                ? $request->session()->get('usuario')['nome'] 
                                                : ""]);
    }
}
