<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCategoriaMat
 *
 * @property $id_cat_mat
 * @property $nombre_cat_mat
 * @property $created_at
 * @property $updated_at
 *
 * @property TbCarreMateria[] $tbCarreMaterias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbCategoriaMat extends Model
{
  protected $primaryKey = 'id_cat_mat';
    static $rules = [
		'id_cat_mat' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cat_mat','nombre_cat_mat'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbCarreMaterias()
    {
        return $this->hasMany('App\Models\TbCarreMateria', 'id_cat_mat', 'id_cat_mat');
    }
    

}
