<?php

namespace App\Http\Controllers;

use App\Models\TbCarreMateria;
use App\Models\TbMateria;
use App\Models\TbCategoriaMat;
use App\Models\tb_planesgestiones;
use App\Models\TbCarrera;
use App\Models\TbSemestre;
use App\Models\vista_carre_materias;
use App\Models\vista_plan_estudios;
use App\Models\vista_historial_academico_c; 
use App\Models\vista_memorandum_docentes;
use Illuminate\Http\Request;
use PDF;
/**
 * Class TbCarreMateriaController
 * @package App\Http\Controllers
 */
class TbCarreMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbCarreMateria = vista_carre_materias::paginate();

        return view('tb-carre-materia.index', compact('tbCarreMateria'))
            ->with('i', (request()->input('page', 1) - 1) * $tbCarreMateria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function create()
    {
        $tbCarreMateria = new TbCarreMateria();
        $tbMateria = TbMateria::get();  
        $tbCarrera =  TbCarrera::get(); 
        $tbSemestre = TbSemestre::get(); 
        $tb_planesgestiones = tb_planesgestiones::get(); 
        return view('tb-carre-materia.create', compact('tbCarreMateria','tbMateria','tbCarrera','tbSemestre','tb_planesgestiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        // request()->validate(TbCarreMateria::$rules); 

        $tbMateria = TbMateria::get();  
        $tbCarrera =  TbCarrera::get(); 
        $tbSemestre = TbSemestre::get(); 
        $tb_planesgestiones = tb_planesgestiones::get(); 

        $tbCarreMateria = TbCarreMateria::create([
            'id_carre'       => $request->id_carre,
            'id_materia'     => $request->id_materia,
            'id_sem'         => $request->id_sem,
            'cre_materia'    => $request->cre_materia,
            'ht_materia'     => $request->ht_materia,
            'hp_materia'     => $request->hp_materia,
            'tse_materia'    => $request->tse_materia,
            'tsm_materia'    => 0,
            'id_cat_mat'     => 1,
            'are_materia'    => 0,
            'ord_materia'    => 0,
            'obs_materia'    => 'Ninguna',
            'id_planE'       => $request->id_planE,           
    ]);  
        return redirect()->route('carrematerias.index')
            ->with('success', 'TbCarreMateria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbCarreMateria = TbCarreMateria::find($id);

        return view('tb-carre-materia.show', compact('tbCarreMateria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbCarreMateria = TbCarreMateria::find($id);
        $tbMateria =  TbMateria::get(); 
        $tbCarrera =  TbCarrera::get();
        $tbSemestre = TbSemestre::get();
        $tb_planesgestiones = tb_planesgestiones::get();
        return view('tb-carre-materia.edit', compact('tbCarreMateria','tbMateria','tbCarrera','tbSemestre','tb_planesgestiones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbCarreMateria $tbCarreMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbCarreMateria $tbCarreMateria)
    {
        request()->validate(TbCarreMateria::$rules);
        $tbCarreMateria->update($request->all());
        return redirect()->route('carrematerias.index')
            ->with('success', 'TbCarreMateria updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbCarreMateria = TbCarreMateria::find($id)->delete();
        return redirect()->route('carrematerias.index')
            ->with('success', 'TbCarreMateria deleted successfully');
    }

    public function funcion_vista_carre_materia()
    {
        $lista = vista_carre_materias::paginate();
        $TbCategoriaMat = TbCategoriaMat::paginate();
        $tb_planesgestiones = tb_planesgestiones::paginate();
        $TbCarrera = TbCarrera::paginate();
        $TbSemestre = TbSemestre::paginate();
        $TbMateria = TbMateria::paginate();

        return view('tb-carre-materia.lista_carre_materia', compact('lista','TbCategoriaMat','tb_planesgestiones','TbCarrera','TbSemestre','TbMateria'));
           
    }
    public function funcion_vista_carre_materia_asignar_mat()
    {
        $lista = vista_carre_materias::paginate();
        $TbCategoriaMat = TbCategoriaMat::paginate();
        $tb_planesgestiones = tb_planesgestiones::paginate();
        $TbCarrera = TbCarrera::paginate();
        $TbSemestre = TbSemestre::paginate();
        $TbMateria = TbMateria::paginate();
        $TbCarreMateria = TbCarreMateria::paginate();
        return view('tb-carre-materia.materia_plan_asignar', compact('lista','TbCategoriaMat','tb_planesgestiones','TbCarrera','TbSemestre','TbMateria','TbCarreMateria'));
           
    }

    public function funcion_insertar_datos(Request $request)
    {       
        $lista = TbCarreMateria::paginate();        
          TbCarreMateria::create([
            'id_carre'       => $request->id_carre,
            'id_materia'     => $request->id_materia,
            'id_sem'         => $request->id_sem,
            'cre_materia'    => $request->cre_materia,
            'ht_materia'     => $request->ht_materia,
            'hp_materia'     => $request->hp_materia,
            'tsm_materia'    => $request->tsm_materia,
            'id_cat_mat'     => 1,
            'are_materia'    => 0,
            'ord_materia'    => 0,
            'obs_materia'    => 'Ninguna',
            'id_planE'       => $request->id_planE,           
            ]);              
            $lista = TbMateria::get();
            return view('tb-carre-materia.materia_plan_asignar', compact('lista'));   
    }
    // 
    public function funcion_pdf_carre_materia()
    {
        $datos = vista_carre_materias::get();
        // $consulta = Modelo::select("rol")->latest()->first();       
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
        ];           
        $pdf = PDF::loadView('tb-carre-materia.hoja_materia_plan_asignar', $data);     
        return $pdf->download('Boleta_imprimir.pdf');          
    }
    
    //plan de estudios derecho
    public function funcion_plan_de_estudios()
    {
        $datos2 = vista_plan_estudios::limit(1)->get()->where('id_carre','=','1');
        $datos = vista_plan_estudios::get();
        return view('tb-carre-materia.plan_de_estudios', compact('datos','datos2'));       
    }

    public function funcion_plan_de_estudios_pdf()
    {
        $datos2 = vista_plan_estudios::limit(1)->get()->where('id_carre','=','1');
        $datos = vista_plan_estudios::get();
        // $consulta = Modelo::select("rol")->latest()->first();       
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
            'datos2'=> $datos2,
        ];           
        $pdf = PDF::loadView('tb-carre-materia.hoja_plan_de_estudios', $data);     
        return $pdf->download('Boleta_imprimir_plan_estudios.pdf');          
    }
    public function funcion_historial_academico_c_pdf()
    {
        $datos2 = vista_historial_academico_c::limit(1)->get()->where('id_carre','=','1');
        $datos3 = vista_historial_academico_c::limit(1)->get()->where('id_carre','=','1');
        $datos = vista_historial_academico_c::get()->where('id_carre','=','1');

        // $consulta = Modelo::select("rol")->latest()->first();
       
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
            'datos2'=> $datos2,
            'datos3'=> $datos3,

        ];
        // Hoja Horinzontal       
        $pdf = PDF::loadView('tb-carre-materia.hoja_historial_academico_completo', $data)
                    ->setPaper('letter', 'landscape')->setWarnings(false);   
        return $pdf->download('Boleta_imprimir_historial_academico_c.pdf');
          
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

        return view('tb-carre-materia.designaciones_vista_docentes', compact('datos','datos2'));
       
    }
    

}
