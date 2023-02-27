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

use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\DocentesController;

use App\Http\Controllers\TbGestioneController;
use App\Http\Controllers\TbMateriaController;
use App\Http\Controllers\TbCarreraController;
use App\Http\Controllers\TbBoletaController;
use App\Http\Controllers\TbBecaController;
use App\Http\Controllers\TbplaneController;
use App\Http\Controllers\TbAsignacionMatController;
use App\Http\Controllers\TbAsignacionMatEstController;





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
Route::get('/seleccionar', [lista_nota::class, 'seleccionardocente']);
Route::get('/id_materia/{id}', [lista_nota::class, 'por_id'])->name('lista_nota.por_id');
Route::get('/nomina/{id}', [lista_nota::class, 'nomina_est_id'])->name('lista_nota.nomina_est_id');
Route::resource('/roles', \App\Http\Controllers\RoleController::class);
Route::resource('/docente', \App\Http\Controllers\TbDocenteController::class);
Route::resource('/login', \App\Http\Controllers\TbLogin2Controller::class);
Route::post('/funlogin2', [TbLogin2Controller::class, 'funlogin2']);
Route::resource('/vista', \App\Http\Controllers\NotaestudiantesControlller::class);
Route::resource('/vista2', \App\Http\Controllers\EstudiantenotasController::class);
Route::resource('/docentemateria', \App\Http\Controllers\DocentemateriaController::class);
Route::resource('/estudiantes', \App\Http\Controllers\TbEstudianteController::class);
Route::resource('/docentes', \App\Http\Controllers\DocentesController::class);


Route::post('/agregar', [TbDocenteController::class, 'agregar']);

Route::resource('/gestiones', \App\Http\Controllers\TbGestioneController::class);
Route::post('gestiones/delete/{id}', [TbGestioneController::class, 'delete'])->name('gestiones.delete');

Route::resource('/materias', \App\Http\Controllers\TbMateriaController::class);
Route::resource('/carreras', \App\Http\Controllers\TbCarreraController::class);
Route::resource('/boletas', \App\Http\Controllers\TbBoletaController::class);
Route::resource('/becas', \App\Http\Controllers\TbBecaController::class);
Route::resource('/plane', \App\Http\Controllers\TbplaneController::class);


Route::get('/sel_docente', [TbAsignacionMatController::class, 'docente_lista']);
Route::post('/mat_lista/{id}', [TbAsignacionMatController::class, 'funcion_mat'])->name('mat_lista');;

Route::get('/est_mat_lista', [TbAsignacionMatEstController::class, 'funcion_est_ci_carrera'])->name('est_mat_lista');;


Route::resource('/asignacionest', \App\Http\Controllers\TbAsignacionMatEstController::class);

Route::post('/reg_mat', [TbAsignacionMatController::class, 'docente_materia_funcion'])->name('rg_mt');;


Route::get('/sel_docente', [TbEstudianteController::class, 'docente_lista']);



Route::get('/nomina_est', [TbEstudianteController::class, 'docente_lista']);


