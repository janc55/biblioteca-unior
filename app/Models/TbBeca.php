<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbBeca
 *
 * @property $id_beca
 * @property $nombre_beca
 * @property $sigla_beca
 * @property $habi_beca
 * @property $prom_beca
 * @property $desc_beca
 * @property $created_at
 * @property $updated_at
 *
 * @property TbConvenio[] $tbConvenios
 * @property TbEstBecado[] $tbEstBecados
 * @property TbInscripcione[] $tbInscripciones
 * @property TbInsBeca[] $tbInsBecas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbBeca extends Model
{
    protected $primaryKey = 'id_beca';
    static $rules = [
		'id_beca' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_beca','nombre_beca','sigla_beca','habi_beca','prom_beca','desc_beca'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbConvenios()
    {
        return $this->hasMany('App\Models\TbConvenio', 'id_beca', 'id_beca');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEstBecados()
    {
        return $this->hasMany('App\Models\TbEstBecado', 'id_beca', 'id_beca');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbInscripciones()
    {
        return $this->hasMany('App\Models\TbInscripcione', 'id_beca', 'id_beca');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbInsBecas()
    {
        return $this->hasMany('App\Models\TbInsBeca', 'id_beca', 'id_beca');
    }
    

}
