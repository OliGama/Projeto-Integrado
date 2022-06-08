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

//Route Livros
Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');
Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');
Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');
Route::get('/livros/{id}', [LivroController::class, 'show'])->name('livros.show');
Route::delete('/livros/{id}', [LivroController::class, 'destroy'])->name('livros.destroy');
Route::get('/livros/edit/{id}', [LivroController::class, 'edit'])->name('livros.edit');
Route::put('/livros/{id}', [LivroController::class, 'update'])->name('livros.update');
Route::any('/livros/search', [LivroController::class, 'search'])->name('livros.search');
//Route Autor
Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');
Route::get('/autores/create', [AutorController::class, 'create'])->name('autores.create');
Route::post('/autores', [AutorController::class, 'store'])->name('autores.store');
Route::get('/autores/{id}', [AutorController::class, 'show'])->name('autores.show');
Route::delete('/autores/{id}', [AutorController::class, 'destroy'])->name('autores.destroy');
Route::get('/autores/edit/{id}', [AutorController::class, 'edit'])->name('autores.edit');
Route::put('/autores/{id}', [AutorController::class, 'update'])->name('autores.update');
Route::any('/autores/search', [AutorController::class, 'search'])->name('autores.search');
//Route Editora
Route::get('/editoras', [EditoraController::class, 'index'])->name('editoras.index');
Route::get('/editoras/create', [EditoraController::class, 'create'])->name('editoras.create');
Route::post('/editoras', [EditoraController::class, 'store'])->name('editoras.store');
Route::get('/editoras/{id}', [EditoraController::class, 'show'])->name('editoras.show');
Route::delete('/editoras/{id}', [EditoraController::class, 'destroy'])->name('editoras.destroy');
Route::get('/editoras/edit/{id}', [EditoraController::class, 'edit'])->name('editoras.edit');
Route::put('/editoras/{id}', [EditoraController::class, 'update'])->name('editoras.update');
Route::any('/editoras/search', [EditoraController::class, 'search'])->name('editoras.search');
//Route Midia
Route::resource('midias', MidiaController::class);
