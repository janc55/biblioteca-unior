<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VistaUs extends Model
{
    protected $table = 'users'; // Nombre de la tabla de la consulta
    protected $primaryKey = 'id'; // Nombre de la llave primaria de la consulta
    public $timestamps = false; // Si la consulta no tiene campos "created_at" y "updated_at", cambia este valor a "false".
    protected $fillable = [
        'email',
        'tipo',
        'nombre',
        'ci',
        'domicilio',
        'cel',
        'carrera',
        'rool',
        'estado',
    ];
    use HasFactory;
}
