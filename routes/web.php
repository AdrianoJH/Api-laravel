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

use App\Http\Controllers\FilmeController;
use App\Http\Controllers\CarroController;

Route::resource('filmes', FilmeController::class);
Route::resource('carros', CarroController::class);


Route::get('/', function () {
    return view('welcome');
});
