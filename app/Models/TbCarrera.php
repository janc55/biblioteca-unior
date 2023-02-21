<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCarrera
 *
 * @property $id_carre
 * @property $nombre_carre
 * @property $sigla_carre
 * @property $habi_carre
 * @property $fec_carre
 * @property $imp_carre
 * @property $res_carre
 * @property $created_at
 * @property $updated_at
 *
 * @property TbAsignacionMat[] $tbAsignacionMats
 * @property TbCalendario[] $tbCalendarios
 * @property TbCarrerasEstudiante[] $tbCarrerasEstudiantes
 * @property TbCarreMateria[] $tbCarreMaterias
 * @property TbCarreMatDoc[] $tbCarreMatDocs
 * @property TbConvenio[] $tbConvenios
 * @property TbConvEstudiante[] $tbConvEstudiantes
 * @property TbDesignacione[] $tbDesignaciones
 * @property TbDeuda[] $tbDeudas
 * @property TbEgrTitulado[] $tbEgrTitulados
 * @property TbEgrTitulo[] $tbEgrTitulos
 * @property TbEstAbandono[] $tbEstAbandonos
 * @property TbEstBecado[] $tbEstBecados
 * @property TbEstCongelado[] $tbEstCongelados
 * @property TbEstDesercione[] $tbEstDeserciones
 * @property TbEstDiscapacitado[] $tbEstDiscapacitados
 * @property TbEstPreinscrito[] $tbEstPreinscritos
 * @property TbExamenSufi[] $tbExamenSufis
 * @property TbFacuCarrera[] $tbFacuCarreras
 * @property TbInscripcione[] $tbInscripciones
 * @property TbNotaAux[] $tbNotaAuxs
 * @property TbNotaEvalua[] $tbNotaEvaluas
 * @property TbPlanDescConv[] $tbPlanDescConvs
 * @property TbPlanFodaPoaPre[] $tbPlanFodaPoaPres
 * @property TbQueja[] $tbQuejas
 * @property TbRegisDocumento[] $tbRegisDocumentos
 * @property TbRegisDocumenDoc[] $tbRegisDocumenDocs
 * @property TbRevalida[] $tbRevalidas
 * @property TbTipoObligacionesEst[] $tbTipoObligacionesEsts
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbCarrera extends Model
{
    protected $primaryKey = 'id_carre';

    static $rules = [
		'id_carre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_carre','nombre_carre','sigla_carre','habi_carre','fec_carre','imp_carre','res_carre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbAsignacionMats()
    {
        return $this->hasMany('App\Models\TbAsignacionMat', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbCalendarios()
    {
        return $this->hasMany('App\Models\TbCalendario', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbCarrerasEstudiantes()
    {
        return $this->hasMany('App\Models\TbCarrerasEstudiante', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbCarreMaterias()
    {
        return $this->hasMany('App\Models\TbCarreMateria', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbCarreMatDocs()
    {
        return $this->hasMany('App\Models\TbCarreMatDoc', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbConvenios()
    {
        return $this->hasMany('App\Models\TbConvenio', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbConvEstudiantes()
    {
        return $this->hasMany('App\Models\TbConvEstudiante', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbDesignaciones()
    {
        return $this->hasMany('App\Models\TbDesignacione', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbDeudas()
    {
        return $this->hasMany('App\Models\TbDeuda', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEgrTitulados()
    {
        return $this->hasMany('App\Models\TbEgrTitulado', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEgrTitulos()
    {
        return $this->hasMany('App\Models\TbEgrTitulo', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEstAbandonos()
    {
        return $this->hasMany('App\Models\TbEstAbandono', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEstBecados()
    {
        return $this->hasMany('App\Models\TbEstBecado', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEstCongelados()
    {
        return $this->hasMany('App\Models\TbEstCongelado', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEstDeserciones()
    {
        return $this->hasMany('App\Models\TbEstDesercione', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEstDiscapacitados()
    {
        return $this->hasMany('App\Models\TbEstDiscapacitado', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEstPreinscritos()
    {
        return $this->hasMany('App\Models\TbEstPreinscrito', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbExamenSufis()
    {
        return $this->hasMany('App\Models\TbExamenSufi', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbFacuCarreras()
    {
        return $this->hasMany('App\Models\TbFacuCarrera', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbInscripciones()
    {
        return $this->hasMany('App\Models\TbInscripcione', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbNotaAuxs()
    {
        return $this->hasMany('App\Models\TbNotaAux', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbNotaEvaluas()
    {
        return $this->hasMany('App\Models\TbNotaEvalua', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbPlanDescConvs()
    {
        return $this->hasMany('App\Models\TbPlanDescConv', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbPlanFodaPoaPres()
    {
        return $this->hasMany('App\Models\TbPlanFodaPoaPre', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbQuejas()
    {
        return $this->hasMany('App\Models\TbQueja', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbRegisDocumentos()
    {
        return $this->hasMany('App\Models\TbRegisDocumento', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbRegisDocumenDocs()
    {
        return $this->hasMany('App\Models\TbRegisDocumenDoc', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbRevalidas()
    {
        return $this->hasMany('App\Models\TbRevalida', 'id_carre', 'id_carre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbTipoObligacionesEsts()
    {
        return $this->hasMany('App\Models\TbTipoObligacionesEst', 'id_carre', 'id_carre');
    }
    

}
