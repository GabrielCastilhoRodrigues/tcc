<?php

use App\Http\Controllers\LoginController;
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
use App\Http\Controllers\testeController;


Route::get('/', [PrincipalController::class, 'index']);

Route::get('/bar', [BarController::class, 'index']);

Route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro.usuario');
Route::post('/cadastro', [CadastroController::class, 'insereUsuario'])->name('cadastro.insereUsuario');

Route::get('/login', [LoginController::class, 'index'])->name('login.usuario');
Route::post('/login', [LoginController::class, 'conectaUsuario'])->name('login.conectaUsuario');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logoutUsuario');

Route::get('/general', [GeneralController::class, 'index']);

Route::get('/jangada', [JangadaController::class, 'index']);

Route::get('/lanchonete', [LanchoneteController::class, 'index']);

Route::get('/millanos', [MilanosController::class, 'index']);

Route::get('/pizzaria', [PizzariaController::class, 'index']);

Route::get('/restaurante', [RestauranteController::class, 'index']);

Route::get('/seattle', [SeattleController::class, 'index']);

Route::get('/test-conn', [testeController::class, 'teste']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
