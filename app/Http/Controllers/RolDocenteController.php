<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbGestione;
use App\Models\TbDocente;
use App\Models\vista_mat_docentes;
use App\Models\vista_memorandum_docentes;
use App\Models\TbSemestre;
use App\Models\TbCarrera;
use App\Models\vista_nota;
use App\Models\vista_obs_notas;

class RolDocenteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function funcion_mat_doc()
    {
        $DATOS=auth()->user();
        $id= $DATOS->id_tb;

        $lista = vista_mat_docentes::get()->where('id_doc','=',$id);
        // $nombredoc=$request->nombre;
        $TbSemestre =TbSemestre::get();
        $TbCarrera =TbCarrera::get();
        $id_rec = $id;        
        return view('tb-docente.v_docente', compact('lista','id_rec','TbSemestre','TbCarrera'));
    }
    public function funcion_memorandum_docentes_pdf(request $request)
    {
        $datos2 = vista_memorandum_docentes::get()->where('id_doc','=',$request->id_doc,'AND','id_carre','=',$request->id_car,'AND','id_materia','=',$request->id_mat);
        $datos = vista_memorandum_docentes::get();
        // $consulta = Modelo::select("rol")->latest()->first();
       
        $data = [
            'title' => 'Welcome to Tutsmake.com', 
            'date' => date('m/d/Y'),
            'datos'=> $datos, 
            'datos2'=> $datos2,
        ];
           
        $pdf = PDF::loadView('tb-carre-materia.hoja_designaciones_docentes', $data);     
        return $pdf->download('Boleta_imprimir_memo_doc.pdf');
          
    }
    public function funcion_memorandum_docentes(request $request)
    {
        $datos2 = vista_memorandum_docentes::get()->where('id_doc','=',$request->id_doc,'AND','id_carre','=',$request->id_car,'AND','id_materia','=',$request->id_mat);
        $datos = vista_memorandum_docentes::get();

        return view('tb-docente.memorandum_doc', compact('datos','datos2'));
       
    }
    
    //Notas
    public function por_id_docente(request $request)
    {
        $DATOS=auth()->user();
        $id= $DATOS->id_tb;
        $lista = vista_nota::get()->where('id_asig_mat',$request->id_asig_mat);
        return view('tb-docente.lista_nota_est', compact('lista'));
    }     
    public function por_id_pdf(request $request)
    {
        $user = TbGestione::get()->last();
        $datos = vista_nota::get()->where('id_doc','=',$request->id);
        $datos2 = vista_nota::limit(1)->where('id_doc','=',$request->id)->get();
        $datos3 = vista_obs_notas::where('id_asig_mat','=',$request->id_asig_mat)->get();

        // $consulta = Modelo::select("rol")->latest()->first();       
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
            'datos2'=> $datos2,
            'datos3'=> $datos3,

        ];           
        $pdf = PDF::loadView('notaestudiante2.hoja_control_de_notas', $data);    
        return $pdf->download('control_de_notas_imprimir.pdf');
          
    }
    


}
