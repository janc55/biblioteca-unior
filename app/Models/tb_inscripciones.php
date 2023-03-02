<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_inscripciones extends Model
{
    protected $fillable = ['id_ins','id_est','id_gestion','id_beca','id_boleta','fec_ins','habi_ins','obs_ins'];

    use HasFactory;
}
