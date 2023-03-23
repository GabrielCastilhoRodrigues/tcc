<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        if(session()->has('usuario')){
            echo 'logado';
        }
        else {
            return view('principal');
        }
    }
}
