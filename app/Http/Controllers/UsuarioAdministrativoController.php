<?php

namespace App\Http\Controllers;

use App\Models\UsuarioAdministrativo;
use Illuminate\Http\Request;
use App\Models\TbUser;
use Illuminate\Support\Facades\Hash;


use App\Imports\UsuariosImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;


/**
 * Class UsuarioAdministrativoController
 * @package App\Http\Controllers
 */
class UsuarioAdministrativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioAdministrativos = UsuarioAdministrativo::paginate();

        return view('usuario-administrativo.index', compact('usuarioAdministrativos'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarioAdministrativos->perPage());
    }


    public function import(Request $request)
    {
        $file = $request->file('excel_file');

        Excel::import(new UsuariosImport, $file);

        // Realizar cualquier acción adicional después de la importación

        return redirect()->back()->with('success', '¡Importación de usuarios exitosa!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('tb_rooles_us')->pluck('rool', 'rool');
        $usuarioAdministrativo = new UsuarioAdministrativo();
        return view('usuario-administrativo.create', compact('usuarioAdministrativo','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // request()->validate(UsuarioAdministrativo::$rules);

        $usuarioAdministrativo = UsuarioAdministrativo::create($request->all());
        $usuarioAdministrativo->update([
            'contrasena'           => Hash::make($usuarioAdministrativo->contrasena),
          
        ]);




    TbUser::create([
        'id_tb'           => $usuarioAdministrativo->id,
        'tipo' =>'OTROS',
        'rool'         => $usuarioAdministrativo->tipo,

        'estado' => 'activo',
    ]);
    



        return redirect()->route('usu_admin.index')
            ->with('success', 'UsuarioAdministrativo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarioAdministrativo = UsuarioAdministrativo::find($id);

        return view('usuario-administrativo.show', compact('usuarioAdministrativo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarioAdministrativo = UsuarioAdministrativo::find($id);
        $roles = DB::table('tb_rooles_us')->pluck('rool', 'rool');
   
        return view('usuario-administrativo.edit', compact('usuarioAdministrativo','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsuarioAdministrativo $usuarioAdministrativo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsuarioAdministrativo $usuarioAdministrativo)
    {
        request()->validate(UsuarioAdministrativo::$rules);

        $usuarioAdministrativo->update($request->all());

        return redirect()->route('usu_admin.index')
            ->with('success', 'UsuarioAdministrativo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usuarioAdministrativo = UsuarioAdministrativo::find($id)->delete();
     $usuarioAdministrativos = UsuarioAdministrativo::paginate();
        //return redirect()->route('usuario-administrativos.index')
         //   ->with('success', 'UsuarioAdministrativo deleted successfully');
           return view('usuario-administrativo.index', compact('usuarioAdministrativos'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarioAdministrativos->perPage());
    }
}
