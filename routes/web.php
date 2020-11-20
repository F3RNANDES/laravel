<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatController;

use App\Http\Controllers\DogController;

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
// Rota para listagem dos gatos
Route::get('cat',[CatController::class, 'index']);

//Rota para criar os gatos
Route::get('cat/create', [CatController::class, 'create'])->name('cat.create');
Route::post('cat', [CatController::class, 'store'])->name('cat.store');

//Rota para editar os gatos
Route::get('cat/{id}',[CatController::class,'edit'])->name('cat.edit');
Route::put('cat/{id}',[CatController::class,'update'])->name('cat.update');

//Rota para deletar os gatos
Route::delete('cat/{id}',[CatController::class, 'destroy'])->name('cat.destroy');

//Rota para listagem de cachorros existentes.
Route::get('dog',[DogController::class,'index']);

//Rota para criar cachorro na tabela
Route::get('dog/create',[DogController::class,'create'])->name('dog.create');
Route::post('dog',[DogController::class, 'store'])->name('dog.store');

//Rota de metodo get pegando dog id para o DogController
Route::get('dog/{id}',[DogController::class,'edit'])->name('dog.edit');
//Rota de metodo put para salvar as mudanças feitas em edit.
Route::put('dog/{id}',[DogController::class,'update'])->name('dog.update');

//Rota para deletar cachorro
//Rota do controlador delete passando o parametro do id de dog informado que essa rota terá o nome de 'dog.destroy'
Route::delete('dog/{id}',[DogController::class, 'destroy'])->name('dog.destroy');
