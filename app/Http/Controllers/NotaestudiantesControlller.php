<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vista_mat_estudiantes;
class NotaestudiantesControlller extends Controller
{
    //
    public function index()
    {
        $vista = vista_mat_estudiantes::paginate();
        return view('notasestudiante.index', compact('vista'))
            ->with('i', (request()->input('page', 1) - 1) * $vista->perPage());


            
    }
}
