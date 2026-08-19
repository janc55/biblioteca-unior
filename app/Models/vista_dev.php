<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vista_dev extends Model
{
    protected $table="vista_dev";
    protected $fillable = [ 'id_solib', 'nombre', 'fecha_sol', 'hora_sol', 'fecha_Dev', 'hora_dev', 'estado', 'id_lib', 'id_us', 'isbm', 'codigo', 'año', 'linro_nom', 'ciudad', 'editorial', 'autores', 'genero', 'etiquetas', 'url', 'descripcion', 'volumen', 'titulo', 'nro_paginas', 'presentacion', 'trabajo_grado', 'digital', 'nro_copias', 'en_biblio', 'en_arch', 'imagen', 'pdf', 'ubicacion', 'lugar','autores'];

    use HasFactory;
}
