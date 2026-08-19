<div class="box box-info padding-1">
    <div class="box-body">        
        
         @IF ($tbEstudiante->cod_est == "" )
        <div class="form-group">
            <label class="form-control">Codigo Estudiante</label>
            <input type="text"  name="cod_est" id="cod_est" value="{{$tbEstudiante->cod_est}}"
             class="form-control bi bi-0-square-fill" >
            <div class="invalid-feedback">:message</div>
        </div>
        @else
        <div class="form-group" hidden>
            <label class="form-control">Codigo Estudiante</label>
            <input type="text"  name="cod_est" id="cod_est" value="{{$tbEstudiante->cod_est}}"
             class="form-control bi bi-0-square-fill" >
            <div class="invalid-feedback">:message</div>
        </div>
        @endif 

        @IF ($tbEstudiante->nombre_est == "" )
            <div class="form-group" >
                <label class="form-control">Nombre</label>
                <input type="text"  name="nombre_est" id="nombre_est" value="{{$tbEstudiante->nombre_est}}"
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
         @else
            <div class="form-group" hidden>
                <label class="form-control">Nombre</label>
                <input type="text"  name="nombre_est" id="nombre_est" value="{{$tbEstudiante->nombre_est}}"
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
         @endif    

         @IF ($tbEstudiante->ape_p_est == "" )                        
            <div class="form-group">
                <label class="form-control">Apellido Paterno</label>
                <input type="text"  name="ape_p_est" id="ape_p_est" value="{{$tbEstudiante->ape_p_est}}"
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @else 
            <div class="form-group" hidden>
                <label class="form-control">Apellido Paterno</label>
                <input type="text"  name="ape_p_est" id="ape_p_est" value="{{$tbEstudiante->ape_p_est}}"
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @endif  
            
            @IF ($tbEstudiante->ape_m_est == "" )                        
            <div class="form-group">
                <label class="form-control">Apellido Materno</label>
                <input type="text"  name="ape_m_est" id="ape_m_est" value="{{$tbEstudiante->ape_m_est}}"
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @else 
            <div class="form-group" hidden>
                <label class="form-control">Apellido Materno</label>
                <input type="text"  name="ape_m_est" id="ape_m_est" value="{{$tbEstudiante->ape_m_est}}"
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @endif  

            @IF ($tbEstudiante->fec_nac_est == "" )                        
            <div class="form-group">
                <label class="form-control">Fecha de Nacimiento</label>
                <input type="date"  name="fec_nac_est" id="fec_nac_est"  value="{{$tbEstudiante->fec_nac_est}}" 
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @else 
            <div class="form-group" hidden>
                <label class="form-control">Fecha de Nacimiento</label>
                <input type="date"  name="fec_nac_est" id="fec_nac_est"  value="{{$tbEstudiante->fec_nac_est}}" 
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @endif  

            @IF ($tbEstudiante->lug_nac_est == "" )                        
            <div class="form-group">
                <label class="form-control">Lugar de Nacimiento del Estudiante</label>                
                <select name="lug_nac_est" id="lug_nac_est" class="form-control bi bi-0-square-fill" >
                                <option value="ORURO"> ORURO</option>
                                <option value="COCHABAMBA"> COCHABAMBA</option>
                                <option value="LA PAZ"> LA PAZ</option>
                                <option value="SANTA CRUZ"> SANTA CRUZ</option>
                                <option value="POTOSI"> POTOSI</option>
                                <option value="CHUQUISACA"> CHUQUISACA</option>
                                <option value="BENI"> BENI</option>
                                <option value="TARIJA"> TARIJA</option>
                                <option value="PANDO"> PANDO</option>
                            </select>
                <div class="invalid-feedback">:message</div>
            </div>
            @else 
            <div class="form-group" hidden>
                <label class="form-control">Lugar de Nacimiento del Estudiante</label>                
                <select name="lug_nac_est" id="lug_nac_est" class="form-control bi bi-0-square-fill" >
                                <option value="ORURO"> ORURO</option>
                                <option value="COCHABAMBA"> COCHABAMBA</option>
                                <option value="LA PAZ"> LA PAZ</option>
                                <option value="SANTA CRUZ"> SANTA CRUZ</option>
                                <option value="POTOSI"> POTOSI</option>
                                <option value="CHUQUISACA"> CHUQUISACA</option>
                                <option value="BENI"> BENI</option>
                                <option value="TARIJA"> TARIJA</option>
                                <option value="PANDO"> PANDO</option>
                            </select>
                <div class="invalid-feedback">:message</div>
            </div>
            @endif  

            @IF ($tbEstudiante->ci_est == "" )                        
            <div class="form-group">
                <label class="form-control">CI</label>
                <input type="text"  name="ci_est" id="ci_est"  value="{{$tbEstudiante->ci_est}}" 
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @else 
            <div class="form-group" hidden>
                <label class="form-control">CI</label>
                <input type="text"  name="ci_est" id="ci_est"  value="{{$tbEstudiante->ci_est}}" 
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @endif  

            @IF ($tbEstudiante->exp_est == "" )        
            <div class="form-group">
               <label class="form-control">Expedido</label>
               <select name="exp_est" id="exp_est" class="form-control" value="{{$tbEstudiante->exp_est}}" >
                   <option value="OR"> ORURO</option>
                   <option value="CB"> COCHABAMBA</option>
                   <option value="LP"> LA PAZ</option>
                   <option value="SC"> SANTA CRUZ</option>
                   <option value="PO"> POTOSI</option>
                   <option value="CH"> CHUQUISACA</option>
                   <option value="BE"> BENI</option>
                   <option value="TA"> TARIJA</option>
                   <option value="PA"> PANDO</option>
               </select>
            </div>
            @else 
            <div class="form-group" hidden>
               <label class="form-control">Expedido</label>
               <select name="exp_est" id="exp_est" class="form-control" value="{{$tbEstudiante->exp_est}}" disabled>
                   <option value="OR"> ORURO</option>
                   <option value="CB"> COCHABAMBA</option>
                   <option value="LP"> LA PAZ</option>
                   <option value="SC"> SANTA CRUZ</option>
                   <option value="PO"> POTOSI</option>
                   <option value="CH"> CHUQUISACA</option>
                   <option value="BE"> BENI</option>
                   <option value="TA"> TARIJA</option>
                   <option value="PA"> PANDO</option>
               </select>
            </div>
            @endif 

            @IF ($tbEstudiante->sexo_est == "" )       
            <div class="form-group">
                <label class="form-control">Sexo</label>            
                <select class="form-control" name="sexo_est" id="sexo_est" class="form-control bi bi-0-square-fill" >
                  <option value="MASCULINO"> MASCULINO</option>
                  <option value="FEMENINO"> FEMENINO</option>
                </select>
                <div class="invalid-feedback">:message</div>
            </div>   
            @else 
            <div class="form-group" hidden>
                <label class="form-control">Sexo</label>            
                <select class="form-control" name="sexo_est" id="sexo_est" class="form-control bi bi-0-square-fill" disabled>
                  <option value="MASCULINO"> MASCULINO</option>
                  <option value="FEMENINO"> FEMENINO</option>
                </select>
                <div class="invalid-feedback">:message</div>
            </div>  
            @endif 

            @IF ($tbEstudiante->dir_est == "" )        
            <div class="form-group">
                <label class="form-control">Domicilio</label>
                <input type="text"  name="dir_est" id="dir_est"  value="{{$tbEstudiante->dir_est}}"  
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @else 
            <div class="form-group" hidden>
                <label class="form-control">Domicilio</label>
                <input type="text"  name="dir_est" id="dir_est"  value="{{$tbEstudiante->dir_est}}"  
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @endif 

            @IF ($tbEstudiante->tel_dom_est == "" )        
            <div class="form-group">
                <label class="form-control">Teléfono</label>
                <input type="number"  name="tel_dom_est" id="tel_dom_est"   value="{{$tbEstudiante->tel_dom_est}}"
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @else 
            <div class="form-group" hidden>
                <label class="form-control">Teléfono</label>
                <input type="number"  name="tel_dom_est" id="tel_dom_est"   value="{{$tbEstudiante->tel_dom_est}}"
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @endif 

            @IF ($tbEstudiante->cel_est == "" )        
            <div class="form-group" >
                <label class="form-control">Celular</label>
                <input type="number"  name="cel_est" id="cel_est"   value="{{$tbEstudiante->cel_est}}"
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @else 
            <div class="form-group" hidden>
                <label class="form-control">Celular</label>
                <input type="number"  name="cel_est" id="cel_est"   value="{{$tbEstudiante->cel_est}}"
                class="form-control bi bi-0-square-fill" >
                <div class="invalid-feedback">:message</div>
            </div>
            @endif 

            <div class="form-group">
                <label class="form-control">Email</label>
                <input type="text"  name="email_est" id="email_est"   value="{{$tbEstudiante->email_est}}"
                class="form-control bi bi-0-square-fill" placeholder="Email">
                <div class="invalid-feedback">:message</div>
            </div>              
        
        <!-- <div class="form-group">
            {{ Form::label('tur_des_est') }}
            {{ Form::text('tur_des_est', $tbEstudiante->tur_des_est, ['class' => 'form-control' . ($errors->has('tur_des_est') ? ' is-invalid' : ''), 'placeholder' => 'Tur Des Est']) }}
            {!! $errors->first('tur_des_est', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <!-- <div class="form-group">
            {{ Form::label('fec_regis_est') }}
            {{ Form::text('fec_regis_est', $tbEstudiante->fec_regis_est, ['class' => 'form-control' . ($errors->has('fec_regis_est') ? ' is-invalid' : ''), 'placeholder' => 'Fec Regis Est']) }}
            {!! $errors->first('fec_regis_est', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
                <label class="form-control">Nombre del Padre del Estudiante</label>
                <input type="text"  name="padre_del_est" id="padre_del_est"   value="{{$tbEstudiante->padre_del_est}}"
                class="form-control bi bi-0-square-fill" placeholder="Nombre del Padre del Estudiante">
                <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
                <label class="form-control">Nombre de la Madre del Estudiante</label>
                <input type="text"  name="madre_del_est" id="madre_del_est"   value="{{$tbEstudiante->madre_del_est}}"
                class="form-control bi bi-0-square-fill" placeholder="Nombre de la Madre del Estudiante">
                <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
                <label class="form-control">Nombre del Trabajo de Padre del Estudiante</label>
                <input type="text"  name="nombre_trab_padre_est" id="nombre_trab_padre_est"   value="{{$tbEstudiante->nombre_trab_padre_est}}"
                class="form-control bi bi-0-square-fill" placeholder="Trabajo de Padre del Estudiante">
                <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
                <label class="form-control">Teléfono de Trabajo de Padre del Estudiante</label>
                <input type="number"  name="tel_trab_padre_est" id="tel_trab_padre_est"   value="{{$tbEstudiante->tel_trab_padre_est}}"
                class="form-control bi bi-0-square-fill" placeholder="Teléfono de Trabajo de Padre del Estudiante">
                <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
                <label class="form-control">Dirección de Trabajo de Padre del Estudiante</label>
                <input type="text"  name="dir_trab_padre_est" id="dir_trab_padre_est"   value="{{$tbEstudiante->dir_trab_padre_est}}"
                class="form-control bi bi-0-square-fill" placeholder="Dirección de Trabajo de Padre del Estudiante">
                <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
                <label class="form-control">Colegio del Estudiante</label>
                <input type="text"  name="cole_est" id="cole_est"   
                class="form-control bi bi-0-square-fill" placeholder="Colegio" value="{{$tbEstudiante->cole_est}}">
                <div class="invalid-feedback">:message</div>
        </div> 
          
        <!-- <div class="form-group">
            {{ Form::label('numsol_est') }}
            {{ Form::text('numsol_est', $tbEstudiante->numsol_est, ['class' => 'form-control' . ($errors->has('numsol_est') ? ' is-invalid' : ''), 'placeholder' => 'Numsol Est']) }}
            {!! $errors->first('numsol_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('insc_est') }}
            {{ Form::text('insc_est', $tbEstudiante->insc_est, ['class' => 'form-control' . ($errors->has('insc_est') ? ' is-invalid' : ''), 'placeholder' => 'Insc Est']) }}
            {!! $errors->first('insc_est', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <!-- <div class="form-group">
                <label class="form-control">Domicilio del Estudiante</label>
                <input type="text"  name="dom_est" id="dom_est"   value="{{$tbEstudiante->dom_est}}"
                class="form-control bi bi-0-square-fill" disabled>
                <div class="invalid-feedback">:message</div>
        </div>   -->
        
        <div class="form-group">
                <label class="form-control">Nombre del trabajo del Estudiante</label>
                <input type="text"  name="trab_nombre_est" id="trab_nombre_est"   value="{{$tbEstudiante->trab_nombre_est}}"
                class="form-control bi bi-0-square-fill" placeholder=" ">
                <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
                <label class="form-control">Dirección de trabajo del Estudiante</label>
                <input type="text"  name="trab_dir_est" id="trab_dir_est"   value="{{$tbEstudiante->trab_dir_est}}"
                class="form-control bi bi-0-square-fill" placeholder=" ">
                <div class="invalid-feedback">:message</div>
        </div> 
        <div class="form-group">
                <label class="form-control">Teléfono de trabajo del Estudiante</label>
                <input type="number"  name="trab_fono_est" id="trab_fono_est"   value="{{$tbEstudiante->trab_fono_est}}"
                class="form-control bi bi-0-square-fill" placeholder=" ">
                <div class="invalid-feedback">:message</div>
        </div> 
        <div class="form-group">
                <label class="form-control">Fecha de Bachillerato del Estudiante</label>
                <input type="date"  name="dato_bachi_est" id="dato_bachi_est"   value="{{$tbEstudiante->dato_bachi_est}}"
                class="form-control bi bi-0-square-fill" placeholder=" ">
                <div class="invalid-feedback">:message</div>
        </div> 
        <div class="form-group">
                <label class="form-control">Tipo de Colegio</label>            
                <select class="form-control" name="tipo_cole_est" id="tipo_cole_est"  class="form-control bi bi-0-square-fill" >
                  <option value="PUBLICO"> PUBLICO</option>
                  <option value="PRIVADO"> PRIVADO</option>
                </select>
                <div class="invalid-feedback">:message</div>
        </div>       
      
       
        <!-- <div class="form-group">
            {{ Form::label('pais_cod_est') }}
            {{ Form::text('pais_cod_est', $tbEstudiante->pais_cod_est, ['class' => 'form-control' . ($errors->has('pais_cod_est') ? ' is-invalid' : ''), 'placeholder' => 'Pais Cod Est']) }}
            {!! $errors->first('pais_cod_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_emitb_est') }}
            {{ Form::text('fec_emitb_est', $tbEstudiante->fec_emitb_est, ['class' => 'form-control' . ($errors->has('fec_emitb_est') ? ' is-invalid' : ''), 'placeholder' => 'Fec Emitb Est']) }}
            {!! $errors->first('fec_emitb_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sede_emit_est') }}
            {{ Form::text('sede_emit_est', $tbEstudiante->sede_emit_est, ['class' => 'form-control' . ($errors->has('sede_emit_est') ? ' is-invalid' : ''), 'placeholder' => 'Sede Emit Est']) }}
            {!! $errors->first('sede_emit_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_tranf_est') }}
            {{ Form::text('fec_tranf_est', $tbEstudiante->fec_tranf_est, ['class' => 'form-control' . ($errors->has('fec_tranf_est') ? ' is-invalid' : ''), 'placeholder' => 'Fec Tranf Est']) }}
            {!! $errors->first('fec_tranf_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fact_doc_tipo_est') }}
            {{ Form::text('fact_doc_tipo_est', $tbEstudiante->fact_doc_tipo_est, ['class' => 'form-control' . ($errors->has('fact_doc_tipo_est') ? ' is-invalid' : ''), 'placeholder' => 'Fact Doc Tipo Est']) }}
            {!! $errors->first('fact_doc_tipo_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fact_doc_numero_est') }}
            {{ Form::text('fact_doc_numero_est', $tbEstudiante->fact_doc_numero_est, ['class' => 'form-control' . ($errors->has('fact_doc_numero_est') ? ' is-invalid' : ''), 'placeholder' => 'Fact Doc Numero Est']) }}
            {!! $errors->first('fact_doc_numero_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fact_nombre_est') }}
            {{ Form::text('fact_nombre_est', $tbEstudiante->fact_nombre_est, ['class' => 'form-control' . ($errors->has('fact_nombre_est') ? ' is-invalid' : ''), 'placeholder' => 'Fact Nombre Est']) }}
            {!! $errors->first('fact_nombre_est', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
      
        <div class="panel-body mt-5">   
                  

           <label class="form-control" for="inputImage">Foto del Estudiante</label>
           <input 
               type="file" 
               name="foto_est"                        
               id="inputImage"
               class="form-control @error('image') is-invalid @enderror" 
               value="{{$tbEstudiante->foto_est}}">      
           @error('image')
               <span class="text-danger">{{ $message }}</span>
           @enderror                   
        </div>
   
        
        <div class="form-group">
                <label class="form-control">Contraseña</label>
                <input type="password"  name="est_pass" id="est_pass"   value="{{$tbEstudiante->est_pass}}"
                class="form-control bi bi-0-square-fill" placeholder=" ">
                <div class="invalid-feedback">:message</div>
        </div>         
        <div class="form-group">
                <label class="form-control">Observaciones</label>
                <input type="texto"  name="obs_est" id="obs_est"   value="{{$tbEstudiante->obs_est}}"
                class="form-control bi bi-0-square-fill" placeholder=" ">
                <div class="invalid-feedback">:message</div>
        </div>        
        

    </div>
    <div class="box-footer mt20">
        <input type="hidden"  name="id_est" id="id_est" value="{{$tbEstudiante->id_est}}">   
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>