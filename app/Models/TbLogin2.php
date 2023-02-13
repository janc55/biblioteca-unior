<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbLogin2
 *
 * @property $id
 * @property $nombre
 * @property $cuenta
 * @property $contrasenia
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbLogin2 extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'cuenta' => 'required',
		'contrasenia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cuenta','contrasenia'];



}
