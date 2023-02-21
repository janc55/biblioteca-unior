<?php

namespace App\Http\Controllers;

use App\Models\TbBoleta;
use Illuminate\Http\Request;

/**
 * Class TbBoletaController
 * @package App\Http\Controllers
 */
class TbBoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbBoleta = TbBoleta::paginate();

        return view('tb-boleta.index', compact('tbBoleta'))
            ->with('i', (request()->input('page', 1) - 1) * $tbBoleta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbBoleta = new TbBoleta();
        return view('tb-boleta.create', compact('tbBoleta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbBoleta::$rules);

        $tbBoleta = TbBoleta::create($request->all());

        return redirect()->route('tb-boletas.index')
            ->with('success', 'TbBoleta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbBoleta = TbBoleta::find($id);

        return view('tb-boleta.show', compact('tbBoleta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbBoleta = TbBoleta::find($id);

        return view('tb-boleta.edit', compact('tbBoleta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbBoleta $tbBoleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbBoleta $tbBoleta)
    {
        request()->validate(TbBoleta::$rules);

        $tbBoleta->update($request->all());

        return redirect()->route('tb-boletas.index')
            ->with('success', 'TbBoleta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbBoleta = TbBoleta::find($id)->delete();

        return redirect()->route('tb-boletas.index')
            ->with('success', 'TbBoleta deleted successfully');
    }
}
