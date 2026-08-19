<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCarreMateria
 *
 * @property $id_carre_mater
 * @property $id_carre
 * @property $id_materia
 * @property $id_sem
 * @property $cred_materia
 * @property $ht_materia
 * @property $hp_materia
 * @property $tse_materia
 * @property $tsm_materia
 * @property $id_cat_mat
 * @property $are_materia
 * @property $ord_materia
 * @property $obs_materia
 * @property $id_planE
 * @property $created_at
 * @property $updated_at
 *
 * @property TbCarrera $tbCarrera
 * @property TbCategoriaMat $tbCategoriaMat
 * @property TbMateria $tbMateria
 * @property TbPlane $tbPlane
 * @property TbSemestre $tbSemestre
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbCarreMateria extends Model
{
    protected $primaryKey = 'id_carre_mater';
    static $rules = [
		'id_carre_mater' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_carre_mater','id_carre','id_materia','id_sem','cred_materia','ht_materia','hp_materia','tse_materia','tsm_materia','id_cat_mat','are_materia','ord_materia','obs_materia','id_planE'];


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
    public function tbCategoriaMat()
    {
        return $this->hasOne('App\Models\TbCategoriaMat', 'id_cat_mat', 'id_cat_mat');
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
    public function tbPlane()
    {
        return $this->hasOne('App\Models\TbPlane', 'id_planE', 'id_planE');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbSemestre()
    {
        return $this->hasOne('App\Models\TbSemestre', 'id_sem', 'id_sem');
    }
    

}
