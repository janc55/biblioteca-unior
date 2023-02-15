<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vista_mat_nota_estudiantes;

class EstudiantenotasController extends Controller
{
    //
    public function index()
    {
        $vista = vista_mat_nota_estudiantes::get()->where('gestion_asig_mat','2008');
        return view('notaestudiante2.index', compact('vista'));
     
    }
}
