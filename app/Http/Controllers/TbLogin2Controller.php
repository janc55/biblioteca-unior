<?php

namespace App\Http\Controllers;

use App\Models\TbLogin2;
use Illuminate\Http\Request;
use App\Models\TbDocente;

/**
 * Class TbLogin2Controller
 * @package App\Http\Controllers
 */
class TbLogin2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbLogin2s = TbLogin2::paginate();

        return view('tb-login2.index', compact('tbLogin2s'))
            ->with('i', (request()->input('page', 1) - 1) * $tbLogin2s->perPage());
    }

    public function funlogin2(Request $request)
    {
        $login2= TbDocente::get()->where('ci',$request->input('ci'));
   
        $latestId = TbDocente::latest('id_doc')->first()->id_doc;
        
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln($$login2);


        return view('tb-login2.index', compact('login2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbLogin2 = new TbLogin2();
        return view('tb-login2.create', compact('tbLogin2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbLogin2::$rules);

        $tbLogin2 = TbLogin2::create($request->all());

        return redirect()->route('tb-login2s.index')
            ->with('success', 'TbLogin2 created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbLogin2 = TbLogin2::find($id);

        return view('tb-login2.show', compact('tbLogin2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbLogin2 = TbLogin2::find($id);

        return view('tb-login2.edit', compact('tbLogin2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbLogin2 $tbLogin2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbLogin2 $tbLogin2)
    {
        request()->validate(TbLogin2::$rules);

        $tbLogin2->update($request->all());

        return redirect()->route('tb-login2s.index')
            ->with('success', 'TbLogin2 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbLogin2 = TbLogin2::find($id)->delete();

        return redirect()->route('tb-login2s.index')
            ->with('success', 'TbLogin2 deleted successfully');
    }
}
