<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vista_mat_estudiantes;
use App\Models\vista_mat_estudiantes_pdf;
use App\Models\vista_est_ci_carrs;

use App\Models\TbGestione;
use PDF;

class NotaestudiantesControlller extends Controller
{
    //
    public function index()
    {        
        $user = TbGestione::get()->last();
        // $vista = vista_mat_estudiantes::get();
        $vista = vista_est_ci_carrs::get();

        return view('notasestudiante.index', compact('vista'));           
    }
   
    public function lista_de_materias_est() 
    {
        $id= $_POST['id'];
        $user = TbGestione::get()->last();
        // $vista = vista_mat_estudiantes::get()->where('id_gestion',$user->id_gestion);
        $vista = vista_mat_estudiantes::get()->where('id_est','=',$id);
        return view('notasestudiante.index_materia_est', compact('vista'));           
    }
    public function funcion_pdf_asignacion_mat()
    {
        $id= $_POST['id'];
        $user = TbGestione::get()->last();
        $datos = vista_mat_estudiantes_pdf::get()->where('id_est','=',$id);
        $datos2 = vista_mat_estudiantes::limit(1)->get()->where('id_est','=',$id);
        // $consulta = Modelo::select("rol")->latest()->first();       
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
            'datos2'=> $datos2,

        ];           
        $pdf = PDF::loadView('notasestudiante.hoja_asig_est', $data);     
        return $pdf->download('Asig_est_imprimir.pdf');
          
    }
    public function funcion_buscar_est_mat(Request $request)
    {
        $tbEstudiante = vista_mat_estudiantes::where('cod_est','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_p_est','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_m_est','LIKE','%'.$request->dato.'%')
        ->orWhere('nombre_est','LIKE','%'.$request->dato.'%')->get();
        return view('tb-estudiante.index', compact('tbEstudiante'));
    }

    // public function crear_nota_est(Request $request)
    // {
    //     $lista = new vista_mat_estudiantes();
    //     $tbGestion = TbGestione::get();
        
    //     $id_est=$request->id_est;
    //     $dato=$request->dato;

       
    //     return view('notaestudiante2.create',compact('id_est'), compact('dato'), compact('lista'));
    // }
}
