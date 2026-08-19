<?php

namespace App\Http\Controllers;
use App\Models\Rool;
use Illuminate\Http\Request;
use App\Models\VistaUs;
use App\Models\TbUser;

class TbUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $us = Rool::paginate();

        return view('auth.rool', compact('us'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rool = $request->id . "|" .
        ($request->libros !== null ? "true" : "false") . "|" .
        ($request->presentaciones !== null ? "true" : "false") . "|" .
        ($request->atencion !== null ? "true" : "false") . "|" .
        ($request->registrar_bibliotecas !== null ? "true" : "false") . "|" .
        ($request->graficos_reportes !== null ? "true" : "false") . "|" .
        ($request->usuarios !== null ? "true" : "false");
        $us = Rool::where('id', '=', $request->id)->first();

        if ($us) {
            $us->rool = $rool;
            $us->save();
        }

    echo $rool;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showUserInfo()
    {
        // Obtener el usuario con id igual a 1
        $vistaUs = VistaUs::first();

        // Pasar los datos a la vista
        return view('vista_us', compact('vistaUs'));
    }

    public function buscarUsuario(Request $request)
    {
        $busqueda = $request->input('busqueda');

        // Buscar el usuario por el correo electrónico ingresado
        $vistaUs = VistaUs::where('email', $busqueda)->first();

        // Pasar los datos a la vista
        return view('vista_us', compact('vistaUs'));
    }



    public function deshabilitarUsuario($id)
    {
        $user = TbUser::findOrFail($id);
        $user->estado = 'inactivo'; // Cambiar el campo 'rool' según como esté definido en tu modelo User
        $user->save();

        return redirect()->back()->with('success', 'Usuario deshabilitado exitosamente');
    }

    // Método para habilitar usuario
    public function habilitarUsuario($id)
    {
        $user = TbUser::findOrFail($id);
        $user->estado = 'activo'; // Cambiar el campo 'rool' según como esté definido en tu modelo User
        $user->save();

        return redirect()->back()->with('success', 'Usuario habilitado exitosamente');
    }







}
