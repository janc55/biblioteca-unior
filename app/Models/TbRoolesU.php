<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbRoolesU
 *
 * @property $id_ru
 * @property $rool
 * @property $permisos
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbRoolesU extends Model
{
  protected $table = 'tb_rooles_us';
  protected $primaryKey = 'id_ru';
  
  public $timestamps = false;
    static $rules = [
		'id_ru' => 'required',
		'rool' => 'required',
		'permisos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ru','rool','permisos'];



}
