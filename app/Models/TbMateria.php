<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbMateria
 *
 * @property $id_materia
 * @property $codigo_mat
 * @property $nombre_mat
 * @property $habi_mat
 * @property $created_at
 * @property $updated_at
 *
 * @property TbAsignacionMat[] $tbAsignacionMats
 * @property TbCalendario[] $tbCalendarios
 * @property TbCarreMateria[] $tbCarreMaterias
 * @property TbCarreMatDoc[] $tbCarreMatDocs
 * @property TbDesignacione[] $tbDesignaciones
 * @property TbExamenSufi[] $tbExamenSufis
 * @property TbListaAlmacene[] $tbListaAlmacenes
 * @property TbMateriasPendiente[] $tbMateriasPendientes
 * @property TbNotaAux[] $tbNotaAuxs
 * @property TbNotaEvalua[] $tbNotaEvaluas
 * @property TbPrerrequisito[] $tbPrerrequisitos
 * @property TbRequerimiento[] $tbRequerimientos
 * @property TbRevalida[] $tbRevalidas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbMateria extends Model
{
    protected $primaryKey = 'id_materia';
    public $incrementing = TRUE;

    static $rules = [
		'id_materia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_materia','codigo_mat','nombre_mat','habi_mat'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbAsignacionMats()
    {
        return $this->hasMany('App\Models\TbAsignacionMat', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbCalendarios()
    {
        return $this->hasMany('App\Models\TbCalendario', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbCarreMaterias()
    {
        return $this->hasMany('App\Models\TbCarreMateria', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbCarreMatDocs()
    {
        return $this->hasMany('App\Models\TbCarreMatDoc', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbDesignaciones()
    {
        return $this->hasMany('App\Models\TbDesignacione', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbExamenSufis()
    {
        return $this->hasMany('App\Models\TbExamenSufi', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbListaAlmacenes()
    {
        return $this->hasMany('App\Models\TbListaAlmacene', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbMateriasPendientes()
    {
        return $this->hasMany('App\Models\TbMateriasPendiente', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbNotaAuxs()
    {
        return $this->hasMany('App\Models\TbNotaAux', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbNotaEvaluas()
    {
        return $this->hasMany('App\Models\TbNotaEvalua', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbPrerrequisitos()
    {
        return $this->hasMany('App\Models\TbPrerrequisito', 'id_materia_s', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbRequerimientos()
    {
        return $this->hasMany('App\Models\TbRequerimiento', 'id_materia', 'id_materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbRevalidas()
    {
        return $this->hasMany('App\Models\TbRevalida', 'id_materia', 'id_materia');
    }
    

}
