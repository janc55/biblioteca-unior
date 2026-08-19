<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbSolPreLibro
 *
 * @property $id_solib
 * @property $id_us
 * @property $fecha_sol
 * @property $hora_sol
 * @property $fecha_Dev
 * @property $hora_dev
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbSolPreLibro extends Model
{
    protected $primaryKey = 'id_solib';
    protected $table="tb_sol_pre_libro";
    static $rules = [
		'id_solib' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_solib','id_us','fecha_sol','hora_sol','fecha_Dev','hora_dev','estado','id_lib','fech_lim'];



}
