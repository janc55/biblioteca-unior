<?php

namespace App\Listeners;

use App\Events\Authenticated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\LoginRegistro;
class LogLoginRegistro
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Authenticated  $event
     * @return void
     */
    public function handle(Authenticated $event)
    {
       
        
     //   $user = $event->user;

        // Crear un nuevo registro en la tabla login_registros
     

    }
}
