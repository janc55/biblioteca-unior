<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbAsignacionMat
 *
 * @property $id_asig_mat
 * @property $id_doc
 * @property $id_carre
 * @property $id_materia
 * @property $id_turno
 * @property $id_gestion
 * @property $paralelo_asig_mat
 * @property $tipo_asig_mat
 * @property $obs_asig_mat
 * @property $created_at
 * @property $updated_at
 *
 * @property TbCarrera $tbCarrera
 * @property TbDocente $tbDocente
 * @property TbGestione $tbGestione
 * @property TbMateria $tbMateria
 * @property TbTurno $tbTurno
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbAsignacionMat extends Model
{
     
    protected $primaryKey = 'id_asig_mat';
    static $rules = [
		'id_asig_mat' => 'required',
		'id_doc' => 'required',
		'id_carre' => 'required',
		'id_materia' => 'required',
		'id_turno' => 'required',
		'id_gestion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_asig_mat','id_doc','id_carre','id_materia','id_turno','id_gestion','paralelo_asig_mat','tipo_asig_mat','obs_asig_mat'];


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
    public function tbDocente()
    {
        return $this->hasOne('App\Models\TbDocente', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbGestione()
    {
        return $this->hasOne('App\Models\TbGestione', 'id_gestion', 'id_gestion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbMateria()
    {
        return $this->hasOne('App\Models\TbMateria', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbTurno()
    {
        return $this->hasOne('App\Models\TbTurno', 'id_turno', 'id_turno');
    }
    

}
