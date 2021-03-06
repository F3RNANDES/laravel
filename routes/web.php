<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatController;

use App\Http\Controllers\DogController;

use App\Http\Controllers\AveController;

use App\Http\Controllers\UserController;

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
Route::get('cat',[CatController::class, 'index'])->name('cat.index');

//Rota para criar os gatos
Route::get('cat/create', [CatController::class, 'create'])->name('cat.create');
Route::post('cat', [CatController::class, 'store'])->name('cat.store');

//Rota para editar os gatos
Route::get('cat/{id}',[CatController::class,'edit'])->name('cat.edit');
Route::put('cat/{id}',[CatController::class,'update'])->name('cat.update');

//Rota para deletar os gatos
Route::delete('cat/{id}',[CatController::class, 'destroy'])->name('cat.destroy');


//----------------------------------------------


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
//Rota do controlador delete passando o parametro do id de dog informado que    essa rota terá o nome de 'dog.destroy'
Route::delete('dog/{id}',[DogController::class, 'destroy'])->name('dog.destroy');

//----------------------------------------------------

//List Aves
Route::get('ave',[AveController::class,'index'])->name('ave.list');

//Create ave
Route::get('ave/create',[AveController::class,'create'])->name('ave.create');
Route::post('ave',[AveController::class,'store'])->name('ave.store');

//edit ave
Route::get('ave/{id}',[AveController::class,'edit'])->name('ave.edit');
Route::put('ave/{id}',[AveController::class,'update'])->name('ave.update');

//delete ave
Route::delete('ave/{id}',[AveController::class, 'destroy'])->name('ave.destroy');

//
// ------------------------------------------------------------------------------------
//

//Home users
Route::get('user',[UserController::class,'index'])->name('user.home');
// Create user
Route::get('user/create',[UserController::class,'create'])->name('user.create');
Route::post('user',[UserController::class,'store'])->name('user.store');
//Edit User
Route::get('user/{id}',[UserController::class,'edit'])->name('user.edit');
Route::put('user/{id}',[UserController::class,'update'])->name('user.update');
//Delete user
Route::delete('user/{id}',[UserController::class,'destroy'])->name('user.destroy');
