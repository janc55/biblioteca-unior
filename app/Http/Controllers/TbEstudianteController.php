<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TbEstudiante;
use App\Models\tb_docentes;

use App\Models\vista_est_ci_carrs;
use App\Models\TbCarrera;
use App\Models\Tbplane;
use App\Models\TbEstCarr;
/**
 * Class TbEstudianteController
 * @package App\Http\Controllers
 */
class TbEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tbEstudiantes = TbEstudiante::paginate();

    //     return view('tb-estudiante.index', compact('tbEstudiantes'))
    //         ->with('i', (request()->input('page', 1) - 1) * $tbEstudiantes->perPage());
    // }

    public function index()
    {
        $tbEstudiantes = vista_est_ci_carrs::paginate();

        return view('tb-estudiante.index', compact('tbEstudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbEstudiante = new TbEstudiante();
     

        $tbCarrera = TbCarrera::get();
        $tbEstudiante = TbEstudiante::get();
        $tbplane = Tbplane::get();
        return view('tb-estudiante.create', compact('tbEstudiante'), compact('tbCarrera'),compact('tbplane'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 
        $est =TbEstudiante::create([
            'nombre_est'       => $request->nombre_est,
            'ape_p_est'         => $request->ape_p_est,
            'ape_m_est'         => $request->ape_m_est,
            'ci_est'           => $request->ci_est,
            'fec_nac_est'         => $request->fec_nac_est,
            'tel_dom_est'         => $request->tel_dom_est,
            'dir_est'            => $request->dir_est,
            'cel_est'            => $request->cel_est,
                        
]);

TbEstCarr::create([
    'id_est'       => $est ->id,
    'id_carre'         => $request->id_c,
    'id_turno'         => $request->id_turno,
    'id_pl'           => $request->id_plan,
    
                
]);

        return redirect()->route('estudiantes.index')
            ->with('success', $est ->id_est);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbEstudiante = TbEstudiante::find($id);

        return view('tb-estudiante.show', compact('tbEstudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbEstudiante = TbEstudiante::find($id);

        return view('tb-estudiante.edit', compact('tbEstudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbEstudiante $tbEstudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbEstudiante $tbEstudiante)
    {
        request()->validate(TbEstudiante::$rules);

        $tbEstudiante->update($request->all());

        return redirect()->route('tb-estudiantes.index')
            ->with('success', 'TbEstudiante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbEstudiante = TbEstudiante::find($id)->delete();

        return redirect()->route('tb-estudiantes.index')
            ->with('success', 'TbEstudiante deleted successfully');
    }

    public function docente_lista()
    {

        $lista = tb_docentes::get();
        return view('tb-asignacion-mat.lista_docentes', compact('lista'));
    }
}
