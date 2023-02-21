<?php

namespace App\Http\Controllers;

use App\Models\TbBeca;
use Illuminate\Http\Request;

/**
 * Class TbBecaController
 * @package App\Http\Controllers
 */
class TbBecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbBeca = TbBeca::paginate();

        return view('tb-beca.index', compact('tbBeca'))
            ->with('i', (request()->input('page', 1) - 1) * $tbBeca->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbBeca = new TbBeca();
        return view('tb-beca.create', compact('tbBeca'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbBeca::$rules);

        $tbBeca = TbBeca::create($request->all());

        return redirect()->route('tb-becas.index')
            ->with('success', 'TbBeca created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbBeca = TbBeca::find($id);

        return view('tb-beca.show', compact('tbBeca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbBeca = TbBeca::find($id);

        return view('tb-beca.edit', compact('tbBeca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbBeca $tbBeca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbBeca $tbBeca)
    {
        request()->validate(TbBeca::$rules);

        $tbBeca->update($request->all());

        return redirect()->route('tb-becas.index')
            ->with('success', 'TbBeca updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbBeca = TbBeca::find($id)->delete();

        return redirect()->route('tb-becas.index')
            ->with('success', 'TbBeca deleted successfully');
    }
}
