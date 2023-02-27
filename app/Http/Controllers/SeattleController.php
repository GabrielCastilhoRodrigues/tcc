<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeattleController extends Controller
{
    public function index(){
        return view('seattle');
    }
}
