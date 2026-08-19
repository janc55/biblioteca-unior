<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_docentes extends Model
{
    use HasFactory;
    protected $table="tb_docentes"; 
  protected $primaryKey = "id_doc";
    protected $fillable = ['id_doc','nombre_doc','ape_p_doc','ape_m_doc','cod_doc','ci','expedido','grado','fec_nac_doc','tel_dom_doc','cel_doc','dom_doc','lug_doc','dir_trab_doc','tel_trab_doc','email_doc','estado_civ_doc','nacional_doc','obser_doc','foto_doc'];

}
