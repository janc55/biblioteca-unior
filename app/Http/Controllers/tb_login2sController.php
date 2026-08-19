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

    public function retorno_datos(Request $request)
    { 
    $ci  =$request->ci;   //Guardo el valor1 que recibo del formulario
    $pass=$request->pass; //Guardo el valor2 que recibo del formulario

    $dato1 = tb_docentes::get()->where('ci', '=', $ci);
    $dato = $dato1->first();
    echo $dato;
    echo $dato->ci;
    if($dato->ci == $ci && $dato->doc_pass==$pass )
        {
            return redirect('/portal');
        }
        else
        {
            return redirect('/login');
            
        }
    }
   
}
