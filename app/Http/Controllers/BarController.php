<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarController extends Controller
{
    public function index(Request $request){
        return view('bar');
    }
}
