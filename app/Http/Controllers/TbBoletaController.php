<?php

namespace App\Http\Controllers;

use App\Models\TbBoleta;
use App\Models\tb_cuentas;
use App\Models\tb_gestiones;
use App\Models\tb_estudiantes;
use Illuminate\Http\Request;
use App\Models\vista_est_ci_carrs;
use App\Models\vista_boleta_antes_de_inscripcion;
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
        $tbCuenta = tb_cuentas::get();
        $tbGestion = tb_gestiones::get();
        $tbEstudiante = tb_estudiantes::get()->where('id_est','=',$request->id_est);

        return view('tb-boleta.create', compact('tbBoleta'),compact('tbEstudiante'),compact('tbCuenta'),compact('tbGestion'),compact('id_est'));
    }

    public function crear_boleta(Request $request)
    {
        $tbBoleta = new TbBoleta();
        $tbCuenta = tb_cuentas::get();
        $tbGestion = tb_gestiones::get();
        $id_est=$request->id_est;
        $dato=$request->dato;
        return view('tb-boleta.create',compact('id_est'), compact('dato'), compact('tbBoleta'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
     
        $tbBoleta = TbBoleta::create([
            'id_est'            => $request->id_est,
            'fec_reg_boleta'    => $request->fec_reg_boleta, 
            'id_cuenta'         => $request->id_cuenta,
            'id_gestion'        => $request->id_gestion,
            'nro_deposito'      => $request->nro_deposito,
            'monto_boleta'      => $request->monto_boleta,
            'obs_boleta'        => $request->obs_boleta,
        ]);

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

    public function funcion_est_ci_carrera()
    {
        $lista = vista_est_ci_carrs::paginate();
        return view('tb-boleta.lista_estudiantes_boleta', compact('lista'));
          
    }

    public function funcion_est_bol()
    {
        $lista = vista_est_ci_carrs::paginate();
        return view('tb-boleta.lista_estudiantes_boleta', compact('lista'));
          
    }
    
    
}
