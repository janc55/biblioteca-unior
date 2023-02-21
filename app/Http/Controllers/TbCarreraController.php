<?php

namespace App\Http\Controllers;

use App\Models\TbCarrera;
use Illuminate\Http\Request;

/**
 * Class TbCarreraController
 * @package App\Http\Controllers
 */
class TbCarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbCarrera = TbCarrera::paginate();

        return view('tb-carrera.index', compact('tbCarrera'))
            ->with('i', (request()->input('page', 1) - 1) * $tbCarrera->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbCarrera = new TbCarrera();
        return view('tb-carrera.create', compact('tbCarrera'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbCarrera::$rules);

        $tbCarrera = TbCarrera::create($request->all());

        return redirect()->route('tb-carreras.index')
            ->with('success', 'TbCarrera created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbCarrera = TbCarrera::find($id);

        return view('tb-carrera.show', compact('tbCarrera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbCarrera = TbCarrera::find($id);

        return view('tb-carrera.edit', compact('tbCarrera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbCarrera $tbCarrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbCarrera $tbCarrera)
    {
        request()->validate(TbCarrera::$rules);

        $tbCarrera->update($request->all());

        return redirect()->route('tb-carreras.index')
            ->with('success', 'TbCarrera updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbCarrera = TbCarrera::find($id)->delete();

        return redirect()->route('tb-carreras.index')
            ->with('success', 'TbCarrera deleted successfully');
    }
}
