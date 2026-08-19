<?php

namespace App\Http\Controllers;

use App\Models\TbPrerrequisito;
use App\Models\vista_prerrequisitos;
use App\Models\vista_carre_materias;
use App\Models\vista_plan_estudios;
use App\Models\TbCarreMateria;
use App\Models\TbMateria;
use Illuminate\Http\Request;

/**
 * Class TbPrerrequisitoController
 * @package App\Http\Controllers
 */
class TbPrerrequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbPrerrequisito = vista_prerrequisitos::paginate();
      
        return view('tb-prerrequisito.index', compact('tbPrerrequisito'))
            ->with('i', (request()->input('page', 1) - 1) * $tbPrerrequisito->perPage());
    
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbPrerrequisito = new TbPrerrequisito();
        $tbCarreMateria = vista_carre_materias::paginate();
        $tbMateria = TbMateria::paginate();

        return view('tb-prerrequisito.create', compact('tbPrerrequisito','tbCarreMateria','tbMateria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
        $tbPrerrequisito = TbPrerrequisito::create([
                'id_carre_mater'    => $request->id_carre_mater,
                'id_materia'        => $request->id_materia,
                // 'id_materia2'        => $request->id_materia2,  
                // 'id_materia3'        => $request->id_materia3,           
                // 'id_materia4'        => $request->id_materia4,           
                // 'id_materia5'        => $request->id_materia5,           
        ]);  

        if($request->id_materia2 == 0)
        {

        }
        else
        {
        $tbPrerrequisito = TbPrerrequisito::create([
            'id_carre_mater'    => $request->id_carre_mater,
            'id_materia'        => $request->id_materia2,           
           
        ]);    
        }

        if($request->id_materia3 == 0)
        {

        }
        else
        {
        $tbPrerrequisito = TbPrerrequisito::create([
            'id_carre_mater'    => $request->id_carre_mater,
            'id_materia'        => $request->id_materia3,           
           
        ]); 
        }
        if($request->id_materia4 == 0)
        {

        }
        else
        {
        $tbPrerrequisito = TbPrerrequisito::create([
            'id_carre_mater'    => $request->id_carre_mater,
            'id_materia'        => $request->id_materia4,           
           
        ]); 
        }

        if($request->id_materia5 == 0)
        {

        }
        else
        {
        $tbPrerrequisito = TbPrerrequisito::create([
            'id_carre_mater'    => $request->id_carre_mater,
            'id_materia'        => $request->id_materia5,           
           
        ]); 
        }
        return redirect()->route('prerrequisito.index')
            ->with('success', 'tbPrerrequisito created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbPrerrequisito = TbPrerrequisito::find($id);

        return view('tb-prerrequisito.show', compact('tbPrerrequisito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbPrerrequisito = TbPrerrequisito::find($id);
        $tbCarreMateria= vista_carre_materias::get();
        $tbMateria = TbMateria::get();
        return view('tb-prerrequisito.edit', compact('tbPrerrequisito','tbCarreMateria','tbMateria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbPrerrequisito $tbPrerrequisito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbPrerrequisito $tbPrerrequisito)
    {
        request()->validate(TbPrerrequisito::$rules);

        $tbPrerrequisito->update($request->all());

        return redirect()->route('prerrequisito.index')
            ->with('success', 'tbPrerrequisito updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbPrerrequisito = TbPrerrequisito::find($id)->delete();

        return redirect()->route('prerrequisito.index')
            ->with('success', 'tbPrerrequisito deleted successfully');
    }
}
