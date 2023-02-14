<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lista_nota;
use App\Http\Controllers\TbEstudianteController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TbLogin2Controller;
use App\Http\Controllers\TbDocenteController;
use App\Http\Controllers\NotaestudiantesControlller;
use App\Http\Controllers\EstudiantenotasController;
use App\Http\Controllers\DocentemateriaController;




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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lista_nota', [lista_nota::class, 'index'])->name('lista_nota.index');
Route::post('lista_nota', [lista_nota::class, 'update'])->name('lista_nota.update');
Route::post('lista_nota/delete/{id}', [lista_nota::class, 'delete'])->name('lista_nota.delete');
Route::resource('/notas', \App\Http\Controllers\TbEstudianteController::class);
Route::post('/por_doc', [lista_nota::class, 'por_doc'])->name('lista_nota.por_doc');
Route::resource('/roles', \App\Http\Controllers\RoleController::class);
Route::resource('/docente', \App\Http\Controllers\TbDocenteController::class);
Route::resource('/login', \App\Http\Controllers\TbLogin2Controller::class);
Route::post('/funlogin2', [TbLogin2Controller::class, 'funlogin2']);
Route::resource('/vista', \App\Http\Controllers\NotaestudiantesControlller::class);
Route::resource('/vista2', \App\Http\Controllers\EstudiantenotasController::class);
Route::resource('/docentemateria', \App\Http\Controllers\DocentemateriaController::class);


