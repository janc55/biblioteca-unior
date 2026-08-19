<?php

namespace App\Http\Controllers;

use App\Models\TbDocente;
use Illuminate\Http\Request;
use App\Models\TbUser;
use Illuminate\Support\Facades\Hash;
/**
 * Class TbDocenteController
 * @package App\Http\Controllers
 */
class TbDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tbDocentes = TbDocente::paginate();
        // $DATOS= auth()->user();
        // echo $DATOS;
        return view('tb-docente.index', compact('tbDocentes'))
            ->with('i', (request()->input('page', 1) - 1) * $tbDocentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbDocente = new TbDocente();
        return view('tb-docente.create', compact('tbDocente'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tbDocente = TbDocente::create($request->all());


        $pass = tbDocente::findOrFail($tbDocente->id_doc);
        $pass->update(['doc_pass' => Hash::make($tbDocente->doc_pass)]);
        TbUser::create([
            'id_tb'           => $tbDocente->id_doc,
            'tipo'         => 'DOC',

        ]);


        return redirect()->route('docente.index')
            ->with('success', 'TbDocente created successfully.');
    }

    public function agregar(Request $request)
    {
        // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        TbDocente::insert("insert into tb_docentes (nombre_doc) values ('aaa')");
        $tbDocentes = TbDocente::paginate();

        return view('tb-docente.index', compact('tbDocentes'))
            ->with('i', (request()->input('page', 1) - 1) * $tbDocentes->perPage());

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbDocente = TbDocente::find($id);

        return view('tb-docente.show', compact('tbDocente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbDocente = TbDocente::find($id);

        return view('tb-docente.edit', compact('tbDocente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbDocente $tbDocente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $id = $request->id_doc; // Accede al valor del parámetro 'id' desde la solicitud HTTP

      
       ///request()->validate(TbDocente::$rules);
        $tbDocente = TbDocente::find($id);
        $tbDocente->update($request->all());
        $tbDocente->update(['doc_pass' => Hash::make($tbDocente->doc_pass)]);

      


        return back()->with('success', 'Se Modificacion Exitosa');

    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbDocente = TbDocente::find($id)->delete();

        return redirect()->route('tb-docente.index')
            ->with('success', 'TbDocente deleted successfully');
    }
    public function funcion_buscar_doc(Request $request)
    {
        $tbDocentes = TbDocente::where('cod_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_p_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_m_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('nombre_doc','LIKE','%'.$request->dato.'%')->get();
        return view('tb-docente.index', compact('tbDocentes'));
    }
}
