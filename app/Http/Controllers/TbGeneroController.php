<?php

namespace App\Http\Controllers;

use App\Models\TbGenero;
use Illuminate\Http\Request;

/**
 * Class TbGeneroController
 * @package App\Http\Controllers
 */
class TbGeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbGeneros = TbGenero::paginate();

        return view('tb-genero.index', compact('tbGeneros'))
            ->with('i', (request()->input('page', 1) - 1) * $tbGeneros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbGenero = new TbGenero();
        return view('tb-genero.create', compact('tbGenero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbGenero::$rules);

        $tbGenero = TbGenero::create($request->all());

        return redirect()->route('tb-generos.index')
            ->with('success', 'TbGenero created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbGenero = TbGenero::find($id);

        return view('tb-genero.show', compact('tbGenero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbGenero = TbGenero::find($id);

        return view('tb-genero.edit', compact('tbGenero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbGenero $tbGenero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbGenero $tbGenero)
    {
        request()->validate(TbGenero::$rules);

        $tbGenero->update($request->all());

        return redirect()->route('tb-generos.index')
            ->with('success', 'TbGenero updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbGenero = TbGenero::find($id)->delete();

        return redirect()->route('tb-generos.index')
            ->with('success', 'TbGenero deleted successfully');
    }
}
