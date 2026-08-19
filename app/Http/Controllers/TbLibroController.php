<?php

namespace App\Http\Controllers;

use App\Models\TbLibro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\TbPresLibro;

/**
 * Class TbLibroController
 * @package App\Http\Controllers
 */
class TbLibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {

        $this->middleware('auth');
        $DATOS=auth()->user();
   /*     if($DATOS->tipo == "Admin"){


        }else{

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken(); //probada-cumple esta funci¨®n generando un nuevo TOKEN
            return redirect('/login');


        }*/


     }
    public function index()
    {
        $tbLibros = TbLibro::where('tp', '=', '1')
        ->orderByRaw("id_libro DESC")
        ->take(200)
        ->get();
    
    

        return view('tb-libro.index', compact('tbLibros'));
    }




    public function indexinv7(Request $request)
    {
        $tbLibros = TbLibro::where('tp', '=', '7')
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
    
    

        return view('tb-libro.indexinv7', compact('tbLibros'));
    }



    public function indexbol8(Request $request)
    {
        $tbLibros = TbLibro::where('tp', '=', '8')
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
    
    

        return view('tb-libro.indexbol8', compact('tbLibros'));
    }



    public function indexga9(Request $request)
    {
        $tbLibros = TbLibro::where('tp', '=', '9')
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
    
    

        return view('tb-libro.indexga9', compact('tbLibros'));
    }


    public function indexta10(Request $request)
    {
        $tbLibros = TbLibro::where('tp', '=', '10')
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
    
    

        return view('tb-libro.indextra10', compact('tbLibros'));
    }

    public function archivados()
    {
        $tbLibros = TbLibro::Where('tp','=','0')->orWhere('en_arch','>','0')->paginate();

        return view('tb-libro.archivados', compact('tbLibros'))
            ->with('i', (request()->input('page', 1) - 1) * $tbLibros->perPage());
    }


    public function filtrar_arch(Request $request)
    {
        $tbLibros = TbLibro::where('tp', '=', '5')
    ->where('en_arch', '>', '0')
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

        return view('tb-libro.indexarch', compact('tbLibros'));
    }
    public function filtrar_dig(Request $request)
    {
        $tbLibros = TbLibro::where('tp', '=', '2')
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
    

        return view('tb-libro.indexdig', compact('tbLibros'));
    }
    public function filtrar_rev(Request $request)
    {
        $tbLibros = TbLibro::where('tp', '=', '6')
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
    

        return view('tb-libro.indexrev', compact('tbLibros'));
    }
    public function filtrar_tes(Request $request)
    {
       $tbLibros = TbLibro::where('tp', '=', '3')
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


        return view('tb-libro.indextes', compact('tbLibros'));
    }


    public function filtrar_virt(Request $request)
    {
    $tbLibros = TbLibro::get()->where('tp','=','4');

        return view('tb-libro.indexvirt', compact('tbLibros'));
    }






    public function filtrar_archivados(Request $request)
    {
        $tbLibros = TbLibro::where('tp', '=', '1')
    ->where('en_arch', '>', '0')
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

        return view('tb-libro.archivados', compact('tbLibros'));
    }





    public function filtrar_lib(Request $request)
    {
       $busqueda = $request->bus;

$tbLibros = TbLibro::where('tp', '1')
    ->where(function ($query) use ($busqueda) {
        $query->where('titulo', 'LIKE', "%$busqueda%")
            ->orWhere('isbm', 'LIKE', "%$busqueda%")
            ->orWhere('codigo', 'LIKE', "%$busqueda%")
            ->orWhere('autores', 'LIKE', "%$busqueda%")
            ->orWhere('genero', 'LIKE', "%$busqueda%")
            ->orWhere('editorial', 'LIKE', "%$busqueda%")
            ->orWhere('etiquetas', 'LIKE', "%$busqueda%")
            ->orWhere('ubicacion', 'LIKE', "%$busqueda%");
    })
    ->take(200)
    ->get();

    


        return view('tb-libro.index', compact('tbLibros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.create', compact('tbLibro','pres'));
    }

    public function createlibros()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.create', compact('tbLibro','pres'));
    }




 
    
    public function create7()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.create7', compact('tbLibro','pres'));
    }

    public function create8()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.create8', compact('tbLibro','pres'));
    }

    public function create9()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.create9', compact('tbLibro','pres'));
    }

    public function create10()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.create10', compact('tbLibro','pres'));
    }




    public function createtesis()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.createtesis', compact('tbLibro','pres'));
    }

    public function createvirtual()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.createvirtual', compact('tbLibro','pres'));
    }

    public function createdigital()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.createdigital', compact('tbLibro','pres'));
    }


    public function createinst()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.createinst', compact('tbLibro','pres'));
    }

    public function createrev()
    {



        $pres =TbPresLibro::get()->where('des_pres','<>','TESIS')->where('des_pres','<>','DIGITAL')->where('des_pres','<>','VIRTUAL');
        $tbLibro = new TbLibro();
        return view('tb-libro.create_rev', compact('tbLibro','pres'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre ="";
        $nombre1 ="";


        if($request->hasFile("img")){
            $file=$request->file("img");
            $nombre = "libro_".time().".".$file->guessExtension();
            $request->imagen=$nombre;
            $ruta = public_path("libro/".$nombre);
            if($file->guessExtension()=="jpg"){
                 copy($file, $ruta);

                }else{
                   $request->imagen=$nombre;
                dd("NO ES UN Libro");
            }
        }

                if($request->hasFile("pdf")){
                    $file1=$request->file("pdf");
                    $nombre1 = "libro_".time().".".$file1->guessExtension();
                    $ruta1 = public_path("libro/".$nombre1);
                    $request->pdf=$nombre1;
                    if($file1->guessExtension()=="pdf"){
                         copy($file1, $ruta1);

                     }else{
                        $request->pdf=$nombre1;
                        dd("NO ES UN PDF");
                    }

                }



        $tbLibro = TbLibro::create($request->all());
        $tbLibro->update([
            'imagen'            => $nombre,
            'pdf'    => $nombre1,
        ]);
        return back()->with('success', 'Registro Exito.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbLibro = TbLibro::find($id);

        return view('tb-libro.show', compact('tbLibro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbLibro = TbLibro::find($id);
        $pres =TbPresLibro::get();

        return view('tb-libro.edit', compact('tbLibro','pres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbLibro $tbLibro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbLibro $tbLibro)
    {

       // $teachers=$request->all();
      //  $teacher->save();
      $nombre ="";
        $nombre1 ="";


        if ($request->hasFile("img")) {
            $file = $request->file("img");
            $nombre = "libro_" . time() . "." . $file->guessExtension();
            $request->imagen = $nombre;
            $ruta = public_path("libro/" . $nombre);
            
            // Lista de extensiones permitidas
            $extensionesPermitidas = ["jpg", "jpeg", "png", "gif", "bmp"]; // Agrega aqu¨ª las extensiones que desees permitir
        
            if (in_array(strtolower($file->guessExtension()), $extensionesPermitidas)) {
                // Mueve el archivo cargado a la ruta deseada
                $file->move(public_path("libro"), $nombre);
            } else {
                dd("NO ES UN formato de imagen permitido");
            }
        }
                if($request->hasFile("pdf")){
                    $file1=$request->file("pdf");
                    $nombre1 = "libro_".time().".".$file1->guessExtension();
                    $ruta1 = public_path("libro/".$nombre1);
                    $request->pdf=$nombre1;
                    if($file1->guessExtension()=="pdf"){
                         copy($file1, $ruta1);

                     }else{
                        $request->pdf=$nombre1;
                        dd("NO ES UN PDF");
                    }

                }

                $data = $request->all();

             
                $data['imagen']=$nombre;
                $data['pdf']=$nombre1;
        $tbLibros = TbLibro::where('id_libro','=',$request->id_libro)->first();;
        $tbLibros->update($data);

      
        return back()->with('success', 'Se modific¨® correctamente.');

    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbLibro = TbLibro::find($id)->delete();

        return redirect()->route('libros.index')
            ->with('success', 'TbLibro deleted successfully');
    }
}
