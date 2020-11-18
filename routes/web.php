<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NameController;
use App\Http\Controllers\ProdutosController;


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

    Route::get('/', [AdminController::class, 'getIndex']);
    Route::get('lista', [NameController::class, 'index']);
    Route::get('projetos/inserir', [ProdutosController::class, 'create']);
    Route::post('projetos/inserir', [ProjetosController::class, 'postInserir']);
    Route::get('projetos/editar/{id}', [ProjetosController::class, 'editar']);
    Route::post('projetos/editar/{id}', [ProjetosController::class,'postEditar']);
    Route::post('projetos/deletar/{id}', [ProjetosController::class, 'postDeletar']); 
    
    Route::resource('products', 'ProductController')->middleware('auth');

    Route::get('/produtos/novo', [ProdutosController::class, 'create']);
    Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registra_produto');
