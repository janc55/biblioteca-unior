<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lista_nota;
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


Route::get('lista_nota', [lista_nota::class, 'index'])->name('lista_nota.index');
Route::post('lista_nota', [lista_nota::class, 'update'])->name('lista_nota.update');
Route::post('lista_nota/delete/{id}', [lista_nota::class, 'delete'])->name('lista_nota.delete');
