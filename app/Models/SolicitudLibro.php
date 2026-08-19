<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SolicitudLibro
 *
 * @property $id_so_lib
 * @property $usuario_id
 * @property $detalle_solicitud
 * @property $fecha_solicitud
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property TbUser $tbUser
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SolicitudLibro extends Model
{
    protected $table="solicitud_libro";

    static $rules = [
		'id_so_lib' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_so_lib','usuario_id','detalle_solicitud','fecha_solicitud','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbUser()
    {
        return $this->hasOne('App\Models\TbUser', 'id', 'usuario_id');
    }


}
