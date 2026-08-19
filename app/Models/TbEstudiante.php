<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEstudiante
 *
 * @property $id_est
 * @property $cod_est
 * @property $nombre_est
 * @property $ape_p_est
 * @property $ape_m_est
 * @property $ci_est
 * @property $exp_est
 * @property $fec_nac_est
 * @property $dir_est
 * @property $tel_dom_est
 * @property $cel_est
 * @property $email_est
 * @property $tur_des_est
 * @property $fec_regis_est
 * @property $padre_del_est
 * @property $madre_del_est
 * @property $nombre_trab_padre_est
 * @property $tel_trab_padre_est
 * @property $dir_trab_padre_est
 * @property $cole_est
 * @property $sexo_est
 * @property $numsol_est
 * @property $insc_est
 * @property $dom_est
 * @property $lug_nac_est
 * @property $trab_dir_est
 * @property $trab_fono_est
 * @property $trab_nombre_est
 * @property $dato_bachi_est
 * @property $tipo_cole_est
 * @property $pais_cod_est
 * @property $fec_emitb_est
 * @property $sede_emit_est
 * @property $fec_tranf_est
 * @property $fact_doc_tipo_est
 * @property $fact_doc_numero_est
 * @property $fact_nombre_est
 * @property $foto_est
 * @property $est_pass
 * @property $obs_est
 * @property $created_at
 * @property $updated_at
 *
 * @property TbAsignacionMatEst[] $tbAsignacionMatEsts
 * @property TbBoleta[] $tbBoletas
 * @property TbEstCarr[] $tbEstCarrs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbEstudiante extends Model
{
    protected $primaryKey = 'id_est';
    static $rules = [
		'id_est' => 'required',
    ];

    protected $perPage = 20;


protected $table = "tb_estudiantes";
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_est','cod_est','nombre_est','ape_p_est','ape_m_est','ci_est','exp_est','fec_nac_est','dir_est','tel_dom_est','cel_est','email_est','tur_des_est','fec_regis_est','padre_del_est','madre_del_est','nombre_trab_padre_est','tel_trab_padre_est','dir_trab_padre_est','cole_est','sexo_est','numsol_est','insc_est','dom_est','lug_nac_est','trab_dir_est','trab_fono_est','trab_nombre_est','dato_bachi_est','tipo_cole_est','pais_cod_est','fec_emitb_est','sede_emit_est','fec_tranf_est','fact_doc_tipo_est','fact_doc_numero_est','fact_nombre_est','foto_est','est_pass','obs_est'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbAsignacionMatEsts()
    {
        return $this->hasMany('App\Models\TbAsignacionMatEst', 'id_est', 'id_est');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbBoletas()
    {
        return $this->hasMany('App\Models\TbBoleta', 'id_est', 'id_est');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEstCarrs()
    {
        return $this->hasMany('App\Models\TbEstCarr', 'id_est', 'id_est');
    }
    

}
