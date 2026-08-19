<?php

namespace App\Http\Controllers;

use App\Models\TbGestione;
use Illuminate\Http\Request;

/**
 * Class TbGestioneController
 * @package App\Http\Controllers
 */
class TbGestioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbGestione = TbGestione::paginate();

        return view('tb-gestione.index', compact('tbGestione'))
            ->with('i', (request()->input('page', 1) - 1) * $tbGestione->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbGestione = new TbGestione();
        return view('tb-gestione.create', compact('tbGestione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbGestione::$rules);

        $tbGestione = TbGestione::create($request->all());

        return redirect()->route('gestiones.index')
            ->with('success', 'TbGestione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbGestione = TbGestione::find($id);

        return view('tb-gestione.show', compact('tbGestione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbGestione = TbGestione::find($id);

        return view('tb-gestione.edit', compact('tbGestione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbGestione $tbGestione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbGestione $tbGestione)
    {
        // request()->validate(TbGestione::$rules);

        $Gestion = TbGestione::find($request->id_gestion);
        $Gestion->update($request->all());

        return redirect()->route('gestiones.index')
            ->with('success', 'TbGestione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbGestione = TbGestione::find($id)->delete();

        return redirect()->route('gestiones.index')
            ->with('success', 'TbGestione deleted successfully');
    }
}
