<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MilanosController extends Controller
{
    public function index(Request $request){
        return view('millanos', ['usuario' => 
                                 isset($request->session()->get('usuario')['nome']) 
                                 ? $request->session()->get('usuario')['nome'] 
                                 : ""]);
    }
}
