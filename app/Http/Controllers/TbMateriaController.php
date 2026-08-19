<?php

namespace App\Http\Controllers;

use App\Models\TbMateria;
use App\Models\TbCarrera;
use App\Models\TbSemestre;

use Illuminate\Http\Request;

/**
 * Class TbMateriaController
 * @package App\Http\Controllers
 */
class TbMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbMateria = TbMateria::paginate();

        return view('tb-materia.index', compact('tbMateria'))
            ->with('i', (request()->input('page', 1) - 1) * $tbMateria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbMateria = new TbMateria();
        $tbCarrera = new TbCarrera();
        $tbSemestre = new TbSemestre();
        return view('tb-materia.create', compact('tbMateria','tbCarrera','tbSemestre'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbMateria::$rules);

        $tbMateria = TbMateria::create($request->all());
        // $tbCarrera = TbCarrera::create($request->all());
        // $tbSemestre = TbSemestre::create($request->all());

        return redirect()->route('materias.index')
            ->with('success', 'TbMateria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbMateria = TbMateria::find($id);

        return view('tb-materia.show', compact('tbMateria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbMateria = TbMateria::find($id);

        return view('tb-materia.edit', compact('tbMateria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbMateria $tbMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbMateria $tbMateria)
    {
        request()->validate(TbMateria::$rules);

        $tbMateria->update($request->all());

        return redirect()->route('materias.index')
            ->with('success', 'TbMateria updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbMateria = TbMateria::find($id)->delete();

        return redirect()->route('materias.index')
            ->with('success', 'TbMateria deleted successfully');
    }
}
