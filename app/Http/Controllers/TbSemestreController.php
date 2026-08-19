<?php

namespace App\Http\Controllers;

use App\Models\TbSemestre;
use Illuminate\Http\Request;

/**
 * Class TbSemestreController
 * @package App\Http\Controllers
 */
class TbSemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbSemestre = TbSemestre::paginate();

        return view('tb-semestre.index', compact('tbSemestre'))
            ->with('i', (request()->input('page', 1) - 1) * $tbSemestre->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbSemestre = new TbSemestre();
        return view('tb-semestre.create', compact('tbSemestre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbSemestre::$rules);

        $tbSemestre = TbSemestre::create($request->all());

        return redirect()->route('semestres.index')
            ->with('success', 'TbSemestre created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbSemestre = TbSemestre::find($id);

        return view('tb-semestre.show', compact('tbSemestre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbSemestre = TbSemestre::find($id);

        return view('tb-semestre.edit', compact('tbSemestre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbSemestre $tbSemestre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbSemestre $tbSemestre)
    {
        request()->validate(TbSemestre::$rules);

        $tbSemestre->update($request->all());

        return redirect()->route('semestres.index')
            ->with('success', 'TbSemestre updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbSemestre = TbSemestre::find($id)->delete();

        return redirect()->route('semestres.index')
            ->with('success', 'TbSemestre deleted successfully');
    }
}
