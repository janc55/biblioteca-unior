<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEtiqueta
 *
 * @property $id_eti
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbEtiqueta extends Model
{
    
    static $rules = [
		'id_eti' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_eti','nombre'];



}
