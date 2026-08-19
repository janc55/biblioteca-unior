<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbAutore
 *
 * @property $id_au
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbAutore extends Model
{
    
    static $rules = [
		'id_au' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_au','nombre'];



}
