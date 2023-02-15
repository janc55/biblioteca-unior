<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_estudiantes;

class EstudiantesController extends Controller
{
    //
    public function index()
    {
        $tabla = tb_estudiantes::paginate();
        return view('estudiantes.index', compact('tabla'))->with('i', (request()->input('page', 1) - 1) * $tabla->perPage());
    }
}
