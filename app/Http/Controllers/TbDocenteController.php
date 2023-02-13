<?php

namespace App\Http\Controllers;

use App\Models\TbDocente;
use Illuminate\Http\Request;

/**
 * Class TbDocenteController
 * @package App\Http\Controllers
 */
class TbDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbDocentes = TbDocente::paginate();

        return view('tb-docente.index', compact('tbDocentes'))
            ->with('i', (request()->input('page', 1) - 1) * $tbDocentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbDocente = new TbDocente();
        return view('tb-docentes.create', compact('tbDocente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbDocente::$rules);

        $tbDocente = TbDocente::create($request->all());

        return redirect()->route('tb-docentes.index')
            ->with('success', 'TbDocente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbDocente = TbDocente::find($id);

        return view('tb-docente.show', compact('tbDocente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbDocente = TbDocente::find($id);

        return view('tb-docente.edit', compact('tbDocente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbDocente $tbDocente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbDocente $tbDocente)
    {
        request()->validate(TbDocente::$rules);

        $tbDocente->update($request->all());

        return redirect()->route('tb-docentes.index')
            ->with('success', 'TbDocente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbDocente = TbDocente::find($id)->delete();

        return redirect()->route('tb-docente.index')
            ->with('success', 'TbDocente deleted successfully');
    }
}
