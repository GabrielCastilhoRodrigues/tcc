<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MilanosController extends Controller
{
    public function index(Request $request){
        return view('millanos');
    }
}
