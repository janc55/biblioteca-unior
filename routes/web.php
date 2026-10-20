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

use App\Http\Controllers\InscripcionesController;


use App\Http\Controllers\tb_login2sController;
use App\Http\Controllers\TbSemestreController;
use App\Http\Controllers\TbCategoriaMatController;
use \App\Http\Controllers\TbCarreMateriaController;
use  \App\Http\Controllers\TbPrerrequisitoController;

use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\RolEstudianteController;
use App\Http\Controllers\RolDocenteController;

use App\Http\Controllers\TbGeneroController;
use App\Http\Controllers\TbLibroController;
use App\Http\Controllers\TbSolPreLibroController;
use App\Http\Controllers\TbPresLibroController;


use App\Http\Controllers\UsuarioAdministrativoController;

use App\Http\Controllers\TbFormSolController;
// require 'vendor/autoload.php';
// use Luecano\NumeroALetras\NumeroALetras;
//Roles
// use \App\Http\Controllers\Admin\AuthController;
//


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
    return redirect('/login');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/rol_lista_est', \App\Http\Controllers\RolEstudianteController::class);
Route::get('vistanota_rol_est', [RolEstudianteController::class, 'index_calificaciones'])->name('vistanota_rol_est');

Route::get('vista_rol_doc', [RolDocenteController::class, 'funcion_mat_doc'])->name('vista_rol_doc');
Route::post('vista_memo_rol_doc', [RolDocenteController::class, 'funcion_memorandum_docentes'])->name('vista_memo_rol_doc');
Route::post('vista_nota_rol_doc', [RolDocenteController::class, 'por_id_docente'])->name('vista_nota_rol_doc');



Route::get('lista_nota', [lista_nota::class, 'index'])->name('lista_nota.index');
Route::post('lista_nota', [lista_nota::class, 'update'])->name('lista_nota.update');
Route::post('lista_nota/delete/{id}', [lista_nota::class, 'delete'])->name('lista_nota.delete');

Route::resource('/notas', \App\Http\Controllers\TbEstudianteController::class);
Route::post('/por_doc', [lista_nota::class, 'por_doc'])->name('lista_nota.por_doc');
Route::get('/seleccionar', [lista_nota::class, 'seleccionardocente']);
Route::get('/id_materia/{id}', [lista_nota::class, 'por_id'])->name('lista_nota.por_id');
Route::post('/hoja_control_notas', [lista_nota::class, 'por_id_pdf'])->name('hoja_control_notas');

Route::get('/nomina/{id}', [lista_nota::class, 'nomina_est_id'])->name('lista_nota.nomina_est_id');
Route::post('/hoja_nomina_est', [lista_nota::class, 'por_id_nomina_pdf'])->name('hoja_nomina_est');


Route::resource('/roles', \App\Http\Controllers\RoleController::class);

Route::resource('/docente', \App\Http\Controllers\TbDocenteController::class);

Route::resource('/pres_libros', \App\Http\Controllers\TbPresLibroController::class);
Route::resource('/usu_admin', \App\Http\Controllers\UsuarioAdministrativoController::class);


Route::resource('/form_solDireccot', \App\Http\Controllers\SolicitudLibroController::class);
Route::get('/form_solDireccotcreate', [\App\Http\Controllers\SolicitudLibroController::class, 'create'])->name('form_solDireccotcreate');
Route::post('/form_solDireccotcreate', [\App\Http\Controllers\SolicitudLibroController::class, 'create'])->name('form_solDireccotcreate.post');
Route::get('/form_solDireccotbi', [\App\Http\Controllers\SolicitudLibroController::class, 'create_sobi'])->name('form_solDireccotbi');
Route::post('/form_solDireccotbi', [\App\Http\Controllers\SolicitudLibroController::class, 'create_sobi'])->name('form_solDireccotbi.post');




Route::put('/tb_pres_libro/{id}', [TbPresLibroController::class, 'update'])->name('prespdate');

// View Route
Route::get('/tb_pres_libro/{id}', [TbPresLibroController::class, 'show'])->name('presshow');

// Destroy Route
Route::delete('/tb_pres_libro/{id}', [TbPresLibroController::class, 'destroy'])->name('presdestroy');
Route::get('/tb_pres_libro', [TbPresLibroController::class, 'create'])->name('crear_pres');






// Route::resource('/login', \App\Http\Controllers\TbLogin2Controller::class);

// Route::post('/funlogin2', [TbLogin2Controller::class, 'funlogin2']);

Auth::routes();
Route::middleware('auth')->group(function()
{
    // All other routes that require authentication...
});


// Hoja de Filtro de Estudiantes con materias asignadas
Route::resource('/vista', \App\Http\Controllers\NotaestudiantesControlller::class);
Route::post('/materia_est', [NotaestudiantesControlller::class, 'lista_de_materias_est'])->name('materia_est');

Route::resource('/vista2', \App\Http\Controllers\EstudiantenotasController::class);
Route::get('/numero_a_letras', [EstudiantenotasController::class, 'funcion_letras'])->name('numero_a_letras');

Route::resource('/docentemateria', \App\Http\Controllers\DocentemateriaController::class);
Route::post('/buscar_asig_docs', [DocentemateriaController::class, 'funcion_buscar_asig_doc'])->name('buscar_asig_docs');

Route::post('/hoja_asig_doc', [DocentemateriaController::class, 'funcion_pdf_asignacion_mat2'])->name('hoja_asig_doc');
Route::post('/mat_asig_doc', [DocentemateriaController::class, 'funcion_asignacion_mat2'])->name('mat_asig_doc');
Route::post('/hoja_asigacion_docs', [DocentemateriaController::class, 'funcion_pdf_asignacion_mat3'])->name('hoja_asigacion_docs');
Route::post('/asignacion_docente', [DocentemateriaController::class, 'funcion_asignacion_mat3'])->name('asignacion_docente');
Route::post('/filtrar_asignacion_carrera', [DocentemateriaController::class, 'filtrar_asig_carrera'])->name('filtrar_asignacion_carrera');



Route::resource('/estudiantes', \App\Http\Controllers\TbEstudianteController::class);
Route::post('/hoja_boleta_ins_est', [TbEstudianteController::class, 'funcion_pdf_boleta_ins_est'])->name('hoja_boleta_ins_est');

Route::resource('/docentes', \App\Http\Controllers\DocentesController::class);

Route::post('/agregar', [TbDocenteController::class, 'agregar']);

Route::resource('/gestiones', \App\Http\Controllers\TbGestioneController::class);
Route::post('gestiones/delete/{id}', [TbGestioneController::class, 'delete'])->name('gestiones.delete');

Route::resource('/materias', \App\Http\Controllers\TbMateriaController::class);
Route::resource('/semestres', \App\Http\Controllers\TbSemestreController::class);

Route::resource('/carreras', \App\Http\Controllers\TbCarreraController::class);
Route::resource('/boletas', \App\Http\Controllers\TbBoletaController::class);
Route::resource('/becas', \App\Http\Controllers\TbBecaController::class);
Route::resource('/plane', \App\Http\Controllers\TbplaneController::class);

// Plan de Gestion de la tabla tb_planes con id_planE



Route::get('/sel_docente', [TbAsignacionMatController::class, 'docente_lista']);
Route::post('/buscar_asig_doc', [TbAsignacionMatController::class, 'funcion_buscar_asig_doc'])->name('buscar_asig_doc');



Route::post('/mat_lista/{id}', [TbAsignacionMatController::class, 'funcion_mat'])->name('mat_lista');
Route::post('/buscar_mat_lista', [TbAsignacionMatController::class, 'funcion_buscar_mat'])->name('buscar_mat_lista');



Route::resource('/asignacionest', \App\Http\Controllers\TbAsignacionMatEstController::class);

Route::post('/reg_mat', [TbAsignacionMatController::class, 'docente_materia_funcion'])->name('rg_mt');

Route::get('/sel_docente', [TbEstudianteController::class, 'docente_lista']);
Route::post('/mat_lista_doc/{id}', [TbAsignacionMatController::class, 'funcion_mat_doc'])->name('mat_lista_doc');



Route::get('/nomina_est', [TbEstudianteController::class, 'docente_lista']);



Route::get('/est_carrera', [TbAsignacionMatEstController::class, 'funcion_est_ci_carrera']);
Route::post('/buscar_asig_est', [TbAsignacionMatEstController::class, 'funcion_buscar_asig_est'])->name('buscar_asig_est');

Route::post('/est_doc_mate_gest', [TbAsignacionMatEstController::class, 'funcion_est_mate_doc_ges'])->name('lista_para_asignar');
Route::post('/asigP', [TbAsignacionMatEstController::class, 'estudiante_materia_funcion'])->name('asigP');
Route::post('/lista_materia_est', [TbAsignacionMatEstController::class, 'lista_de_materias_est'])->name('lista_materia_est');


Route::get('/boletas_2', [TbBoletaController::class, 'funcion_est_bol']);
Route::post('/boleta_asignar', [TbBoletaController::class, 'crear_boleta'])->name('boleta_asignar');
Route::get('/inscripciones_boleta', [InscripcionesController::class, 'funcion_boleta_ins']);
Route::post('/reg_ins', [InscripcionesController::class, 'registro_inscripcion'])->name('reg_ins');
Route::post('/lg_v', [tb_login2sController::class, 'retorno_datos'])->name('lg_v');
Route::post('/boleta_buscar_est', [TbBoletaController::class, 'funcion_buscar_boleta_est'])->name('boleta_buscar_est');



Route::resource('/planegest', \App\Http\Controllers\TbplanesGestionController::class);


Route::resource('/categoriamats', \App\Http\Controllers\TbCategoriaMatController::class);
Route::resource('/carrematerias', \App\Http\Controllers\TbCarreMateriaController::class);
Route::post('/plan_estudios', [TbCarreMateriaController::class, 'funcion_plan_de_estudios'])->name('plan_estudios');
Route::post('/hoja_plan_de_estudios', [TbCarreMateriaController::class, 'funcion_plan_de_estudios_pdf'])->name('hoja_plan_de_estudios');
Route::post('/hoja_historial_acc', [TbCarreMateriaController::class, 'funcion_historial_academico_c_pdf'])->name('hoja_historial_acc');
Route::post('/hoja_memo_doc', [TbCarreMateriaController::class, 'funcion_memorandum_docentes_pdf'])->name('hoja_memo_doc');
Route::post('/memorandum_docentes', [TbCarreMateriaController::class, 'funcion_memorandum_docentes'])->name('memorandum_docentes');




Route::get('/vista_carre_mat', [TbCarreMateriaController::class, 'funcion_vista_carre_materia']);
Route::get('/vista_carre_mat_asignar', [TbCarreMateriaController::class, 'funcion_vista_carre_materia_asignar_mat']);
Route::get('hoja_carre_mate', [TbCarreMateriaController::class, 'funcion_pdf_carre_materia'])->name('hoja_carre_mate_pdf');


Route::get('hoja_boletas', [TbBoletaController::class, 'funcion_pdf_boleta']);

Route::resource('/prerrequisito', \App\Http\Controllers\TbPrerrequisitoController::class);

Route::post('hoja_nota_est', [EstudiantenotasController::class, 'funcion_pdf_nota_est'])->name('nota_estudiante_pdf');
Route::post('calificacion_est', [EstudiantenotasController::class, 'index_calificaciones'])->name('calificacion_est');



Route::post('hoja_asignacion_mat_est', [NotaestudiantesControlller::class, 'funcion_pdf_asignacion_mat'])->name('asignacion_mat_est_pdf');

Route::post('/filtromatdoc', [TbAsignacionMatController::class, 'filtrar_asig_doc_mat'])->name('filtromatdoc');
Route::post('/filtromatest', [TbAsignacionMatEstController::class, 'filtrar_asig_est_mat'])->name('filtromatest');
Route::post('/expo_excel', [TbAsignacionMatEstController::class, 'exportar_excel'])->name('expo_excel');



// Route::get('nombres/buscador', 'Scrollcontroller@buscador');
Route::post('filtro_est', [TbEstudianteController::class, 'filtro_buscar'])->name('filtro_est');

Route::post('buscar_est', [TbEstudianteController::class, 'funcion_buscar_est'])->name('buscar_est');
Route::post('buscar_doc', [TbDocenteController::class, 'funcion_buscar_doc'])->name('buscar_doc');


// Prueba de roles

// Route::get('/', function () {
//      return view('welcome');
//  });
//  Route::get('/admin/login' , [AuthControlLer::class, 'getLogin'])->name('getLogin');



// insertar Imagenes
Route::get('upload-image', [ ImageUploadController::class, 'index' ]);
Route::post('upload-image', [ ImageUploadController::class, 'store' ])->name('image.store');


Route::resource('/genero', \App\Http\Controllers\TbGeneroController::class);



Route::resource('/libros', \App\Http\Controllers\TbLibroController::class);
Route::resource('/solicitar', \App\Http\Controllers\TbSolPreLibroController::class);

Route::get('tesis', [TbSolPreLibroController::class, 'fun_tesis'])->name('tesis');

Route::get('virtual', [TbSolPreLibroController::class, 'fun_biblio'])->name('virtual');
Route::get('digital', [TbSolPreLibroController::class, 'fun_pdf_Ver'])->name('digital');

Route::post('regis_accion_lib', [ TbSolPreLibroController::class, 'accion_dev' ])->name('regis_accion_lib');

Route::get('historial', [TbSolPreLibroController::class, 'fun_hist_est'])->name('historial');

Route::get('inicio_ad', [TbSolPreLibroController::class, 'fun_inicio_bi'])->name('inicio_ad');
Route::get('inicio_cant', [TbSolPreLibroController::class, 'cant_libro'])->name('inicio_cant');
Route::get('inicio_op', [TbSolPreLibroController::class, 'cant_reg_lb'])->name('inicio_op');

Route::get('cant_reg_tipo', [TbSolPreLibroController::class, 'cant_reg_tipo'])->name('cant_reg_tipo');



Route::get('cant_reg_carre', [TbSolPreLibroController::class, 'cant_reg_carrera'])->name('cant_reg_carre');








Route::get('cerrar', [TbSolPreLibroController::class, 'exit_session'])->name('cerrar');

Route::get('devolver', [TbSolPreLibroController::class, 'fun_devolver'])->name('devolver');


Route::post('bus_lib', [TbSolPreLibroController::class, 'filtrar_lib'])->name('bus_lib');

Route::post('bus_lib_ad', [TbLibroController::class, 'filtrar_lib'])->name('bus_lib_ad');

Route::post('bus_lib_archados', [TbLibroController::class, 'filtrar_archivados'])->name('bus_lib_archados');





Route::get('bus_lib_arch', [TbLibroController::class, 'filtrar_arch'])->name('bus_lib_arch');

Route::post('bus_lib_arch', [TbLibroController::class, 'filtrar_arch'])->name('bus_lib_arch.post');


Route::get('bus_lib_dig', [TbLibroController::class, 'filtrar_dig'])->name('bus_lib_dig');

Route::post('bus_lib_dig', [TbLibroController::class, 'filtrar_dig'])->name('bus_lib_dig.post');



Route::get('bus_lib_rev', [TbLibroController::class, 'filtrar_rev'])->name('bus_lib_rev');

Route::post('bus_lib_rev', [TbLibroController::class, 'filtrar_rev'])->name('bus_lib_rev.post');



Route::get('bus_lib_tes', [TbLibroController::class, 'filtrar_tes'])->name('bus_lib_tes');

Route::post('bus_lib_tes', [TbLibroController::class, 'filtrar_tes'])->name('bus_lib_tes.post');




Route::get('bus_lib_vir', [TbLibroController::class, 'filtrar_virt'])->name('bus_lib_vir');

Route::post('bus_lib_vir', [TbLibroController::class, 'filtrar_virt'])->name('bus_lib_vir.post');





Route::get('historial_ad', [TbSolPreLibroController::class, 'fun_historial'])->name('historial_ad');

Route::post('hoja_solicitud_pdf', [TbSolPreLibroController::class, 'pdf_hoja_solicitud_biblioteca'])->name('hoja_solicitud_pdf');

Route::get('createtesis', [TbLibroController::class, 'createtesis'])->name('createtesis');

Route::get('createvirtual', [TbLibroController::class, 'createvirtual'])->name('createvirtual');

Route::get('createdigital', [TbLibroController::class, 'createdigital'])->name('createdigital');

Route::get('createlibros', [TbLibroController::class, 'createlibros'])->name('createlibros');

Route::get('createinst', [TbLibroController::class, 'createinst'])->name('createinst');


Route::get('create_rev', [TbLibroController::class, 'createrev'])->name('create_rev');

Route::post('visor', [TbSolPreLibroController::class, 'fun_pdf_visor'])->name('visor');


//Route::post('regis_accion_lib', [ TbSolPreLibroController::class, 'accion_dev' ])->name('regis_accion_lib');


Route::get('invitado', [TbSolPreLibroController::class, 'invitado_bi'])->name('invitado');

Route::post('fil_invi', [TbSolPreLibroController::class, 'filtrar_invitado_bi'])->name('fil_invi');

Route::resource('/tb-enlace-bis', \App\Http\Controllers\TbEnlaceBiController::class);

Route::resource('/roles_list', \App\Http\Controllers\TbUserController::class);


Route::post('chat_admin', [TbSolPreLibroController::class, 'chat_admin'])->name('chat_admin');

Route::get('chat_admin', [TbSolPreLibroController::class, 'chat_admin'])->name('chat_admin.get');


Route::resource('/tb-rooles-us', \App\Http\Controllers\TbRoolesUController::class);


Route::post('/usuarios/import', [UsuarioAdministrativoController::class, 'import'])->name('usuarios.import');


Route::post('registroforml', [TbSolPreLibroController::class, 'crear_form_Sol'])->name('registroforml');
Route::post('registroforbi', [TbSolPreLibroController::class, 'crear_for_bi'])->name('registroforbi');

Route::resource('/noticias', \App\Http\Controllers\NoticiaController::class);

Route::resource('/tb-form-sols', \App\Http\Controllers\TbFormSolController::class);
Route::resource('/tb-form-mat-bios', \App\Http\Controllers\TbFormMatBioController::class);

Route::get('ver_usu', [ \App\Http\Controllers\TbUserController::class, 'showUserInfo'])->name('ver_usu');
Route::get('buscar_usuario', [ \App\Http\Controllers\TbUserController::class, 'buscarUsuario'])->name('buscar_usuario');


// Ruta para deshabilitar usuario
Route::get('usuarios/{id}/deshabilitar',  [\App\Http\Controllers\TbUserController::class, 'deshabilitarUsuario'])->name('deshabilitar_usuario');

// Ruta para habilitar usuario
Route::get('usuarios/{id}/habilitar',  [\App\Http\Controllers\TbUserController::class, 'habilitarUsuario'])->name('habilitar_usuario');


Route::get('pdf_form1', [ \App\Http\Controllers\TbFormSolController::class, 'pdf_impr'])->name('pdf_form1');
Route::post('pdf_form1', [ \App\Http\Controllers\TbFormSolController::class, 'pdf_impr'])->name('pdf_form1.post');

Route::get('pdf_form2', [ \App\Http\Controllers\TbFormMatBioController::class, 'pdf_impr'])->name('pdf_form2');
Route::post('pdf_form2', [ \App\Http\Controllers\TbFormMatBioController::class, 'pdf_impr'])->name('pdf_form2.post');


Route::resource('/log_ses', \App\Http\Controllers\VistaLogSessionController::class);


Route::get('rep_arch', [ \App\Http\Controllers\TbLibroController::class, 'archivados'])->name('rep_arch');


Route::put('/update_status', [\App\Http\Controllers\TbFormSolController::class, 'updateStatus'])->name('update_status');

Route::POST('cambiar_estado_varios',  [\App\Http\Controllers\TbFormMatBioController::class, 'cambiarEstadoVarios'])->name('cambiar_estado_varios');


Route::get('/log_ses', [\App\Http\Controllers\VistaLogSessionController::class, 'index'])->name('vista-log-sessions.index');


Route::get('/statistics', [\App\Http\Controllers\VistaLogSessionController::class, 'statistics'])->name('statistics');

 
Route::get('generar-pdf/{id}', [\App\Http\Controllers\TbFormSolController::class, 'pdf_impr'])->name('generar-pdf');

Route::get('generar-pdf2/{id}', [ \App\Http\Controllers\TbFormMatBioController::class, 'pdf_impr'])->name('generar-pdf2');



Route::post('sol_rev', [TbSolPreLibroController::class, 'filtrar_rev'])->name('sol_rev');
Route::get('sol_rev', [TbSolPreLibroController::class, 'filtrar_rev'])->name('sol_rev.get');



Route::get('indexinv', [TbLibroController::class, 'indexinv7'])->name('indexinv');
Route::post('indexinv', [TbLibroController::class, 'indexinv7'])->name('indexinv.post');

Route::get('indexbol', [TbLibroController::class, 'indexbol8'])->name('indexbol');
Route::post('indexbol', [TbLibroController::class, 'indexbol8'])->name('indexbol.post');


Route::get('indexga', [TbLibroController::class, 'indexga9'])->name('indexga');
Route::post('indexga', [TbLibroController::class, 'indexga9'])->name('indexga.post');
 

Route::get('indexta', [TbLibroController::class, 'indexta10'])->name('indexta');
Route::post('indexta', [TbLibroController::class, 'indexta10'])->name('indexta.post');
 
 
 
 
Route::get('sol7', [TbSolPreLibroController::class, 'filtrar_inv7'])->name('sol7');
Route::post('sol7', [TbSolPreLibroController::class, 'filtrar_inv7'])->name('sol7.post');
 
Route::get('sol8', [TbSolPreLibroController::class, 'filtrar_bol8'])->name('sol8');
Route::post('sol8', [TbSolPreLibroController::class, 'filtrar_bol8'])->name('sol8.post');
 
Route::get('sol9', [TbSolPreLibroController::class, 'filtrar_ga9'])->name('sol9');
Route::post('sol9', [TbSolPreLibroController::class, 'filtrar_ga9'])->name('sol9.post');
 
Route::get('sol10', [TbSolPreLibroController::class, 'filtrar_ta10'])->name('sol10');
Route::post('sol10', [TbSolPreLibroController::class, 'filtrar_ta10'])->name('sol10.post');
 
 
 
Route::get('create7', [TbLibroController::class, 'create7'])->name('create7');
Route::get('create8', [TbLibroController::class, 'create8'])->name('create8');
Route::get('create9', [TbLibroController::class, 'create9'])->name('create9');
Route::get('create10', [TbLibroController::class, 'create10'])->name('create10');


Route::POST('/docente_edit', [\App\Http\Controllers\TbDocenteController::class, 'update'])->name('docente_edit');
Route::get('/docente_edit', [\App\Http\Controllers\TbDocenteController::class, 'update'])->name('docente_edit.get');



Route::get('/encriptar/passwords', [TbLogin2Controller::class, 'encriptarPasswords']);
