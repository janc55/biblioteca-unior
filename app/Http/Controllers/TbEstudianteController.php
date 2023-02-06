<?php

namespace App\Http\Controllers;

use App\Models\TbEstudiante;
use App\Models\VistaNotaApro;
use Illuminate\Http\Request;

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
    public function index()
    {
        $tbEstudiantes = VistaNotaApro::where('gestion_asig_mat','2008')->paginate();

        return view('tb-estudiante.index', compact('tbEstudiantes'))
            ->with('i', (request()->input('page', 1) - 1) * $tbEstudiantes->perPage());
    }

    // public function index()
    // {
    //     $tbEstudiantes = TbEstudiante::paginate();

    //     return view('tb-estudiante.index', compact('tbEstudiantes'))
    //         ->with('i', (request()->input('page', 1) - 1) * $tbEstudiantes->perPage());
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbEstudiante = new TbEstudiante();
        return view('tb-estudiante.create', compact('tbEstudiante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbEstudiante::$rules);

        $tbEstudiante = TbEstudiante::create($request->all());

        return redirect()->route('tb-estudiantes.index')
            ->with('success', 'TbEstudiante created successfully.');
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
}
