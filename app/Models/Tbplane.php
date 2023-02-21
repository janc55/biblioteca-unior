<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbplane
 *
 * @property $id_pl
 * @property $nombre_plan
 * @property $cuotas
 * @property $monto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tbplane extends Model
{
  protected $primaryKey = 'id_pl';

    static $rules = [
		'id_pl' => 'required',
		'nombre_plan' => 'required',
		'cuotas' => 'required',
		'monto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pl','nombre_plan','cuotas','monto'];



}
