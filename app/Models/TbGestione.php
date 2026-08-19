<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbGestione
 *
 * @property $id_gestion
 * @property $periodo_gestion
 * @property $anio_gestion
 *  @property $estado_gestion
 * @property $created_at
 * @property $updated_at
 *
 * @property TbBoleta[] $tbBoletas
 * @property TbGestionPago[] $tbGestionPagos
 * @property TbNuevoPoa[] $tbNuevoPoas
 * @property TbPagoEfectivo[] $tbPagoEfectivos
 * @property TbPlanFodaPoaPre[] $tbPlanFodaPoaPres
 * @property TbPre[] $tbPres
 * @property TbPrograma[] $tbProgramas
 * @property TbResumenPlanilla[] $tbResumenPlanillas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbGestione extends Model
{

    protected $primaryKey = 'id_gestion';
    
    static $rules = [
		'id_gestion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_gestion','periodo_gestion','anio_gestion','estado_gestion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbBoletas()
    {
        return $this->hasMany('App\Models\TbBoleta', 'id_gestion', 'id_gestion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbGestionPagos()
    {
        return $this->hasMany('App\Models\TbGestionPago', 'id_gestion', 'id_gestion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbNuevoPoas()
    {
        return $this->hasMany('App\Models\TbNuevoPoa', 'id_gestion', 'id_gestion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbPagoEfectivos()
    {
        return $this->hasMany('App\Models\TbPagoEfectivo', 'id_gestion', 'id_gestion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbPlanFodaPoaPres()
    {
        return $this->hasMany('App\Models\TbPlanFodaPoaPre', 'id_gestion', 'id_gestion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbPres()
    {
        return $this->hasMany('App\Models\TbPre', 'id_gestion', 'id_gestion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbProgramas()
    {
        return $this->hasMany('App\Models\TbPrograma', 'id_gestion', 'id_gestion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbResumenPlanillas()
    {
        return $this->hasMany('App\Models\TbResumenPlanilla', 'id_gestion', 'id_gestion');
    }
    

}
