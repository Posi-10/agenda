<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactoController;
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

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::prefix('categorias')->group(function(){
    Route::get('/', [CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('/agregar', [CategoriaController::class, 'create'])->name('categorias.create');
    Route::get('/editar/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
    Route::get('/eliminar/{id}', [CategoriaController::class, 'show'])->name('categorias.show');
    Route::post('/guardar', [CategoriaController::class, 'store'])->name('categorias.store');
    Route::put('/actualizar/{id}', [CategoriaController::class, 'update'])->name('categorias.update');
    Route::delete('/drop/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
});

Route::prefix('contactos')->group(function(){
    Route::get('/', [ContactoController::class, 'index'])->name('contactos.index');
    Route::get('/agregar', [ContactoController::class, 'create'])->name('contactos.create');
    Route::get('/editar/{id}', [ContactoController::class, 'edit'])->name('contactos.edit');
    Route::get('/eliminar/{id}', [ContactoController::class, 'show'])->name('contactos.show');
    Route::post('/guardar', [ContactoController::class, 'store'])->name('contactos.store');
    Route::put('/actualizar/{id}', [ContactoController::class, 'update'])->name('contactos.update');
    Route::delete('/drop/{id}', [ContactoController::class, 'destroy'])->name('contactos.destroy');
});