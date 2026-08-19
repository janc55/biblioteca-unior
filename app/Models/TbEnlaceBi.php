<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEnlaceBi
 *
 * @property $id_enlib
 * @property $dir
 * @property $foto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbEnlaceBi extends Model
{

    protected $primaryKey = 'id_enlib';
    protected $table="tb_enlace_bi";
    static $rules = [
		'id_enlib' => 'required',
		'dir' => 'required',
		'foto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_enlib','dir','foto'];



}
