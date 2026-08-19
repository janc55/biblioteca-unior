<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" hidden>
            {{ Form::label('id_not') }}
            {{ Form::text('id_not', $noticia->id_not, ['class' => 'form-control' . ($errors->has('id_not') ? ' is-invalid' : ''), 'placeholder' => 'Id Not']) }}
            {!! $errors->first('id_not', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $noticia->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contenido') }}
            {{ Form::text('contenido', $noticia->contenido, ['class' => 'form-control' . ($errors->has('contenido') ? ' is-invalid' : ''), 'placeholder' => 'Contenido']) }}
            {!! $errors->first('contenido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" hidden>
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $noticia->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        <input type="file" name="img">       </div>
     

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>