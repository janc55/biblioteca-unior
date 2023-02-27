<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEstCarr
 *
 * @property $id_est_carr
 * @property $id_est
 * @property $id_carre
 * @property $id_turno
 * @property $id_pl
 * @property $created_at
 * @property $updated_at
 *
 * @property Tbplane $tbplane
 * @property TbCarrera $tbCarrera
 * @property TbEstudiante $tbEstudiante
 * @property TbTurno $tbTurno
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbEstCarr extends Model
{
    
    protected $table = "tb_est_carr";
    static $rules = [
		'id_est_carr' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_est_carr','id_est','id_carre','id_turno','id_pl'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbplane()
    {
        return $this->hasOne('App\Models\Tbplane', 'id_pl', 'id_pl');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbCarrera()
    {
        return $this->hasOne('App\Models\TbCarrera', 'id_carre', 'id_carre');
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
    public function tbTurno()
    {
        return $this->hasOne('App\Models\TbTurno', 'id_turno', 'id_turno');
    }
    

}
