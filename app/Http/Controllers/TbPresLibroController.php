<?php

namespace App\Http\Controllers;

use App\Models\TbPresLibro;
use Illuminate\Http\Request;

/**
 * Class TbPresLibroController
 * @package App\Http\Controllers
 */
class TbPresLibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbPresLibros = TbPresLibro::paginate();

        return view('tb-pres-libro.index', compact('tbPresLibros'))
            ->with('i', (request()->input('page', 1) - 1) * $tbPresLibros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbPresLibro = new TbPresLibro();
        return view('tb-pres-libro.create', compact('tbPresLibro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // request()->validate(TbPresLibro::$rules);

        $tbPresLibro = TbPresLibro::create($request->all());

        return redirect()->route('pres_libros.index')
            ->with('success', 'TbPresLibro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbPresLibro = TbPresLibro::find($id);

        return view('tb-pres-libro.show', compact('tbPresLibro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbPresLibro = TbPresLibro::find($id);

        return view('tb-pres-libro.edit', compact('tbPresLibro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbPresLibro $tbPresLibro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbPresLibro $tbPresLibro)
    {
        request()->validate(TbPresLibro::$rules);

        $tbPresLibro->update($request->all());

        return redirect()->route('tb-pres-libros.index')
            ->with('success', 'TbPresLibro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbPresLibro = TbPresLibro::find($id)->delete();

        return redirect()->route('tb-pres-libros.index')
            ->with('success', 'TbPresLibro deleted successfully');
    }
}
