<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanchoneteController extends Controller
{
    public function index(){
        return view('lanchonete');
    }
}
