<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbGenero
 *
 * @property $id_ge
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbGenero extends Model
{

    protected $primaryKey = 'id_ge';
    protected $table="tb_genero";
    static $rules = [
		'id_ge' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ge','nombre'];



}
