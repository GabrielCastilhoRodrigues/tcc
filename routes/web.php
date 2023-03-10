<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\BarController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\JangadaController;
use App\Http\Controllers\LanchoneteController;
use App\Http\Controllers\MilanosController;
use App\Http\Controllers\PizzariaController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\SeattleController;
//use App\Http\Controllers\testeController;



Route::get('/', [PrincipalController::class, 'index']);

Route::get('/bar', [BarController::class, 'index']);

Route::get('/cadastro', [CadastroController::class, 'index']);

Route::get('/general', [GeneralController::class, 'index']);

Route::get('/jangada', [JangadaController::class, 'index']);

Route::get('/lanchonete', [LanchoneteController::class, 'index']);

Route::get('/milanos', [MilanosController::class, 'index']);

Route::get('/pizzaria', [PizzariaController::class, 'index']);

Route::get('/restaurante', [RestauranteController::class, 'index']);

Route::get('/seattle', [SeattleController::class, 'index']);

//Route::get('/teste', [testeController::class, 'teste']);

// Route::get('/cliente', function(){
//     echo "Página de Cliente";
// });

// Route::get('/cliente/{id_Cliente}', function($id_cliente){
//     echo "Página do Cliente:".$id_cliente;
// });