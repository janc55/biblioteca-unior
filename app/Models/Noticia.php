<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Noticia
 *
 * @property $id_not
 * @property $titulo
 * @property $contenido
 * @property $imagen
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Noticia extends Model
{
  protected $table = 'noticias';
  protected $primaryKey = 'id_not';
  
  
  public $timestamps = false;
    static $rules = [
		'id_not' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_not','titulo','contenido','imagen'];



}
