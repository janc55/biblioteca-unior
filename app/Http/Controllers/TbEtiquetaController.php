<?php

namespace App\Http\Controllers;

use App\Models\TbEtiqueta;
use Illuminate\Http\Request;

/**
 * Class TbEtiquetaController
 * @package App\Http\Controllers
 */
class TbEtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbEtiquetas = TbEtiqueta::paginate();

        return view('tb-etiqueta.index', compact('tbEtiquetas'))
            ->with('i', (request()->input('page', 1) - 1) * $tbEtiquetas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbEtiqueta = new TbEtiqueta();
        return view('tb-etiqueta.create', compact('tbEtiqueta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbEtiqueta::$rules);

        $tbEtiqueta = TbEtiqueta::create($request->all());

        return redirect()->route('tb-etiquetas.index')
            ->with('success', 'TbEtiqueta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbEtiqueta = TbEtiqueta::find($id);

        return view('tb-etiqueta.show', compact('tbEtiqueta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbEtiqueta = TbEtiqueta::find($id);

        return view('tb-etiqueta.edit', compact('tbEtiqueta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbEtiqueta $tbEtiqueta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbEtiqueta $tbEtiqueta)
    {
        request()->validate(TbEtiqueta::$rules);

        $tbEtiqueta->update($request->all());

        return redirect()->route('tb-etiquetas.index')
            ->with('success', 'TbEtiqueta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbEtiqueta = TbEtiqueta::find($id)->delete();

        return redirect()->route('tb-etiquetas.index')
            ->with('success', 'TbEtiqueta deleted successfully');
    }
}
