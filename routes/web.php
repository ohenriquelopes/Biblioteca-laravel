<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [Controllers\IndexController::class, 'principal'])->name('site.index');
Route::post('/', [Controllers\IndexController::class, 'salvar'])->name('site.index');

Route::get('/emprestar', [Controllers\EmprestarController::class, 'index'])->name('site.emprestar');
Route::post('/emprestar', [Controllers\EmprestarController::class, 'emprestar'])->name('site.emprestar.processar');


Route::get('/livros_disponiveis', [Controllers\LivrosDisponiveisController::class, 'index'])->name('site.livros_disponiveis');

Route::fallback(function(){
    return 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
