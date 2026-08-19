<?php

namespace App\Http\Controllers;

use App\Models\TbFormSol;
use Illuminate\Http\Request;
use App\Models\vista_formalario_mat;
use PDF;
/**
 * Class TbFormSolController
 * @package App\Http\Controllers
 */
class TbFormSolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function pdf_impr(Request $request)
     {
       $datos = vista_formalario_mat::where('id_formsol','=',$request->id)->get();
     
         $data = [
             'title' => 'Welcome to Tutsmake.com',
             'date' => date('m/d/Y'),
             'datos'=> $datos,
         ];
         $pdf = PDF::loadView('tb-form-sol.pdf', $data);
         return $pdf->download('tb-form-sol.pdf');
     
     
     
     
     
     }

    public function index()
    {
        $tbFormSols = TbFormSol::paginate();

        return view('tb-form-sol.index', compact('tbFormSols'))
            ->with('i', (request()->input('page', 1) - 1) * $tbFormSols->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbFormSol = new TbFormSol();
        return view('tb-form-sol.create', compact('tbFormSol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbFormSol::$rules);

        $tbFormSol = TbFormSol::create($request->all());

        return redirect()->route('tb-form-sols.index')
            ->with('success', 'TbFormSol created successfully.');
    }


    public function updateStatus(Request $request)
    {
        $selectedIds = $request->input('selectedRows');

        // Update the status of selected records to "Atendido"
        TbFormSol::whereIn('id_formsol', $selectedIds)->update(['estado' => 'Atendido']);

        // Redirect back to the page after updating
        return redirect()->back()->with('success', 'SE ATENDIO CORRECTAMENTE');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbFormSol = TbFormSol::find($id);

        return view('tb-form-sol.show', compact('tbFormSol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbFormSol = TbFormSol::find($id);

        return view('tb-form-sol.edit', compact('tbFormSol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbFormSol $tbFormSol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbFormSol $tbFormSol)
    {
        request()->validate(TbFormSol::$rules);

        $tbFormSol->update($request->all());

        return redirect()->route('tb-form-sols.index')
            ->with('success', 'TbFormSol updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbFormSol = TbFormSol::find($id)->delete();

        return redirect()->route('tb-form-sols.index')
            ->with('success', 'TbFormSol deleted successfully');
    }
}
