<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_ru') }}
            {{ Form::text('id_ru', $tbRoolesU->id_ru, ['class' => 'form-control' . ($errors->has('id_ru') ? ' is-invalid' : ''), 'placeholder' => 'Id Ru']) }}
            {!! $errors->first('id_ru', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rool') }}
            {{ Form::text('rool', $tbRoolesU->rool, ['class' => 'form-control' . ($errors->has('rool') ? ' is-invalid' : ''), 'placeholder' => 'Rool']) }}
            {!! $errors->first('rool', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
  <label for="solicitar">SOLICITAR:</label>
  <input type="checkbox" class="form-control" id="solicitar" name="solicitar">
</div>

<div class="form-group">
  <label for="chat_inteligente">CHAT INTELIGENTE:</label>
  <input type="checkbox" class="form-control" id="chat_inteligente" name="chat_inteligente">
</div>

<div class="form-group">
  <label for="biblioteca_virtual">BIBLIOTECA VIRTUAL:</label>
  <input type="checkbox" class="form-control" id="biblioteca_virtual" name="biblioteca_virtual">
</div>

<div class="form-group">
  <label for="libros_digitales">LIBROS DIGITALES:</label>
  <input type="checkbox" class="form-control" id="libros_digitales" name="libros_digitales">
</div>

<div class="form-group">
  <label for="trabajos_grado">TRABAJOS DE GRADO:</label>
  <input type="checkbox" class="form-control" id="trabajos_grado" name="trabajos_grado">
</div>

<div class="form-group">
  <label for="solicitar_trabajos_grado">SOLICITAR TRABAJOS DE GRADO:</label>
  <input type="checkbox" class="form-control" id="solicitar_trabajos_grado" name="solicitar_trabajos_grado">
</div>

<div class="form-group">
  <label for="form_solicitud1">FORMULARIO SOLICITUD 1:</label>
  <input type="checkbox" class="form-control" id="form_solicitud1" name="form_solicitud1">
</div>

<div class="form-group">
  <label for="form_solicitud2">FORMULARIO SOLICITUD 2:</label>
  <input type="checkbox" class="form-control" id="form_solicitud2" name="form_solicitud2">
</div>

<div class="form-group">
  <label for="historial">HISTORIAL USUARIO:</label>
  <input type="checkbox" class="form-control" id="historial" name="historial">
</div>


<div class="form-group">
  <label for="registrar">INICIO ADMINISTRADOR:</label>
  <input type="checkbox" class="form-control" id="inicioadm" name="inicioadm">
</div>

<div class="form-group">
  <label for="registrar">REGISTRAR:</label>
  <input type="checkbox" class="form-control" id="registrar" name="registrar">
</div>

<div class="form-group">
  <label for="presentaciones">PRESENTACIONES:</label>
  <input type="checkbox" class="form-control" id="presentaciones" name="presentaciones">
</div>

<div class="form-group">
  <label for="atencion">ATENCIÓN:</label>
  <input type="checkbox" class="form-control" id="atencion" name="atencion">
</div>

<div class="form-group">
  <label for="registrar_bibliotecas">REGISTRAR BIBLIOTECAS:</label>
  <input type="checkbox" class="form-control" id="registrar_bibliotecas" name="registrar_bibliotecas">
</div>

<div class="form-group">
  <label for="noticias">NOTICIAS:</label>
  <input type="checkbox" class="form-control" id="noticias" name="noticias">
</div>

<div class="form-group">
  <label for="solicitud_directores">SOLICITUD DE DIRECTORES:</label>
  <input type="checkbox" class="form-control" id="solicitud_directores" name="solicitud_directores">
</div>

<div class="form-group">
  <label for="graficos_reportes">GRAFICOS Y REPORTES:</label>
  <input type="checkbox" class="form-control" id="graficos_reportes" name="graficos_reportes">
</div>

<div class="form-group">
  <label for="usuario">USUARIO:</label>
  <input type="checkbox" class="form-control" id="usuario" name="usuario">
</div>

<div class="form-group">
  <label for="roles">ROLES:</label>
  <input type="checkbox" class="form-control" id="roles" name="roles">
</div>

<div class="form-group">
  <label for="cerrar_sesion">CERRAR SESIÓN:</label>
  <input type="checkbox" class="form-control" id="cerrar_sesion" name="cerrar_sesion">
</div>

           
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>