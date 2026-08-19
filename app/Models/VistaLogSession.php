<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VistaLogSession
 *
 * @property $id
 * @property $user_id
 * @property $fecha_hora
 * @property $ip
 * @property $created_at
 * @property $updated_at
 * @property $nombre
 * @property $ci
 * @property $cel
 * @property $carrera
 * @property $email
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class VistaLogSession extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','fecha_hora','ip','nombre','ci','cel','carrera','email'];

    protected $table="vista_log_session";

}
