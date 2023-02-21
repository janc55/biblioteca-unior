<?php

namespace App\Http\Controllers;

use App\Models\Tbplane;
use Illuminate\Http\Request;

/**
 * Class TbplaneController
 * @package App\Http\Controllers
 */
class TbplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbplane = Tbplane::paginate();

        return view('tbplane.index', compact('tbplane'))
            ->with('i', (request()->input('page', 1) - 1) * $tbplane->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbplane = new Tbplane();
        return view('tbplane.create', compact('tbplane'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tbplane::$rules);

        $tbplane = Tbplane::create($request->all());

        return redirect()->route('plane.index')
            ->with('success', 'Tbplane created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbplane = Tbplane::find($id);

        return view('tbplane.show', compact('tbplane'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbplane = Tbplane::find($id);

        return view('tbplane.edit', compact('tbplane'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tbplane $tbplane
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbplane $tbplane)
    {
        request()->validate(Tbplane::$rules);

        $tbplane->update($request->all());

        return redirect()->route('plane.index')
            ->with('success', 'Tbplane updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbplane = Tbplane::find($id)->delete();

        return redirect()->route('plane.index')
            ->with('success', 'Tbplane deleted successfully');
    }
}
