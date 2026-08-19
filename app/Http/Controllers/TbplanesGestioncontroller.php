<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_planesgestiones;

class TbplanesGestioncontroller extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tb_planesgestiones = tb_planesgestiones::paginate();

        return view('tb_planesgestiones.index', compact('tb_planesgestiones'))
            ->with('i', (request()->input('page', 1) - 1) * $tb_planesgestiones->perPage());
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tb_planesgestiones = new tb_planesgestiones();
        return view('tb_planesgestiones.create', compact('tb_planesgestiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(tb_planesgestiones::$rules);

        $tb_planesgestiones = tb_planesgestiones::create($request->all());

        return redirect()->route('planegest.index')
            ->with('success', 'tb_planesgestiones created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tb_planesgestiones = tb_planesgestiones::find($id);

        return view('tb_planesgestiones.show', compact('tb_planesgestiones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tb_planesgestiones = tb_planesgestiones::find($id);

        return view('tb_planesgestiones.edit', compact('tb_planesgestiones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  tb_planesgestiones $tb_planesgestiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_planesgestiones $tb_planesgestiones)
    {
        request()->validate(tb_planesgestiones::$rules);

        $tb_planesgestiones->update($request->all());

        return redirect()->route('planegest.index')
            ->with('success', 'tb_planesgestiones updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tb_planesgestiones = tb_planes::find($id)->delete();

        return redirect()->route('planegest.index')
            ->with('success', 'tb_planesgestiones deleted successfully');
    }
}
