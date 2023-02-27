<?php

namespace App\Http\Controllers;

use App\Models\TbEstCarr;
use Illuminate\Http\Request;

/**
 * Class TbEstCarrController
 * @package App\Http\Controllers
 */
class TbEstCarrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbEstCarrs = TbEstCarr::paginate();

        return view('tb-est-carr.index', compact('tbEstCarrs'))
            ->with('i', (request()->input('page', 1) - 1) * $tbEstCarrs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbEstCarr = new TbEstCarr();
        return view('tb-est-carr.create', compact('tbEstCarr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbEstCarr::$rules);

        $tbEstCarr = TbEstCarr::create($request->all());

        return redirect()->route('tb-est-carrs.index')
            ->with('success', 'TbEstCarr created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbEstCarr = TbEstCarr::find($id);

        return view('tb-est-carr.show', compact('tbEstCarr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbEstCarr = TbEstCarr::find($id);

        return view('tb-est-carr.edit', compact('tbEstCarr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbEstCarr $tbEstCarr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbEstCarr $tbEstCarr)
    {
        request()->validate(TbEstCarr::$rules);

        $tbEstCarr->update($request->all());

        return redirect()->route('tb-est-carrs.index')
            ->with('success', 'TbEstCarr updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbEstCarr = TbEstCarr::find($id)->delete();

        return redirect()->route('tb-est-carrs.index')
            ->with('success', 'TbEstCarr deleted successfully');
    }
}
