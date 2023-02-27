<?php

namespace App\Http\Controllers;

use App\Models\TbAsignacionMatEst;
use Illuminate\Http\Request;
use App\Models\vista_est_ci_carrs;
/**
 * Class TbAsignacionMatEstController
 * @package App\Http\Controllers
 */
class TbAsignacionMatEstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbAsignacionMatEst = TbAsignacionMatEst::paginate();

        return view('tb-asignacion-mat-est.index', compact('tbAsignacionMatEst'))
            ->with('i', (request()->input('page', 1) - 1) * $tbAsignacionMatEst->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbAsignacionMatEst = new TbAsignacionMatEst();
        return view('tb-asignacion-mat-est.create', compact('tbAsignacionMatEst'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbAsignacionMatEst::$rules);

        $tbAsignacionMatEst = TbAsignacionMatEst::create($request->all());

        return redirect()->route('asignacionest.index')
            ->with('success', 'TbAsignacionMatEst created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbAsignacionMatEst = TbAsignacionMatEst::find($id);

        return view('tb-asignacion-mat-est.show', compact('tbAsignacionMatEst'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbAsignacionMatEst = TbAsignacionMatEst::find($id);

        return view('tb-asignacion-mat-est.edit', compact('tbAsignacionMatEst'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbAsignacionMatEst $tbAsignacionMatEst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbAsignacionMatEst $tbAsignacionMatEst)
    {
        request()->validate(TbAsignacionMatEst::$rules);

        $tbAsignacionMatEst->update($request->all());

        return redirect()->route('asignacionest.index')
            ->with('success', 'TbAsignacionMatEst updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbAsignacionMatEst = TbAsignacionMatEst::find($id)->delete();

        return redirect()->route('asignacionest.index')
            ->with('success', 'TbAsignacionMatEst deleted successfully');
    }

    public function estudiante_materia_funcion(Request $request)
    {


        TbAsignacionMatEst::create([
                        'id_asig_mat'       => $request->id_asig,
                        'id_est'            => $request->id_est,
                      
        ]);

       // TbAsignacionMat::insert('insert into tb_asignacion_mats (id_materia, id_doc, id_carre,id_turno,id_gestion,paralelo_asig_mat) values (?,?,?,?,?,?)', [$request->id_mat,$request->id_doc,1,$request->id_turno,4,$request->id_materia]);
      
        echo $request->id_asig;
        $lista = tb_estudiantes::get();
        return view('tb-asignacion-mat-est.lista_estudiantes', compact('lista')); 

    }
    public function funcion_est_ci_carrera()
    {
        $lista = vista_est_ci_carrs::paginate();
        return view('tb-asignacion-mat-est.lista_estudiantes', compact('lista'));
          
    }
}
