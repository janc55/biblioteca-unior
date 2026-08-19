<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_libro') }}
            {{ Form::text('id_libro', $tbLibro->id_libro, ['class' => 'form-control' . ($errors->has('id_libro') ? ' is-invalid' : ''), 'placeholder' => 'Id Libro']) }}
            {!! $errors->first('id_libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isbm') }}
            {{ Form::text('isbm', $tbLibro->isbm, ['class' => 'form-control' . ($errors->has('isbm') ? ' is-invalid' : ''), 'placeholder' => 'Isbm']) }}
            {!! $errors->first('isbm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $tbLibro->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $tbLibro->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tbLibro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudad') }}
            {{ Form::text('ciudad', $tbLibro->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial') }}
            {{ Form::text('editorial', $tbLibro->editorial, ['class' => 'form-control' . ($errors->has('editorial') ? ' is-invalid' : ''), 'placeholder' => 'Editorial']) }}
            {!! $errors->first('editorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autores') }}
            {{ Form::text('autores', $tbLibro->autores, ['class' => 'form-control' . ($errors->has('autores') ? ' is-invalid' : ''), 'placeholder' => 'Autores']) }}
            {!! $errors->first('autores', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $tbLibro->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('etiquetas') }}
            {{ Form::text('etiquetas', $tbLibro->etiquetas, ['class' => 'form-control' . ($errors->has('etiquetas') ? ' is-invalid' : ''), 'placeholder' => 'Etiquetas']) }}
            {!! $errors->first('etiquetas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('url', $tbLibro->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $tbLibro->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('volumen') }}
            {{ Form::text('volumen', $tbLibro->volumen, ['class' => 'form-control' . ($errors->has('volumen') ? ' is-invalid' : ''), 'placeholder' => 'Volumen']) }}
            {!! $errors->first('volumen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $tbLibro->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nro_paginas') }}
            {{ Form::text('nro_paginas', $tbLibro->nro_paginas, ['class' => 'form-control' . ($errors->has('nro_paginas') ? ' is-invalid' : ''), 'placeholder' => 'Nro Paginas']) }}
            {!! $errors->first('nro_paginas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('presentacion') }}
            {{ Form::text('presentacion', $tbLibro->presentacion, ['class' => 'form-control' . ($errors->has('presentacion') ? ' is-invalid' : ''), 'placeholder' => 'Presentacion']) }}
            {!! $errors->first('presentacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trabajo_grado') }}
            {{ Form::text('trabajo_grado', $tbLibro->trabajo_grado, ['class' => 'form-control' . ($errors->has('trabajo_grado') ? ' is-invalid' : ''), 'placeholder' => 'Trabajo Grado']) }}
            {!! $errors->first('trabajo_grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('digital') }}
            {{ Form::text('digital', $tbLibro->digital, ['class' => 'form-control' . ($errors->has('digital') ? ' is-invalid' : ''), 'placeholder' => 'Digital']) }}
            {!! $errors->first('digital', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nro_copias') }}
            {{ Form::text('nro_copias', $tbLibro->nro_copias, ['class' => 'form-control' . ($errors->has('nro_copias') ? ' is-invalid' : ''), 'placeholder' => 'Nro Copias']) }}
            {!! $errors->first('nro_copias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('en_biblio') }}
            {{ Form::text('en_biblio', $tbLibro->en_biblio, ['class' => 'form-control' . ($errors->has('en_biblio') ? ' is-invalid' : ''), 'placeholder' => 'En Biblio']) }}
            {!! $errors->first('en_biblio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('en_arch') }}
            {{ Form::text('en_arch', $tbLibro->en_arch, ['class' => 'form-control' . ($errors->has('en_arch') ? ' is-invalid' : ''), 'placeholder' => 'En Arch']) }}
            {!! $errors->first('en_arch', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('ubicacion') }}
            {{ Form::text('ubicacion', $tbLibro->ubicacion, ['class' => 'form-control' . ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'ubicacion']) }}
            {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('lugar') }}
            {{ Form::text('lugar', $tbLibro->lugar, ['class' => 'form-control' . ($errors->has('lugar') ? ' is-invalid' : ''), 'placeholder' => 'lugar']) }}
            {!! $errors->first('lugar', '<div class="invalid-feedback">:message</div>') !!}
        </div>

            <div class="form-group">
            <input type="file" name="img">
        </div>
        <div class="form-group">
            <input type="file" name="pdf">

        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
