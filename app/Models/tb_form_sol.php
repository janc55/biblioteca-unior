<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_form_sol extends Model
{

    protected $primaryKey = 'id_formsol';
    protected $table="tb_form_sol";
    protected $fillable = [
        'id_us',
        'gci',
        'gcre',
        'activi',
        'des1',
        'des2',
        'des3',
        'des4',
        'cant1',
        'cant2',
        'cant3',
        'cant4',
        'cod1',
        'cod2',
        'cod3',
        'cod4',
        'obs1',
        'obs2',
        'obs3',
        'obs4',
        'fec_sa',
        'hora_sa',
        'estsa',
        'fec_de',
        'hora_de',
        'estde',
        'estado',
        'carrera', // Nuevo campo añadido
        'area', // Nuevo campo añadido
        'cod_est', // Nuevo campo añadido
        'cel', // Nuevo campo añadido
        'sem', // Nuevo campo añadido
        'domicilio', // Nuevo campo añadido
        'fecha_sol', // Nuevo campo añadido
        'fecha_atenc', // Nuevo campo añadido
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_us');
    }
    use HasFactory;
}
