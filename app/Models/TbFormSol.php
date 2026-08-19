<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbFormSol
 *
 * @property $id_formsol
 * @property $id_us
 * @property $gci
 * @property $gcre
 * @property $activi
 * @property $des1
 * @property $des2
 * @property $des3
 * @property $des4
 * @property $cant1
 * @property $cant2
 * @property $cant3
 * @property $cant4
 * @property $cod1
 * @property $cod2
 * @property $cod3
 * @property $cod4
 * @property $obs1
 * @property $obs2
 * @property $obs3
 * @property $obs4
 * @property $fec_sa
 * @property $hora_sa
 * @property $estsa
 * @property $fec_de
 * @property $hora_de
 * @property $estde
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property TbUser $tbUser
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbFormSol extends Model
{
  protected $primaryKey = 'id_formsol';
  protected $table="tb_form_sol";
    static $rules = [
		'id_formsol' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_formsol','id_us','gci','gcre','activi','des1','des2','des3','des4','cant1','cant2','cant3','cant4','cod1','cod2','cod3','cod4','obs1','obs2','obs3','obs4','fec_sa','hora_sa','estsa','fec_de','hora_de','estde','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbUser()
    {
        return $this->hasOne('App\Models\TbUser', 'id', 'id_us');
    }
    

}
