<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TbEstudiante;
use App\Models\tb_docentes;

use App\Models\vista_est_ci_carrs;
use App\Models\vista_est_ci_carr_boleta_pdf;
use App\Models\TbCarrera;
use App\Models\Tbplane;
use App\Models\TbEstCarr;
use App\Models\mini_vista_matricula;
use PDF;
use Illuminate\Support\Facades\Hash;
use App\Models\TbUser;


/**
 * Class TbEstudianteController
 * @package App\Http\Controllers
 */
class TbEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tbEstudiantes = TbEstudiante::paginate();

    //     return view('tb-estudiante.index', compact('tbEstudiantes'))
    //         ->with('i', (request()->input('page', 1) - 1) * $tbEstudiantes->perPage());
    // }

    public function index()
    {
        $tbEstudiante = TbEstudiante::paginate();

        return view('tb-estudiante.index', compact('tbEstudiante'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbEstudiante = new TbEstudiante();


        $tbCarrera = TbCarrera::get();
        $tbEstudiante = TbEstudiante::get();
        $tbplane = Tbplane::get();
        return view('tb-estudiante.create', compact('tbEstudiante'), compact('tbCarrera'),compact('tbplane'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $est =TbEstudiante::create([
            'nombre_est'       => $request->nombre_est,
            'ape_p_est'         => $request->ape_p_est,
            'ape_m_est'         => $request->ape_m_est,
            'ci_est'            => $request->ci_est,
            'fec_nac_est'         => $request->fec_nac_est,
            'tel_dom_est'         => $request->tel_dom_est,
            'dir_est'            => $request->dir_est,
            'cel_est'            => $request->cel_est,
            'cod_est'            => $request->id_est,
            'est_pass'            => Hash::make($request->pass),



]);

$sigla1 = mini_vista_matricula::where('id_carre','=',$request->id_c)->get();
$dato=$sigla1[0]->sigla_carre;

$tbEstudiante = TbEstudiante::findOrFail($est ->id_est);
$tbEstudiante->update(['cod_est' => $est ->id_est]);
TbUser::create([
    'id_tb'           => $est ->id_est,
    'tipo'         => 'EST',

]);


TbEstCarr::create([
    'id_est'           => $est ->id_est,
    'id_carre'         => $request->id_c,
    'id_turno'         => $request->id_turno,
    'id_pl'            => $request->id_plan,
    'nro_serie'        => $request->nro_serie,
    'grado_est'        => 'Licenciatura',
    'matricula_est'    => $dato."".$est ->id_est,


]);

        return redirect()->route('estudiantes.index')
            ->with('success', $est ->id_est);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbEstudiante = TbEstudiante::find($id);

        return view('tb-estudiante.show', compact('tbEstudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbEstudiante = TbEstudiante::find($id);

        return view('tb-estudiante.edit', compact('tbEstudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbEstudiante $tbEstudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbEstudiante $tbEstudiante)
    {
        // Subir imagen de foto
        $request->validate([
            'foto_est' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->foto_est->extension();
        $request->foto_est->move(public_path('foto_est'), $imageName);
        //

        $tbEstudiantess = TbEstudiante::find($request->id_est);
        $tbEstudiantess->update([
        'nombre_est'        => $request->nombre_est,
        'ape_p_est'         => $request->ape_p_est,
        'ape_m_est'         => $request->ape_m_est,
        'ci_est'            => $request->ci_est,
        'exp_est'           => $request->exp_est,
        'fec_nac_est'       => $request->fec_nac_est,
        'tel_dom_est'       => $request->tel_dom_est,
        'dir_est'           => $request->dir_est,
        'cel_est'           => $request->cel_est,
        'email_est'         => $request->email_est,
        'padre_del_est'           => $request->padre_del_est,
        'madre_del_est'           => $request->madre_del_est,
        'nombre_trab_padre_est'   => $request->nombre_trab_padre_est,
        'tel_trab_padre_est'      => $request->tel_trab_padre_est,
        'dir_trab_padre_est'      => $request->dir_trab_padre_est,
        'cole_est'           => $request->cole_est,
        'sexo_est'           => $request->sexo_est,
        // 'dom_est'           => $request->dom_est,
        'lug_nac_est'           => $request->lug_nac_est,
        'trab_dir_est'           => $request->trab_dir_est,
        'trab_fono_est'           => $request->trab_fono_est,
        'trab_nombre_est'           => $request->trab_nombre_est,
        'dato_bachi_est'           => $request->dato_bachi_est,
        'tipo_cole_est'           => $request->tipo_cole_est,
        'foto_est'           =>   $imageName,
        'est_pass'           => $request->est_pass,
        'obs_est'           => $request->obs_est,

        ]);

        return redirect()->route('estudiantes.index')
            ->with('success', 'TbEstudiante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbEstudiante = TbEstudiante::find($id)->delete();

        return redirect()->route('estudiantes.index')
            ->with('success', 'TbEstudiante deleted successfully');
    }

    public function docente_lista()
    {

        $lista = tb_docentes::get();
        return view('tb-asignacion-mat.lista_docentes', compact('lista'));
    }

    public function filtro_buscar(Request $request)
    {
        $nombres = TbEstudiante::where("nombre_est", "like", $request ->texto."%")->take(10)->get();
        // ->orWhere("ape_est", "like", $request ->texto."%")->take(10)->get()
        // ->orWhere("ape_m_est", "like", $request ->texto."%")->take(10)->get();
        return view("estudiantes.index",compact("nombres"));
    }

    public function funcion_buscar_est(Request $request)
    {
        $tbEstudiante = TbEstudiante::where('cod_est','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_p_est','LIKE','%'.$request->dato.'%')
        ->orWhere('ape_m_est','LIKE','%'.$request->dato.'%')
        ->orWhere('nombre_est','LIKE','%'.$request->dato.'%')->get();
        return view('tb-estudiante.index', compact('tbEstudiante'));
    }

    public function funcion_pdf_boleta_ins_est(Request $request)
    {
       $datos = vista_est_ci_carr_boleta_pdf::get()->where('id_est','=',$request->id_est);

        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'datos'=> $datos,
        ];

        $pdf = PDF::loadView('tb-estudiante.hoja_boleta_est', $data);
        return $pdf->download('Boleta_est_imprimir.pdf');

    }
}
