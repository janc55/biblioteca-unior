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

            <input type="hidden" name="id_libro" value="{{ old('id_libro', $tbLibro->id_libro) }}">
            <input type="hidden" name="año" value="{{ old('año', $tbLibro->año) }}">
            <input type="hidden" name="nombre" value="{{ old('nombre', $tbLibro->nombre) }}">
            <input type="hidden" name="ciudad" value="{{ old('ciudad', $tbLibro->ciudad) }}">
            <input type="hidden" name="autores" value="{{ old('autores', $tbLibro->autores) }}">
            <input type="hidden" name="genero" value="{{ old('genero', $tbLibro->genero) }}">
            <input type="hidden" name="etiquetas" value="{{ old('etiquetas', $tbLibro->etiquetas) }}">
            <input type="hidden" name="url" value="{{ old('url', $tbLibro->url) }}">
            <input type="hidden" name="descripcion" value="{{ old('descripcion', $tbLibro->descripcion) }}">
            <input type="hidden" name="volumen" value="{{ old('volumen', $tbLibro->volumen) }}">
            <input type="hidden" name="titulo" value="{{ old('titulo', $tbLibro->titulo) }}">
            <input type="hidden" name="nro_paginas" value="{{ old('nro_paginas', $tbLibro->nro_paginas) }}">
            <input type="hidden" name="presentacion" value="DIGITAL">
            <input type="hidden" name="trabajo_grado" value="{{ old('trabajo_grado', $tbLibro->trabajo_grado) }}">
            <input type="hidden" name="digital" value="{{ old('digital', $tbLibro->digital) }}">
            <input type="hidden" name="nro_copias" value="{{ old('nro_copias', $tbLibro->nro_copias) }}">
            <input type="hidden" name="en_biblio" value="{{ old('en_biblio', $tbLibro->en_biblio) }}">
            <input type="hidden" name="en_arch" value="{{ old('en_arch', $tbLibro->en_arch) }}">
            <input type="hidden" name="ubicacion" value="{{ old('ubicacion', $tbLibro->ubicacion) }}">
            <input type="hidden" name="lugar" value="{{ old('lugar', $tbLibro->lugar) }}">
            <input type="hidden" name="tp" value="2">

            <div class="form-group">
                <label for="isbm">ISBN</label>
                <input type="text" name="isbm" class="form-control{{ $errors->has('isbm') ? ' is-invalid' : '' }}" value="{{ old('isbm', $tbLibro->isbm) }}" placeholder="ISBN">
                {!! $errors->first('isbm', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" value="{{ old('codigo', $tbLibro->codigo) }}" placeholder="Código">
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="editorial">Editorial</label>
                <input type="text" name="editorial" class="form-control{{ $errors->has('editorial') ? ' is-invalid' : '' }}" value="{{ old('editorial', $tbLibro->editorial) }}" placeholder="Editorial">
                {!! $errors->first('editorial', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="img">Imagen</label>
                <input type="file" name="img" class="form-control">
            </div>

            <div class="form-group">
                <label for="pdf">Archivo PDF</label>
                <input type="file" name="pdf" class="form-control">
            </div>

        </div>

        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>

    <?php include "bofer.php";?>
