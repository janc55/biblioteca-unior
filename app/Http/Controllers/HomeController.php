<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\LoginRegistro;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
   
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


     function getLocalIP() {
        // Obtener la dirección IP del cliente desde la variable $_SERVER
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
    
        // Si la dirección IP es una dirección IP privada (rango de direcciones IP locales), obtén la dirección IP del servidor
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
            $ip = $_SERVER['SERVER_ADDR'];
        }
    
        return $ip;
    }

    function getMacAddress() {
        $output = shell_exec('ipconfig /all'); // Comando para Windows, en sistemas Unix/Linux, puedes usar "ifconfig" o "ip a"
        $pattern = '/Physical Address\s+:\s(.*)/i';
        preg_match($pattern, $output, $matches);
    
        if (isset($matches[1])) {
            return str_replace('-', ':', $matches[1]);
        }
    
        return null;
    }
    

    public function index(Request $request)
    {
        $nombreEquipo = gethostname();
        $ipLocal =$request->ip();
        $DATOS=auth()->user();
        $noticia = Noticia::get();
        $ultimaNoticia = Noticia::latest('id_not')->first();
        LoginRegistro::create([
            'user_id' => $DATOS->id,
            'fecha_hora' => now(),
            'ip' => $ipLocal ." - ".$nombreEquipo,
            // Otros campos que desees registrar
        ]);

        return view('inicio.home',compact('DATOS','noticia','ultimaNoticia'));
    }
}
