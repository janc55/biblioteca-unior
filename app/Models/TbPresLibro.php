<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPresLibro
 *
 * @property $id_pres
 * @property $des_pres
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbPresLibro extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_pres';
    protected $table="tb_pres_libro";
    static $rules = [
		'id_pres' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pres','des_pres'];



}
