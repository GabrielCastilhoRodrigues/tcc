<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JangadaController extends Controller
{
    public function index(){
        return view('jangada');
    }
}
