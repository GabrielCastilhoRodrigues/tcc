<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzariaController extends Controller
{
    public function index(Request $request){
        return view('pizzaria');
    }
}
