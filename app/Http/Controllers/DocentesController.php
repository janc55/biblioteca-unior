<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_docentes;


class DocentesController extends Controller
{
    //
    public function index()
    {
        $tabla = tb_docentes::paginate();
        return view('docentes.index', compact('tabla'))->with('i', (request()->input('page', 1) - 1) * $tabla->perPage());
    }
}
