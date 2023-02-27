<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzariaController extends Controller
{
    public function index(){
        return view('pizzaria');
    }
}
