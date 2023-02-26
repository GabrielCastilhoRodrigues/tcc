<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{
    public function teste(Request $request){

        //opc 1
        $dados = $request->all();

        print_r($dados);

        return view('teste');
    }
}
