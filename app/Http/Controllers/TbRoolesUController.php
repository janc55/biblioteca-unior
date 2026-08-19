<?php

namespace App\Http\Controllers;

use App\Models\TbRoolesU;
use Illuminate\Http\Request;

/**
 * Class TbRoolesUController
 * @package App\Http\Controllers
 */
class TbRoolesUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbRoolesUs = TbRoolesU::paginate();

        return view('tb-rooles-u.index', compact('tbRoolesUs'))
            ->with('i', (request()->input('page', 1) - 1) * $tbRoolesUs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbRoolesU = new TbRoolesU();
        return view('tb-rooles-u.create', compact('tbRoolesU'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //   request()->validate(TbRoolesU::$rules);
     $rool =
     ($request->solicitar !== null ? "true" : "false") . "|" .
     ($request->chat_inteligente !== null ? "true" : "false") . "|" .
     ($request->biblioteca_virtual !== null ? "true" : "false") . "|" .
     ($request->libros_digitales !== null ? "true" : "false") . "|" .
     ($request->trabajos_grado !== null ? "true" : "false") . "|" .
     ($request->solicitar_trabajos_grado !== null ? "true" : "false") . "|" .
     ($request->form_solicitud1 !== null ? "true" : "false") . "|" .
     ($request->form_solicitud2 !== null ? "true" : "false") . "|" .
     ($request->historial !== null ? "true" : "false") . "|" .
     ($request->registrar !== null ? "true" : "false") . "|" .
     ($request->presentaciones !== null ? "true" : "false") . "|" .
     ($request->atencion !== null ? "true" : "false") . "|" .
     ($request->registrar_bibliotecas !== null ? "true" : "false") . "|" .
     ($request->noticias !== null ? "true" : "false") . "|" .
     ($request->solicitud_directores !== null ? "true" : "false") . "|" .
     ($request->graficos_reportes !== null ? "true" : "false") . "|" .
     ($request->usuario !== null ? "true" : "false") . "|" .
     ($request->roles !== null ? "true" : "false") . "|" .
     ($request->inicioadm !== null ? "true" : "false");


     
        $tbRoolesU = TbRoolesU::create([
            'rool'    => $request->rool,
            'permisos'        =>  $rool,
        
    ]);

        return redirect()->route('tb-rooles-us.index')
            ->with('success', 'TbRoolesU created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbRoolesU = TbRoolesU::find($id);

        return view('tb-rooles-u.show', compact('tbRoolesU'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbRoolesU = TbRoolesU::find($id);


        return view('tb-rooles-u.edit', compact('tbRoolesU'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbRoolesU $tbRoolesU
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbRoolesU $tbRoolesU)
    {
        $rool =
        ($request->solicitar !== null ? "true" : "false") . "|" .
        ($request->chat_inteligente !== null ? "true" : "false") . "|" .
        ($request->biblioteca_virtual !== null ? "true" : "false") . "|" .
        ($request->libros_digitales !== null ? "true" : "false") . "|" .
        ($request->trabajos_grado !== null ? "true" : "false") . "|" .
        ($request->solicitar_trabajos_grado !== null ? "true" : "false") . "|" .
        ($request->form_solicitud1 !== null ? "true" : "false") . "|" .
        ($request->form_solicitud2 !== null ? "true" : "false") . "|" .
        ($request->historial !== null ? "true" : "false") . "|" .
        ($request->registrar !== null ? "true" : "false") . "|" .
        ($request->presentaciones !== null ? "true" : "false") . "|" .
        ($request->atencion !== null ? "true" : "false") . "|" .
        ($request->registrar_bibliotecas !== null ? "true" : "false") . "|" .
        ($request->noticias !== null ? "true" : "false") . "|" .
        ($request->solicitud_directores !== null ? "true" : "false") . "|" .
        ($request->graficos_reportes !== null ? "true" : "false") . "|" .
        ($request->usuario !== null ? "true" : "false") . "|" .
        ($request->roles !== null ? "true" : "false") . "|" .
        ($request->inicioadm !== null ? "true" : "false");
        $tbRoolesU->update([
            'rool'    => $request->rool,
            'permisos'        =>  $rool,
        
    ]);

        return redirect()->route('tb-rooles-us.index')
            ->with('success', 'TbRoolesU updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbRoolesU = TbRoolesU::find($id)->delete();

        return redirect()->route('tb-rooles-us.index')
            ->with('success', 'TbRoolesU deleted successfully');
    }
}
