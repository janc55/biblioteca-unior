<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vista_mat_nota_estudiantes;

class EstudiantenotasController extends Controller
{
    //
    public function index()
    {
        // $vista = vista_mat_nota_estudiantes::get()->where('anio_gestion','2008');
        $vista = vista_mat_nota_estudiantes::get()->where('anio_gestion','2022');

        return view('notaestudiante2.index', compact('vista'));
     
    }
}
