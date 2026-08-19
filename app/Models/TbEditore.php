<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEditore
 *
 * @property $id_edi
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbEditore extends Model
{
    
    static $rules = [
		'id_edi' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_edi','nombre'];



}
