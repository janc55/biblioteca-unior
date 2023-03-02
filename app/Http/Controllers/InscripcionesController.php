<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vista_para_inscripciones;
use App\Models\vista_boleta_antes_de_inscripcion;
use App\Models\tb_inscripciones;
use App\Models\vista_est_ci_carrs;

class InscripcionesController extends Controller
{
    //
    public function index()
    {
        $lista = vista_para_inscripciones::paginate();
        return view('inscripciones.index', compact('lista'));  
    }
    
    
    public function funcion_est_ci_carrera()
    {
        $lista = vista_est_ci_carrs::paginate();
        return view('tb-asignacion-mat-est.lista_estudiantes', compact('lista'));
          
    }
    public function funcion_boleta_ins()
    {
         $lista = vista_boleta_antes_de_inscripcion::paginate();
        return view('inscripciones.lista_inscripciones', compact('lista'));       
    }


    public function reg_ins(Request $request)
    {


        tb_inscripciones::create([
                        'id_est'       => $request->id_est,
                        'id_gestion'            => $request->id_gestion,
                        'id_beca'          => 1,
                        
                        'id_boleta'          => $request->id_boleta,
                        'obs_ins'        => 4,
                       
        ]);

       // TbAsignacionMat::insert('insert into tb_asignacion_mats (id_materia, id_doc, id_carre,id_turno,id_gestion,paralelo_asig_mat) values (?,?,?,?,?,?)', [$request->id_mat,$request->id_doc,1,$request->id_turno,4,$request->id_materia]);
      
        echo $request->id_mat;
        $lista = vista_boleta_antes_de_inscripcion::paginate();
        return view('inscripciones.lista_inscripciones', compact('lista'));         
       
    }

}
