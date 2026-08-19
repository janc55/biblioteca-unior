<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vista_para_inscripciones;
use App\Models\vista_boleta_antes_de_inscripcion;
use App\Models\tb_inscripciones;
use App\Models\vista_est_ci_carrs;
use App\Models\TbGestione;
use App\Models\TbBeca;
use Carbon\Carbon;

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
        $lista = vista_est_ci_carrs::orderBy('id_est', 'DESC')->get();
        return view('tb-asignacion-mat-est.lista_estudiantes', compact('lista'));
          
    }

    public function funcion_boleta_ins()
    {
        $user = TbGestione::get()->last();
        // $lista = vista_boleta_antes_de_inscripcion::get();
        $lista = vista_boleta_antes_de_inscripcion::get()->where('id_gestion',$user->id_gestion);
        $lista2 = TbBeca::get();
        return view('inscripciones.lista_inscripciones', compact('lista','lista2'));        
    }


    public function registro_inscripcion(Request $request)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        tb_inscripciones::create([
                        'id_est'       => $request->id_est,
                        'id_gestion'   => $request->id_gestion,
                        'id_beca'      => $request->id_beca,                        
                        'id_boleta'    => $request->id_boleta,
                        'fec_ins'      => $date,
                        'obs_ins'      => $request->obs_ins,
                       
        ]);

       // TbAsignacionMat::insert('insert into tb_asignacion_mats (id_materia, id_doc, id_carre,id_turno,id_gestion,paralelo_asig_mat) values (?,?,?,?,?,?)', [$request->id_mat,$request->id_doc,1,$request->id_turno,4,$request->id_materia]);
      
        echo $request->id_mat;
        $user = TbGestione::get()->last();
        // $lista = vista_boleta_antes_de_inscripcion::get();
        $lista = vista_boleta_antes_de_inscripcion::get()->where('id_gestion',$user->id_gestion);
        $lista2 = TbBeca::get();
        return view('inscripciones.lista_inscripciones', compact('lista','lista2'));      
       
    }
    public function create()
    {
      
    }

    public function show($id)
    {
        
    }

}
