<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioAdministrativo
 *
 * @property $id
 * @property $nombre
 * @property $ci
 * @property $contrasena
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsuarioAdministrativo extends Model
{

    protected $table="usuario_administrativo";

    static $rules = [
		'nombre' => 'required',
		'ci' => 'required',
		'contrasena' => 'required',
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ci','contrasena','tipo'];



}
