<?php

namespace App\Http\Controllers;

use App\Models\TbFormMatBio;
use Illuminate\Http\Request;
use App\Models\vista_from_sol_bi;
use PDF;


/**
 * Class TbFormMatBioController
 * @package App\Http\Controllers
 */
class TbFormMatBioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbFormMatBios = TbFormMatBio::paginate();

        return view('tb-form-mat-bio.index', compact('tbFormMatBios'))
            ->with('i', (request()->input('page', 1) - 1) * $tbFormMatBios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbFormMatBio = new TbFormMatBio();
        return view('tb-form-mat-bio.create', compact('tbFormMatBio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbFormMatBio::$rules);

        $tbFormMatBio = TbFormMatBio::create($request->all());

        return redirect()->route('tb-form-mat-bios.index')
            ->with('success', 'TbFormMatBio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbFormMatBio = TbFormMatBio::find($id);

        return view('tb-form-mat-bio.show', compact('tbFormMatBio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbFormMatBio = TbFormMatBio::find($id);

        return view('tb-form-mat-bio.edit', compact('tbFormMatBio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbFormMatBio $tbFormMatBio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbFormMatBio $tbFormMatBio)
    {
        request()->validate(TbFormMatBio::$rules);

        $tbFormMatBio->update($request->all());

        return redirect()->route('tb-form-mat-bios.index')
            ->with('success', 'TbFormMatBio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbFormMatBio = TbFormMatBio::find($id)->delete();

        return redirect()->route('tb-form-mat-bios.index')
            ->with('success', 'TbFormMatBio deleted successfully');
    }



    public function cambiarEstadoVarios(Request $request)
    {
        $estadoIds = $request->input('estado_checkbox');
  
        if ($estadoIds) {
            // Obtener los registros seleccionados
            $registrosSeleccionados = TbFormMatBio::whereIn('id_mab', $estadoIds)->get();

            // Cambiar el estado de los registros seleccionados a "ATENDIDO"
            foreach ($registrosSeleccionados as $registro) {
                $registro->estado = 'ATENDIDO';
                $registro->save();
            }

            return redirect()->route('tb-form-mat-bios.index')
                ->with('success', 'Estado de los registros seleccionados cambiado a "ATENDIDO"');
        } else {
            return redirect()->route('tb-form-mat-bios.index')
                ->with('error', 'No se seleccionaron registros para cambiar el estado');
        }


     }
    



    public function pdf_impr(Request $request)
    {
      $datos = vista_from_sol_bi::get();
    
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
        ];
        $pdf = PDF::loadView('tb-form-mat-bio.pdf', $data);
        return $pdf->download('tb-form-mat-bio.pdf');
    
    
    
    
     
    }





}
