<?php

namespace App\Http\Controllers;

use App\Models\TbAsignacionMatEst;
use Illuminate\Http\Request;
use App\Models\vista_est_ci_carrs;
use App\Models\tb_estudiantes; 
use App\Models\TbGestione;
use App\Models\TbCarrera;
use App\Models\TbSemestre;
use App\Models\vista_mat_estudiantes;
use App\Models\vista_asignacion_est_mate_doc_turno_ges;
use App\Models\vista_mat_docentes;
use PDF;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Http\Controllers\DownloadExcel;

/**
 * Class TbAsignacionMatEstController
 * @package App\Http\Controllers
 */
class TbAsignacionMatEstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbAsignacionMatEst = TbAsignacionMatEst::paginate();

        return view('tb-asignacion-mat-est.index', compact('tbAsignacionMatEst'))
            ->with('i', (request()->input('page', 1) - 1) * $tbAsignacionMatEst->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbAsignacionMatEst = new TbAsignacionMatEst();
        return view('tb-asignacion-mat-est.create', compact('tbAsignacionMatEst'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbAsignacionMatEst::$rules);

        $tbAsignacionMatEst = TbAsignacionMatEst::create($request->all());

        return redirect()->route('asignacionest.index')
            ->with('success', 'TbAsignacionMatEst created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbAsignacionMatEst = TbAsignacionMatEst::find($id);

        return view('tb-asignacion-mat-est.show', compact('tbAsignacionMatEst'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbAsignacionMatEst = TbAsignacionMatEst::find($id);

        return view('tb-asignacion-mat-est.edit', compact('tbAsignacionMatEst'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbAsignacionMatEst $tbAsignacionMatEst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbAsignacionMatEst $tbAsignacionMatEst)
    {
        request()->validate(TbAsignacionMatEst::$rules);

        $tbAsignacionMatEst->update($request->all());

        return redirect()->route('asignacionest.index')
            ->with('success', 'TbAsignacionMatEst updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbAsignacionMatEst = TbAsignacionMatEst::find($id)->delete();

        return redirect()->route('asignacionest.index')
            ->with('success', 'TbAsignacionMatEst deleted successfully');
    }

    public function estudiante_materia_funcion(Request $request)
    {
        $TbCarrera =TbCarrera::paginate();

        TbAsignacionMatEst::create([
        'id_asig_mat'       => $request->id_asig_mat,
        'id_est'            => $request->id_est,
        'eval_p1'           => 0,
        'eval_p2'           => 0,
        'eval_fin'          => 0,
        'eval_2t'           => 0,
        'obs_asig'          => 'Ninguna',
       
        ]);

       // TbAsignacionMat::insert('insert into tb_asignacion_mats (id_materia, id_doc, id_carre,id_turno,id_gestion,paralelo_asig_mat) values (?,?,?,?,?,?)', [$request->id_mat,$request->id_doc,1,$request->id_turno,4,$request->id_materia]);
      
        echo $request->id_asig;
        $lista = vista_asignacion_est_mate_doc_turno_ges::get()->where('id_est','=',$request->id_est);;
        return view('tb-asignacion-mat-est.lista_estudiantes', compact('lista','TbCarrera')); 

    }
    public function funcion_est_ci_carrera()
    {
        $lista = vista_est_ci_carrs::paginate();
        $TbCarrera =TbCarrera::paginate();
        $TbSemestre =TbSemestre::paginate();
        return view('tb-asignacion-mat-est.lista_estudiantes', compact('lista','TbCarrera','TbSemestre'));
          
    }
    public function funcion_buscar_asig_est(Request $request)
    {
        $lista = vista_est_ci_carrs::where('cod_est','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_p_est','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_m_est','LIKE','%'.$request->dato.'%')
        ->orWhere('nombre_est','LIKE','%'.$request->dato.'%')->get();
        $TbCarrera=TbCarrera::paginate();
        return view('tb-asignacion-mat-est.lista_estudiantes', compact('lista','TbCarrera'));
    }
     
   
    public function funcion_est_mate_doc_ges(Request $request)
    {
        // $lista = vista_asignacion_est_mate_doc_turno_ges::get()->where('id_est','=',$request->id_est);
        $lista2 = vista_mat_docentes::paginate();
        $lista = vista_est_ci_carrs::get()->where('id_est','=',$request->id_est);
        $TbCarrera = TbCarrera::paginate();
        return view('tb-asignacion-mat-est.lista_est_mat_doc_ges', compact('lista','lista2','TbCarrera'));
          
    }


    public function funcion_pdf_asignacion_mat()
    {
        $datos = vista_asignacion_est_mate_doc_turno_ges::get();
        // $consulta = Modelo::select("rol")->latest()->first();
       
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
        ];
           
        $pdf = PDF::loadView('notaestudiante2.hoja_nota_estudiante', $data);
     
        return $pdf->download('Nota_est_imprimir.pdf');
          
    }

    public function filtrar_asig_est_mat(Request $request)
    {        
        $lista = vista_est_ci_carrs::get()->where('id_carre','=',$request->id_carre);
        $TbSemestre =TbSemestre::get();
        $TbCarrera =TbCarrera::get();        
        
        return view('tb-asignacion-mat-est.lista_estudiantes', compact('lista','TbCarrera'));
    }

    public function lista_de_materias_est() 
    {
        $id= $_POST['id_est'];
        $user = TbGestione::get()->last();
        // $vista = vista_mat_estudiantes::get()->where('id_gestion',$user->id_gestion);
        $vista = vista_mat_estudiantes::get()->where('id_est','=',$id);
        $vista2 = vista_mat_estudiantes::get()->where('id_est','=',$id);
        return view('tb-asignacion-mat-est.lista_de_materias_est', compact('vista','vista2'));           
    }

    public function exportar_excel(Request $request)
    {
        return [
            (new DownloadExcel)->withHeadings(),
        ];
    }
}
