<?php

namespace App\Http\Controllers;

use App\Models\TbEnlaceBi;
use Illuminate\Http\Request;

/**
 * Class TbEnlaceBiController
 * @package App\Http\Controllers
 */
class TbEnlaceBiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbEnlaceBis = TbEnlaceBi::paginate();

        return view('tb-enlace-bi.index', compact('tbEnlaceBis'))
            ->with('i', (request()->input('page', 1) - 1) * $tbEnlaceBis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbEnlaceBi = new TbEnlaceBi();
        return view('tb-enlace-bi.create', compact('tbEnlaceBi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //request()->validate(TbEnlaceBi::$rules);

       $nombre ="";


       if($request->hasFile("img")){
           $file=$request->file("img");
           $nombre = "enlace_".time().".".$file->guessExtension();
           $request->foto=$nombre;
           $ruta = public_path("libro/".$nombre);
           if($file->guessExtension()=="png"){
                copy($file, $ruta);

               }else{
                  $request->foto=$nombre;
               dd("NO ES UNA IMAGEN");
           }
       }


        $tbEnlaceBi = TbEnlaceBi::create([
            'dir'            => $request->dir,
            'foto'    => $nombre,
    ]);

        return redirect()->route('tb-enlace-bis.index')
           ->with('success', 'TbEnlaceBi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbEnlaceBi = TbEnlaceBi::find($id);

        return view('tb-enlace-bi.show', compact('tbEnlaceBi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbEnlaceBi = TbEnlaceBi::find($id);

        return view('tb-enlace-bi.edit', compact('tbEnlaceBi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbEnlaceBi $tbEnlaceBi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbEnlaceBi $tbEnlaceBi)
    {
        request()->validate(TbEnlaceBi::$rules);

        $tbEnlaceBi->update($request->all());

        return redirect()->route('tb-enlace-bis.index')
            ->with('success', 'TbEnlaceBi updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbEnlaceBi = TbEnlaceBi::find($id)->delete();

        return redirect()->route('tb-enlace-bis.index')
            ->with('success', 'TbEnlaceBi deleted successfully');
    }
}
