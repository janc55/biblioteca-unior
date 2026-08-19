<?php

namespace App\Http\Controllers;

use App\Models\TbSolPreLibro;
use Illuminate\Http\Request;
use App\Models\TbLibro;
use App\Models\vista_libros;
use App\Models\vista_dev;
use Carbon\Carbon;
use App\Models\vista_estadistica_tl;
use App\Models\TbPresLibro;
use PDF;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\lib_mas_vsito;

use App\Models\TbDocente;

use App\Models\agr_tipo;
use App\Models\agr_carrera;
use App\Models\tb_form_sol;
use App\Models\TbFormMatBio;
use App\Models\vista_formalario_mat;

use App\Models\vista_from_sol_bi;
/**
 * Class TbSolPreLibroController
 * @package App\Http\Controllers
 */
class TbSolPreLibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
     {

      // $this->middleware('auth');
       // $DATOS=auth()->user();
   /*     if($DATOS->tipo == "Admin"){


        }else{

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken(); //probada-cumple esta función generando un nuevo TOKEN
            return redirect('/login');


        }*/


     }
    public function index()
    {
        $tbSolPreLibros = TbSolPreLibro::paginate();
        $tbLibros = vista_libros::where('cant_biblio', '>', '0')
        ->where('tp', '=', '1')
        ->orderBy('titulo', 'asc')
        ->limit(200)
        ->get();
          return view('tb-sol-pre-libro.index', compact('tbLibros'));
    }

    

    public function chat_admin()
    {
           return view('chat.chat_a');
    }

    public function filtrar_lib(Request $request)
    {
        $tbSolPreLibros = TbSolPreLibro::paginate();
        
        $tbLibros = vista_libros::where('cant_biblio', '>', '0')
        ->where('tp', '=', '1')
        ->where(function ($query) use ($request) {
            $query->where('titulo', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('isbm', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('codigo', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('autores', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('genero', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('editorial', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('etiquetas', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('ubicacion', 'LIKE', '%' . $request->bus . '%');
        })
        ->orderByRaw("id_libro  DESC")
        ->take(200)
        ->get();
    
    


        return view('tb-sol-pre-libro.index', compact('tbLibros'));
    }



    public function filtrar_inv7(Request $request)
    {
        $tbSolPreLibros = TbSolPreLibro::paginate();
        
        $tbLibros = vista_libros::where('cant_biblio', '>', '0')
        ->where('tp', '=', '7')
        ->where(function ($query) use ($request) {
            $query->where('titulo', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('isbm', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('codigo', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('autores', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('genero', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('editorial', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('etiquetas', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('ubicacion', 'LIKE', '%' . $request->bus . '%');
        })
        
        ->take(200)
        ->get();
    
    


        return view('tb-sol-pre-libro.indexinv7', compact('tbLibros'));
    }



    


    public function filtrar_bol8(Request $request)
    {
        $tbSolPreLibros = TbSolPreLibro::paginate();
        
        $tbLibros = vista_libros::where('cant_biblio', '>', '0')
        ->where('tp', '=', '8')
        ->where(function ($query) use ($request) {
            $query->where('titulo', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('isbm', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('codigo', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('autores', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('genero', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('editorial', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('etiquetas', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('ubicacion', 'LIKE', '%' . $request->bus . '%');
        })
        
        ->take(200)
        ->get();
    
    


        return view('tb-sol-pre-libro.indexbol8', compact('tbLibros'));
    }


    public function filtrar_ga9(Request $request)
    {
        $tbSolPreLibros = TbSolPreLibro::paginate();
        
        $tbLibros = vista_libros::where('cant_biblio', '>', '0')
        ->where('tp', '=', '9')
        ->where(function ($query) use ($request) {
            $query->where('titulo', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('isbm', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('codigo', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('autores', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('genero', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('editorial', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('etiquetas', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('ubicacion', 'LIKE', '%' . $request->bus . '%');
        })
        
        ->take(200)
        ->get();
    
    


        return view('tb-sol-pre-libro.indexga9', compact('tbLibros'));
    }

    public function filtrar_ta10(Request $request)
    {
        $tbSolPreLibros = TbSolPreLibro::paginate();
        
        $tbLibros = vista_libros::where('cant_biblio', '>', '0')
        ->where('tp', '=', '3')
        ->where(function ($query) use ($request) {
            $query->where('titulo', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('isbm', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('codigo', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('autores', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('genero', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('editorial', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('etiquetas', 'LIKE', '%' . $request->bus . '%')
                ->orWhere('ubicacion', 'LIKE', '%' . $request->bus . '%');
        })
        
        ->take(200)
        ->get();
    
    


        return view('tb-sol-pre-libro.indexta10', compact('tbLibros'));
    }



    public function filtrar_rev(Request $request)
    {
        $tbSolPreLibros = TbSolPreLibro::paginate();
        
        $tbLibros = vista_libros::where('cant_biblio', '>', '0')
    ->where('tp', '=', '6')
    ->where(function ($query) use ($request) {
        $query->where('titulo', 'LIKE', '%' . $request->bus . '%')
            ->orWhere('isbm', 'LIKE', '%' . $request->bus . '%')
            ->orWhere('codigo', 'LIKE', '%' . $request->bus . '%')
            ->orWhere('autores', 'LIKE', '%' . $request->bus . '%')
            ->orWhere('genero', 'LIKE', '%' . $request->bus . '%')
            ->orWhere('editorial', 'LIKE', '%' . $request->bus . '%')
            ->orWhere('etiquetas', 'LIKE', '%' . $request->bus . '%')
            ->orWhere('ubicacion', 'LIKE', '%' . $request->bus . '%');
    })
    ->take(200)
    ->get();

    


        return view('tb-sol-pre-libro.indexrev', compact('tbLibros'));
    }




//invitado


public function invitado_bi()
{
    $tbSolPreLibros = TbSolPreLibro::paginate();
    $tbLibros = (vista_libros::limit(200)->get()->where('cant_biblio','>','0'))->where('presentacion','<>','TESIS');
    return view('tb-sol-pre-libro.invitado', compact('tbLibros'));
}

public function filtrar_invitado_bi(Request $request)
{
    $tbSolPreLibros = TbSolPreLibro::paginate();
    $tbLibros = vista_libros::where('cant_biblio','>','0')->where('presentacion','<>','TESIS')->orWhere('titulo','LIKE','%'.$request->bus.'%')
    ->orWhere('isbm','LIKE','%'.$request->bus.'%')
    ->orWhere('codigo','LIKE','%'.$request->bus.'%')
    ->orWhere('autores','LIKE','%'.$request->bus.'%')
    ->orWhere('genero','LIKE','%'.$request->bus.'%')
    ->orWhere('editorial','LIKE','%'.$request->bus.'%')
    ->orWhere('etiquetas','LIKE','%'.$request->bus.'%')
    ->orWhere('ubicacion','LIKE','%'.$request->bus.'%')->get();


    return view('tb-sol-pre-libro.invitado', compact('tbLibros'));
}


//fin invitado







    public function fun_tesis()
    {
        $tbLibros = vista_libros::where('cant_biblio','>','0')->where('tp','=','3')->get();

        return view('tb-sol-pre-libro.tesis', compact('tbLibros'));
    }



    public function fun_inicio_bi()
    {


   $tbLibros = vista_estadistica_tl::get();

        return view('tb-sol-pre-libro.inicio', compact('tbLibros'));


    }



    public function cant_reg_lb()
    {


        $tbLibros = lib_mas_vsito::limit(4)->get();

        $tbLibrose = vista_estadistica_tl::get();

        return view('tb-sol-pre-libro.graficos.gcant_op', compact('tbLibros','tbLibrose')) ;
    }


    public function cant_reg_tipo()
    {


        $tbLibros = agr_tipo::limit(4)->get();

        $tbLibrose = vista_estadistica_tl::get();

        return view('tb-sol-pre-libro.graficos.gcant_tipo', compact('tbLibros','tbLibrose')) ;
    }



    public function cant_reg_carrera()
    {


        $tbLibros = agr_carrera::limit(4)->get();

        $tbLibrose = vista_estadistica_tl::get();

        return view('tb-sol-pre-libro.graficos.gcant_carre', compact('tbLibros','tbLibrose')) ;
    }



    public function cant_libro()
    {


        $tbLibros = vista_estadistica_tl::get();


        return view('tb-sol-pre-libro.graficos.gcant_lib', compact('tbLibros'));
    }




    public function fun_biblio()
    {

        $tbLibros = TbLibro::where('tp','=','4')->get();

        return view('tb-sol-pre-libro.biblioteca_vir', compact('tbLibros'));
    }

    public function fun_hist_est()
    {
        $DATOS=auth()->user();


        $tbLibros = vista_dev::where('id_us','=',$DATOS->id)->get();
   return view('tb-sol-pre-libro.hostorial_est', compact('tbLibros'));
    }

    /*public function fun_historial()
    {

        $tbLibros = vista_dev::get();

        $tbLibrose = vista_estadistica_tl::get();

   return view('tb-sol-pre-libro.hostorial', compact('tbLibros','tbLibrose'));
    }*/
    public function fun_historial(Request $request)
{
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');

    $tbLibros = vista_dev::whereBetween('fecha_sol', [$startDate, $endDate])->get();
    $tbLibrose = vista_estadistica_tl::get();

    return view('tb-sol-pre-libro.hostorial', compact('tbLibros', 'tbLibrose'));
}



    public function fun_pdf_Ver()
    {

        $tbLibros = TbLibro::get()->where('presentacion','=','DIGITAL');

        return view('tb-sol-pre-libro.libro_digital', compact('tbLibros'));
    }


    public function fun_pdf_visor(Request $request)
    {

       $dir=$request->dir;
        return view('tb-sol-pre-libro.visor', compact('dir'));
    }

    public function fun_devolver()
    {
        $tbSolPreLibros = TbSolPreLibro::paginate();
        $tbLibros = vista_dev::orderBy('id_solib', 'desc')->get();

        return view('tb-sol-pre-libro.devolver', compact('tbLibros'));
    }






    public function exit_session(Request $request)
    {


    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken(); //probada-cumple esta función generando un nuevo TOKEN
    return redirect('login');


}


    public function accion_dev(Request $request)
    {


       $tbSolPreLibro = TbSolPreLibro::find($request->input('id_lb'));

       $date = Carbon::now();
       $date = $date->format('Y-m-d');
       $h = Carbon::now();
       $h = $h->toTimeString();

     //  echo $tbSolPreLibro ;

       if( $request->input('estado')=="DEVOLVER")
{
    $tbSolPreLibro->update([
        'fecha_Dev'            => $date,
        'hora_dev'    => $h,
        'estado'    => $request->input('estado'),
        'obs'    => $request->input('obs'),
    ]);


}
else{

    if( $request->input('estado')=="ENTREGAR")
    {
        $tbSolPreLibro->update([

            'estado'    => $request->input('estado'),
            'obs'    => $request->input('obs'),

        ]);

    }
    else{
        $tbSolPreLibro->update([

            'estado'    => $request->input('estado'),
            'obs'    => $request->input('obs'),
        ]);

    }


}



$tbLibros = vista_dev::get();

return view('tb-sol-pre-libro.devolver', compact('tbLibros'));


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbSolPreLibro = new TbSolPreLibro();
        return view('tb-sol-pre-libro.create', compact('tbSolPreLibro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $DATOS=auth()->user();

        $date = Carbon::now();

        $date = $date->format('Y-m-d');

        $date1 = Carbon::now();
        $date1->addDays(3);
        $date1 = $date1->format('Y-m-d');
        $h = Carbon::now();
        $h = $h->toTimeString();
$iddat=$request->id;
        $tbSolPreLibro = TbSolPreLibro::create([
            'id_us'            => $DATOS->id,
            'fecha_sol'    => $date,
            'hora_sol'    => $h,
            'estado'    => "PENDIENTE",
            'id_lib'    => $iddat,
            'fech_lim'    => $date1,
        ]);
       /* echo  $request->id;

$data = [
    'title' => 'Welcome to Tutsmake.com',
    'date' => date('m/d/Y'),
    'datos'=> $tbSolPreLibro,
];
$pdf = PDF::loadView('tb-sol-pre-libro.soli', $data);
return $pdf->download('solicituf.pdf');

*/
        return redirect()->route('solicitar.index')
            ->with('success', 'SE RESERVO CORRECTAMENTE ');
    }
public function pdf_hoja_solicitud_biblioteca(Request $request)
{
  $tbSolPreLibro = vista_dev::where('id_solib','=',$request->id)->get();

    $data = [
        'title' => 'Welcome to Tutsmake.com',
        'date' => date('m/d/Y'),
        'datos'=> $tbSolPreLibro,
    ];
    $pdf = PDF::loadView('tb-sol-pre-libro.soli', $data);
    return $pdf->download('solicitud.pdf');





/*
$product =TbDocente::whereBetween('id_doc', [1, 1000])->get();

foreach ($product as $sku) {

    echo '  ';
    echo "UPDATE `tb_docentes` SET `doc_pass`='".Hash::make($sku->ci.'#Un')."'  WHERE `id_doc`='".$sku->id_doc."';";
    echo '<br>';
   // echo '---  '.$sku->ci.'#Un';
    echo '<br>';



}
*/

}


/*



public function pdf_hoja_solicitud_biblioteca(Request $request)
{
    $tbSolPreLibro = vista_dev::where('id_solib','=',$request->id)->first();

    $data = [
        'title' => 'Welcome to Tutsmake.com',
        'date' => date('m/d/Y'),
        'datos'=> $tbSolPreLibro,
    ];
    $pdf = PDF::loadView('tb-sol-pre-libro.soli', $data);
    return $pdf->download('solicitud.pdf');



}
*/

    /**
     *
     *
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbSolPreLibro = TbSolPreLibro::find($id);

        return view('tb-sol-pre-libro.show', compact('tbSolPreLibro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbSolPreLibro = TbSolPreLibro::find($id);

        return view('tb-sol-pre-libro.edit', compact('tbSolPreLibro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbSolPreLibro $tbSolPreLibro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbSolPreLibro $tbSolPreLibro)
    {
        request()->validate(TbSolPreLibro::$rules);

        $tbSolPreLibro->update($request->all());

        return redirect()->route('tb-sol-pre-libros.index')
            ->with('success', 'TbSolPreLibro updated successfully');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbSolPreLibro = TbSolPreLibro::find($id)->delete();

        return redirect()->route('tb-sol-pre-libros.index')
            ->with('success', 'TbSolPreLibro deleted successfully');
    }



public function crear_form_Sol(Request $request){

    $fechaActual = Carbon::now(); // Esto obtendrá la fecha y hora actual
    $fechaSol = $fechaActual->format('Y-m-d'); // Formato Y-m-d para guardar solo la fecha

    $tbFormSol =  tb_form_sol::create([
        'id_us' => Auth::user()->id,
        'gci' => $request->input('gci'),
        'gcre' => $request->input('gcre'),
        'activi' => $request->input('activi'),
        'des1' => $request->input('desc'),
        'des2' => $request->input('desc1'),
        'des3' => $request->input('desc2'),
        'des4' => $request->input('desc3'),
        'cant1' => $request->input('cant'),
        'cant2' => $request->input('cant1'),
        'cant3' => $request->input('cant2'),
        'cant4' => $request->input('cant3'),
        'cod1' => $request->input('cod'),
        'cod2' => $request->input('cod1'),
        'cod3' => $request->input('cod2'),
        'cod4' => $request->input('cod3'),
        'obs1' => $request->input('obs'),
        'obs2' => $request->input('obs1'),
        'obs3' => $request->input('obs2'),
        'obs4' => $request->input('obs3'),
        'estde'=>$request->input('est'),
        'estado' => 'SIN ATENDER',
        'carrera' => $request->input('carr'),
        'area' => $request->input('carr'),
        'cod_est' => $request->input('cod'),
        'cel' => $request->input('cel'),
        'sem' => $request->input('sem'),
        'domicilio' => $request->input('dom'),
        'fecha_sol' => $fechaSol,
     
        
    ]);

    // Guarda el registro en la base de datos
  $tbFormSol->save(); 

  $datos = vista_formalario_mat::where('id_formsol','=', $tbFormSol->id_formsol)->get();
     
  $data = [
      'title' => 'Welcome to Tutsmake.com',
      'date' => date('m/d/Y'),
      'datos'=> $datos,
  ];
  $pdf = PDF::loadView('tb-form-sol.pdf', $data);
  return $pdf->download('tb-form-sol.pdf');

}


     public function pdf_impr()
     {
        $datos = vista_formalario_mat::latest('created_at')->first();


         $data = [
             'title' => 'Welcome to Tutsmake.com',
             'date' => date('m/d/Y'),
             'datos'=> $datos,
         ];
         $pdf = PDF::loadView('tb-form-sol.pdf', $data);
         return $pdf->download('tb-form-sol.pdf');
     
     
     
     
     
     }


   
 
     
public function crear_for_bi(Request $request)
{
    // Validar los datos del formulario si es necesario

    // Crear una nueva instancia del modelo TbFormMatBio y asignar los datos del formulario
    $tbFormMatBio =  TbFormMatBio::create([
        'id_us' => Auth::user()->id,
        'titlo_lib' => $request->input('tit'),
        'autor' => $request->input('autor'),
        'edicion' => $request->input('edicion'),
        'anio' => $request->input('anio'),
        'editorial' => $request->input('edi'),
        'nom_lug_com' => $request->input('dir_comp'),
        'costo' => $request->input('costo'),
        'materia' => $request->input('mat'),
        'estado' => 'SIN ATENDER',
    ]);

  
    $datos = vista_from_sol_bi::where('id_mab','=', $tbFormMatBio->id_mab)->get();
     
    $data = [
        'title' => 'Welcome to Tutsmake.com',
        'date' => date('m/d/Y'),
        'datos'=> $datos,
    ];
    $pdf = PDF::loadView('tb-form-mat-bio.pdf', $data);
    return $pdf->download('tb-form-mat-bio.pdf');



}



}
