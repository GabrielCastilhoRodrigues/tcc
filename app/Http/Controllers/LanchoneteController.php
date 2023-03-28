<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanchoneteController extends Controller
{
    public function index(Request $request){
        return view('lanchonete', ['usuario' => isset($request->session()->get('usuario')['nome']) 
                                                ? $request->session()->get('usuario')['nome'] 
                                                : ""]);
    }
}
