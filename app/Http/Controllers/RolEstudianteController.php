<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbGestione;
use App\Models\vista_mat_estudiantes;
use App\Models\vista_mat_nota_estudiantes;


class RolEstudianteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    { 
        $DATOS=auth()->user();
        $id= $DATOS->id_tb;
        // $user = TbGestione::get()->last();
        // $vista = vista_mat_estudiantes::get()->where('id_gestion',$user->id_gestion);
        $vista = vista_mat_estudiantes::get()->where('id_est','=',$id);
        $vista2 = vista_mat_estudiantes::get()->where('id_est','=',$id);
        return view('tb-estudiante.v_estudiante', compact('vista','vista2'));           
    }
    public function index_calificaciones()
    {
        $DATOS=auth()->user();
        $id= $DATOS->id_tb;
        // $user = TbGestione::get()->last();        
        $datos = vista_mat_nota_estudiantes::get()->where('id_est','=',$id);  
        return view('tb-estudiante.vistanota_estudiante', compact('datos'));
    }

}
