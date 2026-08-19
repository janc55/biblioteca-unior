<?php

namespace App\Http\Controllers;

use App\Models\TbAutore;
use Illuminate\Http\Request;

/**
 * Class TbAutoreController
 * @package App\Http\Controllers
 */
class TbAutoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbAutores = TbAutore::paginate();

        return view('tb-autore.index', compact('tbAutores'))
            ->with('i', (request()->input('page', 1) - 1) * $tbAutores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbAutore = new TbAutore();
        return view('tb-autore.create', compact('tbAutore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbAutore::$rules);

        $tbAutore = TbAutore::create($request->all());

        return redirect()->route('tb-autores.index')
            ->with('success', 'TbAutore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbAutore = TbAutore::find($id);

        return view('tb-autore.show', compact('tbAutore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbAutore = TbAutore::find($id);

        return view('tb-autore.edit', compact('tbAutore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbAutore $tbAutore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbAutore $tbAutore)
    {
        request()->validate(TbAutore::$rules);

        $tbAutore->update($request->all());

        return redirect()->route('tb-autores.index')
            ->with('success', 'TbAutore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbAutore = TbAutore::find($id)->delete();

        return redirect()->route('tb-autores.index')
            ->with('success', 'TbAutore deleted successfully');
    }
}
