<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbBoleta
 *
 * @property $id_boleta
 * @property $id_est
 * @property $fec_reg_boleta
 * @property $fec_depos_boleta
 * @property $id_cuenta
 * @property $id_gestion
 * @property $nro_depos
 * @property $monto_boleta
 * @property $bs_boleta
 * @property $obs_boleta
 * @property $fec_trans_boleta
 * @property $terminal_boleta
 * @property $created_at
 * @property $updated_at
 *
 * @property TbCuenta $tbCuenta
 * @property TbEstudiante $tbEstudiante
 * @property TbGestione $tbGestione
 * @property TbInscripcione[] $tbInscripciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbBoleta extends Model
{
    protected $primaryKey = 'id_boleta';

    static $rules = [
		'id_boleta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_boleta','id_est','fec_reg_boleta','fec_depos_boleta','id_cuenta','id_gestion','nro_depos','monto_boleta','bs_boleta','obs_boleta','fec_trans_boleta','terminal_boleta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbCuenta()
    {
        return $this->hasOne('App\Models\TbCuenta', 'id_cuenta', 'id_cuenta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbEstudiante()
    {
        return $this->hasOne('App\Models\TbEstudiante', 'id_est', 'id_est');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbGestione()
    {
        return $this->hasOne('App\Models\TbGestione', 'id_gestion', 'id_gestion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbInscripciones()
    {
        return $this->hasMany('App\Models\TbInscripcione', 'id_boleta', 'id_boleta');
    }
    

}
