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

Route::get('cat',[CatController::class, 'index']);
Route::get('cat/create', [CatController::class, 'create'])->name('cat.create');
Route::post('cat', [CatController::class, 'store'])->name('cat.store');

Route::get('dog',[\App\Http\Controllers\DogController::class,'index']);
Route::get('dog/create',[\App\Http\Controllers\DogController::class,'create'])->name('dog.create');
Route::post('dog',[\App\Http\Controllers\DogController::class, 'store'])->name('dog.store');
