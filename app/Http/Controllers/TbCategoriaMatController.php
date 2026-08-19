<?php

namespace App\Http\Controllers;

use App\Models\TbCategoriaMat;
use Illuminate\Http\Request;

/**
 * Class TbCategoriaMatController
 * @package App\Http\Controllers
 */
class TbCategoriaMatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbCategoriaMat = TbCategoriaMat::paginate();

        return view('tb-categoria-mat.index', compact('tbCategoriaMat'))
            ->with('i', (request()->input('page', 1) - 1) * $tbCategoriaMat->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbCategoriaMat = new TbCategoriaMat();
        return view('tb-categoria-mat.create', compact('tbCategoriaMat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbCategoriaMat::$rules);

        $tbCategoriaMat = TbCategoriaMat::create($request->all());

        return redirect()->route('categoriamats.index')
            ->with('success', 'TbCategoriaMat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbCategoriaMat = TbCategoriaMat::find($id);

        return view('tb-categoria-mat.show', compact('tbCategoriaMat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbCategoriaMat = TbCategoriaMat::find($id);

        return view('tb-categoria-mat.edit', compact('tbCategoriaMat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbCategoriaMat $tbCategoriaMat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbCategoriaMat $tbCategoriaMat)
    {
        request()->validate(TbCategoriaMat::$rules);

        $tbCategoriaMat->update($request->all());

        return redirect()->route('categoriamats.index')
            ->with('success', 'TbCategoriaMat updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbCategoriaMat = TbCategoriaMat::find($id)->delete();

        return redirect()->route('categoriamats.index')
            ->with('success', 'TbCategoriaMat deleted successfully');
    }
}
