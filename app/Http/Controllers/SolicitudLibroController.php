<?php

namespace App\Http\Controllers;

use App\Models\SolicitudLibro;
use Illuminate\Http\Request;

/**
 * Class SolicitudLibroController
 * @package App\Http\Controllers
 */
class SolicitudLibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudLibros = SolicitudLibro::paginate();

        return view('solicitud-libro.index', compact('solicitudLibros'))
            ->with('i', (request()->input('page', 1) - 1) * $solicitudLibros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitudLibro = new SolicitudLibro();
        return view('solicitud-libro.create', compact('solicitudLibro'));
    }


    public function create_sobi()
    {
        $solicitudLibro = new SolicitudLibro();
        return view('solicitud-libro.createso', compact('solicitudLibro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SolicitudLibro::$rules);

        $solicitudLibro = SolicitudLibro::create($request->all());

        return redirect()->route('solicitud-libros.index')
            ->with('success', 'SolicitudLibro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitudLibro = SolicitudLibro::find($id);

        return view('solicitud-libro.show', compact('solicitudLibro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitudLibro = SolicitudLibro::find($id);

        return view('solicitud-libro.edit', compact('solicitudLibro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SolicitudLibro $solicitudLibro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitudLibro $solicitudLibro)
    {
        request()->validate(SolicitudLibro::$rules);

        $solicitudLibro->update($request->all());

        return redirect()->route('solicitud-libros.index')
            ->with('success', 'SolicitudLibro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitudLibro = SolicitudLibro::find($id)->delete();

        return redirect()->route('solicitud-libros.index')
            ->with('success', 'SolicitudLibro deleted successfully');
    }
}
