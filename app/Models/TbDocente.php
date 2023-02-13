<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbDocente
 *
 * @property $id_doc
 * @property $nombre_doc
 * @property $ape_p_doc
 * @property $ape_m_doc
 * @property $cod_doc
 * @property $ci
 * @property $expedido
 * @property $grado
 * @property $fec_nac_doc
 * @property $tel_dom_doc
 * @property $cel_doc
 * @property $dom_doc
 * @property $lug_doc
 * @property $dir_trab_doc
 * @property $tel_trab_doc
 * @property $email_doc
 * @property $estado_civ_doc
 * @property $nacional_doc
 * @property $obser_doc
 * @property $foto_doc
 * @property $created_at
 * @property $updated_at
 *
 * @property TbAsignacionMat[] $tbAsignacionMats
 * @property TbDeposito[] $tbDepositos
 * @property TbDesignacione[] $tbDesignaciones
 * @property TbDocenteCuenta[] $tbDocenteCuentas
 * @property TbIngreso[] $tbIngresos
 * @property TbListaAlmacene[] $tbListaAlmacenes
 * @property TbModuloDocFecha[] $tbModuloDocFechas
 * @property TbPapeleta[] $tbPapeletas
 * @property TbPlanillaDoc[] $tbPlanillaDocs
 * @property TbPresupuesto[] $tbPresupuestos
 * @property TbRegisDocumenDoc[] $tbRegisDocumenDocs
 * @property TbRequerimiento[] $tbRequerimientos
 * @property TbRevalida[] $tbRevalidas
 * @property TbTrib[] $tbTribs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbDocente extends Model
{
    
    static $rules = [
		'id_doc' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_doc','nombre_doc','ape_p_doc','ape_m_doc','cod_doc','ci','expedido','grado','fec_nac_doc','tel_dom_doc','cel_doc','dom_doc','lug_doc','dir_trab_doc','tel_trab_doc','email_doc','estado_civ_doc','nacional_doc','obser_doc','foto_doc'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbAsignacionMats()
    {
        return $this->hasMany('App\Models\TbAsignacionMat', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbDepositos()
    {
        return $this->hasMany('App\Models\TbDeposito', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbDesignaciones()
    {
        return $this->hasMany('App\Models\TbDesignacione', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbDocenteCuentas()
    {
        return $this->hasMany('App\Models\TbDocenteCuenta', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbIngresos()
    {
        return $this->hasMany('App\Models\TbIngreso', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbListaAlmacenes()
    {
        return $this->hasMany('App\Models\TbListaAlmacene', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbModuloDocFechas()
    {
        return $this->hasMany('App\Models\TbModuloDocFecha', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbPapeletas()
    {
        return $this->hasMany('App\Models\TbPapeleta', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbPlanillaDocs()
    {
        return $this->hasMany('App\Models\TbPlanillaDoc', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbPresupuestos()
    {
        return $this->hasMany('App\Models\TbPresupuesto', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbRegisDocumenDocs()
    {
        return $this->hasMany('App\Models\TbRegisDocumenDoc', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbRequerimientos()
    {
        return $this->hasMany('App\Models\TbRequerimiento', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbRevalidas()
    {
        return $this->hasMany('App\Models\TbRevalida', 'id_doc', 'id_doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbTribs()
    {
        return $this->hasMany('App\Models\TbTrib', 'id_doc', 'id_doc');
    }
    

}
