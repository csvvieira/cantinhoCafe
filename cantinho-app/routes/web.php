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

//Rotas para as telas de login e cadastro
Route::get('/',[\App\Http\Controllers\funcionarioController::class,'login']);
Route::get('/cadastrarLogin', [\App\Http\Controllers\funcionarioController::class,'cadastrar']);
Route::get('/visualizarCadastrar', [\App\Http\Controllers\funcionarioController::class,'visualizarCadastrar']);

//Rota para as telas de produto
Route::get('/consultarP', [\App\Http\Controllers\produtoController::class,'paginaInicialProduto']);
Route::get('/cadastrarP',[\App\Http\Controllers\produtoController::class,'cadastrar']);
Route::get('/cadastrarP/salvarP',[\App\Http\Controllers\produtoController::class,'inserir']);
Route::get('/editarP/{id}',[\App\Http\Controllers\produtoController::class,'editar']);
Route::get('/atualizarP/{id}',[\App\Http\Controllers\produtoController::class,'atualizar']);
Route::get('/excluirP/{id}',[\App\Http\Controllers\produtoController::class,'excluir']);

//Rota para as telas de cliente
Route::get('/consultarC', [\App\Http\Controllers\clienteController::class,'paginaInicialCliente']);
Route::get('/cadastrarC',[\App\Http\Controllers\clienteController::class,'cadastrar']);
Route::get('/cadastrarC/salvarC',[\App\Http\Controllers\clienteController::class,'inserir']);
Route::get('/editarC/{id}',[\App\Http\Controllers\clienteController::class,'editar']);
Route::get('/atualizarC/{id}',[\App\Http\Controllers\clienteController::class,'atualizar']);
Route::get('/excluirC/{id}',[\App\Http\Controllers\clienteController::class,'excluir']);


