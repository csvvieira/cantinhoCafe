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

Route::get('/',[\App\Http\Controllers\funcionarioController::class,'login']);
Route::get('/cadastrarLogin', [\App\Http\Controllers\funcionarioController::class,'cadastrar']);
Route::get('/visualizarCadastrar', [\App\Http\Controllers\funcionarioController::class,'visualizarCadastrar']);

