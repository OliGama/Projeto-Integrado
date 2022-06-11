<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditoraController;
use App\Http\Controllers\MidiaController;
use App\Http\Requests\StoreUpdateLivro;
use App\Http\Requests\StoreUpdateEditora;
use App\Http\Requests\StoreUpdateAutor;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('livros', LivroController::class);

// Editor
Route::resource('editoras', EditoraController::class);

// Autor
Route::resource('autores', AutorController::class);

// Midias
Route::resource('livros/midias', MidiaController::class);

//Route Midia
Route::resource('midias', MidiaController::class);
