<?php

namespace App\Http\Controllers;

use App\Models\TbAsignacionMat;
use Illuminate\Http\Request;
use App\Models\tb_docentes;
use App\Models\tb_materias;
use App\Models\tb_estudiantes;

/**
 * Class TbAsignacionMatController
 * @package App\Http\Controllers
 */
class TbAsignacionMatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbAsignacionMats = TbAsignacionMat::paginate();

        return view('tb-asignacion-mat.index', compact('tbAsignacionMats'))
            ->with('i', (request()->input('page', 1) - 1) * $tbAsignacionMats->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbAsignacionMat = new TbAsignacionMat();
        return view('tb-asignacion-mat.create', compact('tbAsignacionMat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbAsignacionMat::$rules);

        $tbAsignacionMat = TbAsignacionMat::create($request->all());

        return redirect()->route('tb-asignacion-mats.index')
            ->with('success', 'TbAsignacionMat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lista = tb_docentes::get();
        return view('tb-asignacion-mat.lista_docentes', compact('lista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbAsignacionMat = TbAsignacionMat::find($id);

        return view('tb-asignacion-mat.edit', compact('tbAsignacionMat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbAsignacionMat $tbAsignacionMat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbAsignacionMat $tbAsignacionMat)
    {
        request()->validate(TbAsignacionMat::$rules);

        $tbAsignacionMat->update($request->all());

        return redirect()->route('tb-asignacion-mats.index')
            ->with('success', 'TbAsignacionMat updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbAsignacionMat = TbAsignacionMat::find($id)->delete();

        return redirect()->route('tb-asignacion-mats.index')
            ->with('success', 'TbAsignacionMat deleted successfully');
    }

    // Lista docentes
    public function docente_lista()
    {

        $lista = tb_docentes::get();
        return view('tb-asignacion-mat.lista_docentes', compact('lista'));
    }
    // Lista materias
    public function funcion_mat($id)
    {

        $lista = tb_materias::get();
        $id_rec = $id;
        
        return view('tb-asignacion-mat.nomina_materias', compact('lista'),compact('id_rec'));
    }
    public function nom_est()
    {

        $lista = tb_estudiantes::get();
        return view('asignacion-mat.nomina_estudiantes', compact('lista'));
    }

    //Funcion de inserción de docente y materias
 
    
    public function docente_materia_funcion(Request $request)
    {


        TbAsignacionMat::create([
                        'id_materia'       => $request->id_mat,
                        'id_doc'            => $request->id_doc,
                        'id_carre'          => 1,
                        
                        'id_turno'          => $request->id_turno,
                        'id_gestion'        => 4,
                        'paralelo_asig_mat' => $request->pr,
                        'tipo_asig_mat'     => NULL,
                        'obs_asig_mat'      => NULL,
        ]);

       // TbAsignacionMat::insert('insert into tb_asignacion_mats (id_materia, id_doc, id_carre,id_turno,id_gestion,paralelo_asig_mat) values (?,?,?,?,?,?)', [$request->id_mat,$request->id_doc,1,$request->id_turno,4,$request->id_materia]);
      
        echo $request->id_mat;
        $lista = tb_docentes::get();
        return view('tb-asignacion-mat.lista_docentes', compact('lista')); 

    }

}
