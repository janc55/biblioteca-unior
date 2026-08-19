<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vista_from_sol_bi extends Model
{
    protected $table="vista_from_sol_bi";
    protected $fillable = [
        'id_us',
        'titlo_lib',
        'autor',
        'edicion',
        'anio',
        'editorial',
        'nom_lug_com',
        'costo',
        'materia',
        'estado',
    ];
    use HasFactory;
}
