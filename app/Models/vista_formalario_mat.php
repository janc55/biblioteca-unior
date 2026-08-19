<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vista_formalario_mat extends Model
{
    protected $table="vista_formalario_mat";
    protected $fillable = ['id_formsol','id_us','gci','gcre','activi','des1','des2','des3','des4','cant1','cant2','cant3','cant4','cod1','cod2','cod3','cod4','obs1','obs2','obs3','obs4','fec_sa','hora_sa','estsa','fec_de','hora_de','estde','estado'];

    use HasFactory;
}
