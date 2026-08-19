<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbSemestre
 *
 * @property $id_sem
 * @property $numero
 * @property $desc_sem
 * @property $created_at
 * @property $updated_at
 *
 * @property TbCarreMateria[] $tbCarreMaterias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbSemestre extends Model
{
  protected $primaryKey = 'id_sem';
    static $rules = [
		'id_sem' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_sem','numero','desc_sem'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbCarreMaterias()
    {
        return $this->hasMany('App\Models\TbCarreMateria', 'id_sem', 'id_sem');
    }
    

}
