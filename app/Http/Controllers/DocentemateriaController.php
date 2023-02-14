<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vista_mat_docentes;

class DocentemateriaController extends Controller
{
    //
    public function index()
    {
        $vista = vista_mat_docentes::get()->where('gestion_asig_mat','2008')->where('cod_doc','308');
        return view('docentemateria.index', compact('vista'));
     
    }
}
