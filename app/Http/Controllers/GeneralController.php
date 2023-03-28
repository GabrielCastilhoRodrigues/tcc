<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(Request $request){
        return view('general', ['usuario' => isset($request->session()->get('usuario')['nome']) 
                                                ? $request->session()->get('usuario')['nome'] 
                                                : ""]);
    }
}
