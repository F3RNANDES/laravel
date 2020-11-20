<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

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

// Rota para listagem dos dados
Route::get('cat', [CatController::class, 'index']);

// Rotas para criação dos dados
Route::get('cat/create', [CatController::class, 'create'])->name('cat.create');
Route::post('cat', [CatController::class, 'store'])->name('cat.store');

// Rotas para atualização dos dados
Route::get('cat/{id}', [CatController::class, 'edit'])->name('cat.edit');
Route::put('cat/{id}', [CatController::class, 'update'])->name('cat.update');

// Rota para remoção dos dados
Route::delete('cat/{id}', [CatController::class, 'destroy'])->name('cat.destroy');
