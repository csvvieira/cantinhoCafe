<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\funcionarioController::class,'paginaInicial']);
Route::get('/cadastrarF',[\App\Http\Controllers\funcionarioController::class,'cad']);
Route::get('/cadastrarF/salvarF',[\App\Http\Controllers\funcionarioController::class,'inserir']);
Route::get('/editarF/{id}',[\App\Http\Controllers\funcionarioController::class,'editar']);
Route::get('/atualizarF/{id}',[\App\Http\Controllers\funcionarioController::class,'atualizar']);

Route::get('/cadastrarP',[\App\Http\Controllers\produtoController::class,'cad']);
Route::get('/cadastrarP/salvarP',[\App\Http\Controllers\produtoController::class,'inserir']);
Route::get('/consultarPaginaInicialP',[\App\Http\Controllers\produtoController::class,'consultarPaginaInicialP']);
Route::get('/editarP/{id}',[\App\Http\Controllers\produtoController::class,'editar']);
Route::get('/atualizarP/{id}',[\App\Http\Controllers\produtoController::class,'atualizar']);
Route::get('/excluirP/{id}',[\App\Http\Controllers\produtoController::class,'excluir']);

Route::get('/cadastrarC',[\App\Http\Controllers\clienteController::class,'cad']);
Route::get('/cadastrarC/salvarC',[\App\Http\Controllers\clienteController::class,'inserir']);
Route::get('/consultarPaginaInicialC',[\App\Http\Controllers\clienteController::class,'consultarPaginaInicialC']);
Route::get('/editarC/{id}',[\App\Http\Controllers\clienteController::class,'editar']);
Route::get('/atualizarC/{id}',[\App\Http\Controllers\clienteController::class,'atualizar']);
Route::get('/excluirC/{id}',[\App\Http\Controllers\clienteController::class,'excluir']);

