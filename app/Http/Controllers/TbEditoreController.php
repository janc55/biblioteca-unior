<?php

namespace App\Http\Controllers;

use App\Models\TbEditore;
use Illuminate\Http\Request;

/**
 * Class TbEditoreController
 * @package App\Http\Controllers
 */
class TbEditoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbEditores = TbEditore::paginate();

        return view('tb-editore.index', compact('tbEditores'))
            ->with('i', (request()->input('page', 1) - 1) * $tbEditores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbEditore = new TbEditore();
        return view('tb-editore.create', compact('tbEditore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbEditore::$rules);

        $tbEditore = TbEditore::create($request->all());

        return redirect()->route('tb-editores.index')
            ->with('success', 'TbEditore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbEditore = TbEditore::find($id);

        return view('tb-editore.show', compact('tbEditore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbEditore = TbEditore::find($id);

        return view('tb-editore.edit', compact('tbEditore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbEditore $tbEditore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbEditore $tbEditore)
    {
        request()->validate(TbEditore::$rules);

        $tbEditore->update($request->all());

        return redirect()->route('tb-editores.index')
            ->with('success', 'TbEditore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbEditore = TbEditore::find($id)->delete();

        return redirect()->route('tb-editores.index')
            ->with('success', 'TbEditore deleted successfully');
    }
}
