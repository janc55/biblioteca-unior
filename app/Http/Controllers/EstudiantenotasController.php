<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vista_mat_nota_estudiantes;
use App\Models\vista_mat_estudiantes;
use App\Models\VistaNotaApro;

use App\Models\TbGestione;

// require 'vendor/autoload.php';
// use Luecano\NumeroALetras\NumeroALetras;
use PDF;
class EstudiantenotasController extends Controller
{
    //
    public function index()
    {
        $user = TbGestione::get()->last();
        // $vista = vista_mat_nota_estudiantes::get()->where('anio_gestion','2008');
        // $vista = vista_mat_nota_estudiantes::get()->where('id_gestion',$user->id_gestion);

        $vista = vista_mat_nota_estudiantes::get();

        return view('notaestudiante2.index', compact('vista'));

    }
    public function index_calificaciones(request $request)
    {
        // $user = TbGestione::get()->last();        
        $datos = vista_mat_nota_estudiantes::get()->where('id_est','=',$request->id_est);  
        return view('notaestudiante2.nota_calificaciones_est', compact('datos'));
    }

    public function funcion_pdf_nota_est(request $request)
    { 
        $datos = vista_mat_nota_estudiantes::get()->where('id_est','=',$request->id_est);  
        // $datos2 = vista_mat_nota_estudiantes::limit(1)->get()->where('id_est','=',$request->id_est);
        $nombre=$request->nombre;
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
            // 'datos2'=> $datos2,
            'nombre'=> $nombre,

        ];

        $pdf = PDF::loadView('notaestudiante2.hoja_nota_estudiante', $data);

        return $pdf->download('Nota_est_imprimir.pdf');

    }

    

    public function crear_nota_est(Request $request)
    {
        $lista = new vista_mat_nota_estudiantes();
        $tbGestion = TbGestione::get();

        $id_est=$request->id_est;
        $dato=$request->dato;


        return view('notaestudiante2.create',compact('id_est'), compact('dato'), compact('lista'));
    }

    public function funcion_letras()
    {
        $numeros=array(100,150,200,300,160);

    $salida = '<h3> Salida de numeros (lowercase) </h3>';
    for ($i=0; $i< count($numeros) ; $i++)
    {
        $letras=NumeroALetras::convertir($numeros[$i], 'Pesos',false);
        $numeros=number_format($numeros[$i],2,',','.');
        $salida='<br> Numero: '.$numero. '<br> LETRAS:'.$letras;
    }
    $salida = '<h3> Salida de numeros (lowercase) </h3>';
    for ($i=0; $i< count($numeros) ; $i++)
    {
        $letras=NumeroALetras::convertir($numeros[$i], 'Pesos');
        $numeros=number_format($numeros[$i],2,',','.');
        $salida='<br> Numero: '.$numero. '<br> LETRAS:'.$letras;
    }
 
return $salida;
    }
    

}
