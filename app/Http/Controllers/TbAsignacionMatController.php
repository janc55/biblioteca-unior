<?php

namespace App\Http\Controllers;

use App\Models\TbAsignacionMat;
use Illuminate\Http\Request;
use App\Models\tb_docentes;
use App\Models\tb_materias;
use App\Models\tb_estudiantes;
use App\Models\TbSemestre;
use App\Models\TbCarrera;
use App\Models\vista_mat_docentes;
use App\Models\vista_carr_mat_sem; 
/**
 * Class TbAsignacionMatController
 * @package App\Http\Controllers
 */
class TbAsignacionMatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbAsignacionMats = TbAsignacionMat::paginate();

        return view('tb-asignacion-mat.index', compact('tbAsignacionMats'))
            ->with('i', (request()->input('page', 1) - 1) * $tbAsignacionMats->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbAsignacionMat = new TbAsignacionMat();
        return view('tb-asignacion-mat.create', compact('tbAsignacionMat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbAsignacionMat::$rules);

        $tbAsignacionMat = TbAsignacionMat::create($request->all());

        return redirect()->route('tb-asignacion-mats.index')
            ->with('success', 'TbAsignacionMat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lista = tb_docentes::get();
        return view('tb-asignacion-mat.lista_docentes', compact('lista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbAsignacionMat = TbAsignacionMat::find($id);

        return view('tb-asignacion-mat.edit', compact('tbAsignacionMat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbAsignacionMat $tbAsignacionMat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbAsignacionMat $tbAsignacionMat)
    {
        request()->validate(TbAsignacionMat::$rules);

        $tbAsignacionMat->update($request->all());

        return redirect()->route('tb-asignacion-mats.index')
            ->with('success', 'TbAsignacionMat updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbAsignacionMat = TbAsignacionMat::find($id)->delete();

        return redirect()->route('tb-asignacion-mats.index')
            ->with('success', 'TbAsignacionMat deleted successfully');
    }

    // Lista docentes
    public function docente_lista()
    {

        $lista = tb_docentes::get(); 
        return view('tb-asignacion-mat.lista_docentes', compact('lista'));
    }
    public function funcion_buscar_asig_doc(Request $request)
    {
        $lista = tb_docentes::where('cod_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('id_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_p_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_m_doc','LIKE','%'.$request->dato.'%')
        ->orWhere('nombre_doc','LIKE','%'.$request->dato.'%')->get();
        return view('tb-asignacion-mat.lista_docentes', compact('lista'));
    }

    // Lista materias
    public function funcion_mat(Request $request,$id)
    {
        $lista = vista_carr_mat_sem::get();
        $nombredoc=$request->nombre;
        $TbSemestre =TbSemestre::get();
        $TbCarrera =TbCarrera::get();
        $id_rec = $id;        
        return view('tb-asignacion-mat.nomina_materias', compact('lista','nombredoc','id_rec','TbSemestre','TbCarrera'));
    }

    public function funcion_mat_doc(Request $request,$id)
    {
        $lista = vista_mat_docentes::get()->where('id_doc','=',$id);
        $nombredoc=$request->nombre;
        $TbSemestre =TbSemestre::get();
        $TbCarrera =TbCarrera::get();
        $id_rec = $id;        
        return view('tb-asignacion-mat.nomina_materias_doc', compact('lista','nombredoc','id_rec','TbSemestre','TbCarrera'));
    }

    public function funcion_buscar_mat(Request $request)
    {
        $id_rec = $request->id;
        $nombredoc=$request->nombre;
        $TbSemestre =TbSemestre::get();
        $TbCarrera =TbCarrera::get();
        $lista = vista_carr_mat_sem::where('codigo_mat','LIKE','%'.$request->dato.'%')
        ->orWhere('nombre_mat','LIKE','%'.$request->dato.'%')->get();
        return view('tb-asignacion-mat.nomina_materias', compact('lista','id_rec','TbSemestre','TbCarrera','nombredoc'));
    }



    public function filtrar_asig_doc_mat(Request $request)
    {
        $nombredoc=$request->nombre;
        $lista = vista_carr_mat_sem::get()->where('id_sem','=',$request->id_sem)->where('id_carre','=',$request->id_carre);
        $TbSemestre =TbSemestre::get();
        $TbCarrera =TbCarrera::get();
        $id_rec = $request->id;
        
        return view('tb-asignacion-mat.nomina_materias', compact('lista','id_rec','TbSemestre','TbCarrera','nombredoc'));
    }
    public function nom_est()
    {

        $lista = tb_estudiantes::get();
        return view('asignacion-mat.nomina_estudiantes', compact('lista'));
    }

    //Funcion de inserción de docente y materias
 
    
    public function docente_materia_funcion(Request $request)
    {


        TbAsignacionMat::create([
                        'id_materia'       => $request->id_mat,
                        'id_doc'            => $request->id_doc,
                        'id_carre'          => $request->id_car,                        
                        'id_turno'          => $request->id_turno,
                        'id_gestion'        => 4,
                        'paralelo_asig_mat' => $request->pr,                        
                        'tipo_asig_mat'     => 'R',
                        'inicio_desig'      => $request->inicio_desig,
                        'fin_desig'         => $request->fin_desig,
                        'obs_asig_mat'      => 'Ninguna',
                        

        ]);

       // TbAsignacionMat::insert('insert into tb_asignacion_mats (id_materia, id_doc, id_carre,id_turno,id_gestion,paralelo_asig_mat) values (?,?,?,?,?,?)', [$request->id_mat,$request->id_doc,1,$request->id_turno,4,$request->id_materia]);
      
        echo $request->id_mat;
        $lista = tb_docentes::get();
        return view('tb-asignacion-mat.lista_docentes', compact('lista')); 

    }

}
