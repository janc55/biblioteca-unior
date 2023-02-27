<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbAsignacionMatEst
 *
 * @property $id_asig_mat_est
 * @property $id_asig_mat
 * @property $id_est
 * @property $eval_p1
 * @property $eval_p2
 * @property $eval_fin
 * @property $eval_2t
 * @property $obs_asig
 * @property $created_at
 * @property $updated_at
 *
 * @property TbAsignacionMat $tbAsignacionMat
 * @property TbEstudiante $tbEstudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbAsignacionMatEst extends Model
{
    
    static $rules = [
		'id_asig_mat_est' => 'required',
		'id_asig_mat' => 'required',
		'id_est' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_asig_mat_est','id_asig_mat','id_est','eval_p1','eval_p2','eval_fin','eval_2t','obs_asig'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbAsignacionMat()
    {
        return $this->hasOne('App\Models\TbAsignacionMat', 'id_asig_mat', 'id_asig_mat');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbEstudiante()
    {
        return $this->hasOne('App\Models\TbEstudiante', 'id_est', 'id_est');
    }
    

}
