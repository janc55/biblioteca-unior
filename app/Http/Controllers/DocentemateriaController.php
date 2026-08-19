<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vista_mat_docentes;

use App\Models\TbGestione;
use App\Models\vista_asignacion_est_mate_doc_turno_ges;
use App\Models\vista_mat_asig_docentes;
use App\Models\vista_est_ci_carrs; 
use App\Models\TbSemestre; 
use App\Models\TbCarrera;
use PDF;
 
class DocentemateriaController extends Controller
{
    //
    public function index()
    {
        $user = TbGestione::get()->last();
        // $vista = vista_mat_docentes::get()->where('anio_gestion','2008')->where('cod_doc','308');
        $vista = vista_mat_docentes::get()->where('id_gestion',$user->id_gestion);
        return view('docentemateria.index', compact('vista'));     
    }
    public function funcion_pdf_asignacion_mat2(Request $request)
    {
        $datos = vista_mat_asig_docentes::get()->where('id_doc','=',$request->id_doc); // datos de la asignacion
        // $datos2=vista_mat_asig_docentes::get()->where('id_doc','=',$request->id_doc);; // datos del docente
        $data = [
            'title' => 'Welcome to Tutsmake.com', 
            'date' => date('m/d/Y'),
            'datos'=> $datos,
            // 'datos2'=> $datos2,
        ];           
        $pdf = PDF::loadView('docentemateria.hoja_mat_docentes', $data);     
        return $pdf->download('Materias_doc_imprimir.pdf');          
    }
    public function funcion_asignacion_mat2(request $request)
    {
        $datos = vista_mat_asig_docentes::get()->where('id_doc','=',$request->id_doc); // datos de la asignacion       
        return view('docentemateria.desig_mat_docentes', compact('datos'));       
    }

    public function funcion_pdf_asignacion_mat3(Request $request)
    {
        $datos = vista_mat_asig_docentes::get(); // datos de las asignaciones de todos los docentes asignados
        $datos2= vista_mat_asig_docentes::limit(1)->get(); // datos de la gestion
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
            'datos2'=> $datos2, 
        ];
           // Hoja Horinzontal 
        $pdf = PDF::loadView('docentemateria.hoja_designacion_docentes', $data)
        ->setPaper('letter', 'landscape')->setWarnings(false);     
        return $pdf->download('Materias_doc_imprimir.pdf');          
    }
    public function funcion_asignacion_mat3(request $request)
    {
        $datos = vista_mat_asig_docentes::get(); // datos de las asignaciones de todos los docentes asignados
        $datos2= vista_mat_asig_docentes::limit(1)->get(); // datos de la gestion  
        $TbCarrera =TbCarrera::get();       
        return view('docentemateria.mat_docentes_asignados', compact('datos','datos2','TbCarrera'));       
    }

    public function funcion_buscar_asig_doc(Request $request)
    {
        $vista = vista_mat_asig_docentes::where('cod_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('id_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_p_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_m_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('nombre_doc','LIKE','%'.$request->dato.'%')->get();
        return view('docentemateria.index', compact('vista'));
    }

    public function filtrar_asig_carrera(Request $request)
    {        
        $lista = vista_mat_asig_docentes::get()->where('id_carre','=',$request->id_carre);
        $TbSemestre =TbSemestre::get();
        $TbCarrera =TbCarrera::get();            
        return view('docentemateria.mat_docentes_asignados', compact('lista','TbCarrera'));
    }
}
