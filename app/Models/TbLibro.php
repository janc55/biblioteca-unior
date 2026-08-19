<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbLibro
 *
 * @property $id_libro
 * @property $isbm
 * @property $codigo
 * @property $año
 * @property $nombre
 * @property $ciudad
 * @property $editorial
 * @property $autores
 * @property $genero
 * @property $etiquetas
 * @property $url
 * @property $descripcion
 * @property $volumen
 * @property $titulo
 * @property $nro_paginas
 * @property $presentacion
 * @property $trabajo_grado
 * @property $digital
 * @property $nro_copias
 * @property $en_biblio
 * @property $en_arch
 * @property $imagen
 * @property $pdf
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbLibro extends Model
{
    protected $primaryKey = 'id_libro';
    protected $table="tb_libro";
    static $rules = [
		'id_libro' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_libro','isbm','codigo','año','nombre','ciudad','editorial','autores','genero','etiquetas','url','descripcion','volumen','titulo','nro_paginas','presentacion','trabajo_grado','digital','nro_copias','en_biblio','en_arch','imagen','pdf','ubicacion','lugar','tp'];



}
