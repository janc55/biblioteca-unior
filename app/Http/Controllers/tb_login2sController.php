<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_docentes;

class tb_login2sController extends Controller
{
     /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plain = $credentials['password'];
        $hashed_value = $user->getAuthPassword();
        return $hashed_value == md5($plain);
    }
    
    
    
    
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // public function index()
    // {
    //     $usuarioEmail = auth()->user()->email;
    //     $notas = Nota::where('usuario', $usuarioEmail)->paginate(5);
    //     return view('notas.lista',compact('notas'));

    //     $ci_usuario   = auth()->user()->ci;
    //     $pass_usuario = auth()->user()->doc_pass;   
    //     $tb_docentes=tb_docentes::where('ci',$ci_usuario)->('doc_pass',$pass_usuario);
    // }
    // public function create()
    // {
    //     return view('notas.crear');
    // }
    // public function store(Request $request)
    // {

    //     $nota = new Nota();
    //     $nota->nombre = $request->nombre;
    //     $nota->descripcion = $request->descripcion;
    //     $nota->usuario = auth()->user()->email;
    //     $nota->save();

    //     return back()->with('mensaje', 'Nota Agregada!');
    // }

   
}
