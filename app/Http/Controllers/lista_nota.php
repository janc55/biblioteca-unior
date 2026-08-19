<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vista_nota;
use App\Models\vista_mat_docentes;
use App\Models\tb_asignacion_mat_ests;
use App\Models\vista_obs_notas;
use App\Models\TbGestione;
use PDF;


class lista_nota extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = TbGestione::get()->last();

        // $lista = vista_nota::get()->where('id_gestion',$user->id_gestion);
       $lista = vista_nota::get();

        return view('lista_nota', compact('lista'));
    }

    public function por_doc(Request $request)
    {

        // echo "Nombre: ".$request->input('nombre')."<br>";
        // echo "Apellido: ".$request->apellido."<br>";
        // echo "Msj: ".request('mensaje')."<br>";
        $user = TbGestione::get()->last();
        //    echo $user->id_gestion;

        // $lista = vista_nota::get()->where('docente',$request->input('nombre'))->where('id_gestion',$user->id_gestion);
        $lista = vista_nota::get()->where('docente',$request->input('nombre'));
        return view('lista_nota', compact('lista'));
    }

    public function por_id($id)
    {
        $lista = vista_nota::get()->where('id_asig_mat',$id);
        return view('lista_nota', compact('lista'));
    }     
    public function por_id_pdf(request $request)
    {
        $user = TbGestione::get()->last();
        $datos = vista_nota::get()->where('id_doc','=',$request->id);
        $datos2 = vista_nota::limit(1)->where('id_doc','=',$request->id)->get();
        $datos3 = vista_obs_notas::get();

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
    public function por_id_nomina_pdf(request $request)
    {
        $user = TbGestione::get()->last();
        $datos = vista_nota::get()->where('id_doc','=',$request->id_doc);
        $datos2 = vista_nota::limit(1)->where('id_doc','=',$request->id_doc)->get();
        $datos3 = vista_obs_notas::get();

        // $consulta = Modelo::select("rol")->latest()->first();       
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
            'datos2'=> $datos2,
            'datos3'=> $datos3,
        ];           
        $pdf = PDF::loadView('notasestudiante.hoja_nomina_est', $data);    
        return $pdf->download('nomina_est_imprimir.pdf');          
    }

    public function nomina_est_id(request $request,$id)
    {
        $lista = vista_nota::get()->where('id_asig_mat',$id);
        // $lista2 = vista_nota::get()->where('id_doc',$request->id_doc);
        return view('nomina_estudiantes', compact('lista')); 
    }

    public function seleccionardocente()
    {
    //    $gestion= TbGestione::get()->where('id_asig_mat',$id);
       $user = TbGestione::get()->last();
    //    echo $user->id_gestion;

        // $vista = vista_mat_docentes::get()->where('id_gestion',$user->id_gestion)->where('cod_doc','129');
        // $vista = vista_mat_docentes::get()->where('cod_doc','129');
        $vista = vista_mat_docentes::get();

        return view('seleccionardocente', compact('vista'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->ajax()) {
            //error_log($request->name);
           // error_log($request->value);
            tb_asignacion_mat_ests::where('id_asig_mat_est',$request->pk)
            ->update([$request->name=>$request->value,]);




            return response()->json(['success' => true]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



        /**
     * Write code for delete
     *
     * @return response()
     */
    public function delete($id)
    {
        $lista = vista_nota::find($id);
        $lista->delete();
        return response()->json(['success' => 'success']);
    }

}
