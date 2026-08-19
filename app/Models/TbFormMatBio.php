<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbFormMatBio
 *
 * @property $id_mab
 * @property $id_us
 * @property $titlo_lib
 * @property $autor
 * @property $edicion
 * @property $anio
 * @property $editorial
 * @property $nom_lug_com
 * @property $costo
 * @property $materia
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property TbUser $tbUser
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbFormMatBio extends Model
{
    protected $primaryKey = 'id_mab';
    protected $table="tb_form_mat_bio";
    static $rules = [
		'id_mab' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_mab','id_us','titlo_lib','autor','edicion','anio','editorial','nom_lug_com','costo','materia','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbUser()
    {
        return $this->hasOne('App\Models\TbUser', 'id', 'id_us');
    }
    

}
