<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PrincipalController extends Controller
{
    public function index(Request $request){
        return view('principal');
    }
}
