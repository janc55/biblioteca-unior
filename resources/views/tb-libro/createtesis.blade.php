<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


          <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tb Libro</span>
                    </div>
                    <div class="card-body">
                       <form method="POST" action="{{ route('libros.store') }}" role="form" enctype="multipart/form-data">
    @csrf

    <div class="box box-info padding-1">
        <div class="box-body">

            <!-- CAMPOS OCULTOS -->
            <input type="hidden" name="id_libro" value="{{ old('id_libro', $tbLibro->id_libro) }}">
            <input type="hidden" name="isbm" value="{{ old('isbm', $tbLibro->isbm) }}">
            <input type="hidden" name="nombre" value="{{ old('nombre', $tbLibro->nombre) }}">
            <input type="hidden" name="ciudad" value="{{ old('ciudad', $tbLibro->ciudad) }}">
            <input type="hidden" name="editorial" value="{{ old('editorial', $tbLibro->editorial) }}">
            <input type="hidden" name="genero" value="{{ old('genero', $tbLibro->genero) }}">
            <input type="hidden" name="etiquetas" value="{{ old('etiquetas', $tbLibro->etiquetas) }}">
            <input type="hidden" name="url" value="{{ old('url', $tbLibro->url) }}">
            <input type="hidden" name="descripcion" value="{{ old('descripcion', $tbLibro->descripcion) }}">
            <input type="hidden" name="volumen" value="{{ old('volumen', $tbLibro->volumen) }}">
            <input type="hidden" name="nro_paginas" value="{{ old('nro_paginas', $tbLibro->nro_paginas) }}">
            <input type="hidden" name="presentacion" value="TESIS">
            <input type="hidden" name="digital" value="{{ old('digital', $tbLibro->digital) }}">
            <input type="hidden" name="nro_copias" value="{{ old('nro_copias', $tbLibro->nro_copias) }}">
            <input type="hidden" name="en_arch" value="{{ old('en_arch', $tbLibro->en_arch) }}">
            <input type="hidden" name="tp" value="3">

            <!-- CAMPOS VISIBLES -->
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" value="{{ old('codigo', $tbLibro->codigo) }}" placeholder="Código">
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="año">Gestión</label>
                <input type="text" name="año" class="form-control{{ $errors->has('año') ? ' is-invalid' : '' }}" value="{{ old('año', $tbLibro->año) }}" placeholder="Año">
                {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="autores">Autores</label>
                <input type="text" name="autores" class="form-control{{ $errors->has('autores') ? ' is-invalid' : '' }}" value="{{ old('autores', $tbLibro->autores) }}" placeholder="Autores">
                {!! $errors->first('autores', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="{{ old('titulo', $tbLibro->titulo) }}" placeholder="Título">
                {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="trabajo_grado">Trabajo de Grado</label>
                <input type="text" name="trabajo_grado" class="form-control{{ $errors->has('trabajo_grado') ? ' is-invalid' : '' }}" value="{{ old('trabajo_grado', $tbLibro->trabajo_grado) }}" placeholder="Trabajo de Grado">
                {!! $errors->first('trabajo_grado', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="en_biblio">En Biblioteca</label>
                <input type="text" name="en_biblio" class="form-control{{ $errors->has('en_biblio') ? ' is-invalid' : '' }}" value="{{ old('en_biblio', $tbLibro->en_biblio) }}" placeholder="En Biblioteca">
                {!! $errors->first('en_biblio', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" name="ubicacion" class="form-control{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}" value="{{ old('ubicacion', $tbLibro->ubicacion) }}" placeholder="Ubicación">
                {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="lugar">Lugar</label>
                <input type="text" name="lugar" class="form-control{{ $errors->has('lugar') ? ' is-invalid' : '' }}" value="{{ old('lugar', $tbLibro->lugar) }}" placeholder="Lugar">
                {!! $errors->first('lugar', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <!-- Archivos -->
            <div class="form-group">
                <label for="img">Imagen</label>
                <input type="file" name="img" class="form-control">
            </div>

            <div class="form-group" hidden>
                <input type="file" name="pdf" class="form-control">
            </div>

        </div>

        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>

    <?php include "bofer.php";?>
