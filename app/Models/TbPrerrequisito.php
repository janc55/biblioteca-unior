<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPrerrequisito
 *
 * @property $id_prerreq
 * @property $id_carre_mater
 * @property $id_materia
 * @property $created_at
 * @property $updated_at
 *
 * @property TbCarreMateria $tbCarreMateria
 * @property TbMateria $tbMateria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbPrerrequisito extends Model
{
    protected $primaryKey = 'id_prerreq';
    static $rules = [
		'id_prerreq' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_prerreq','id_carre_mater','id_materia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbCarreMateria()
    {
        return $this->hasOne('App\Models\TbCarreMateria', 'id_carre_mater', 'id_carre_mater');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbMateria()
    {
        return $this->hasOne('App\Models\TbMateria', 'id_materia', 'id_materia');
    }
    

}
