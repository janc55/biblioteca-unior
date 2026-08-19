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
            <input type="hidden" name="isbm" value="{{ old('isbm', $tbLibro->isbm) }}">
            <input type="hidden" name="nombre" value="{{ old('nombre', $tbLibro->nombre) }}">
            <input type="hidden" name="ciudad" value="{{ old('ciudad', $tbLibro->ciudad) }}">
            <input type="hidden" name="editorial" value="{{ old('editorial', $tbLibro->editorial) }}">
            <input type="hidden" name="etiquetas" value="{{ old('etiquetas', $tbLibro->etiquetas) }}">
            <input type="hidden" name="url" value="{{ old('url', $tbLibro->url) }}">
            <input type="hidden" name="descripcion" value="{{ old('descripcion', $tbLibro->descripcion) }}">
            <input type="hidden" name="trabajo_grado" value="{{ old('trabajo_grado', $tbLibro->trabajo_grado) }}">
            <input type="hidden" name="presentacion" value="{{ old('presentacion', $tbLibro->presentacion) ?? 'DIGITAL' }}">
            <input type="hidden" name="tp" value="5">

            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" value="{{ old('codigo', $tbLibro->codigo) }}" placeholder="Código">
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="año">Gestión</label>
                <input type="text" name="año" class="form-control{{ $errors->has('año') ? ' is-invalid' : '' }}" value="{{ old('año', $tbLibro->año) }}" placeholder="GESTIÓN">
                {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="autores">Autores</label>
                <input type="text" name="autores" class="form-control{{ $errors->has('autores') ? ' is-invalid' : '' }}" value="{{ old('autores', $tbLibro->autores) }}" placeholder="Autores">
                {!! $errors->first('autores', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="genero">Género</label>
                <input type="text" name="genero" class="form-control{{ $errors->has('genero') ? ' is-invalid' : '' }}" value="{{ old('genero', $tbLibro->genero) }}" placeholder="Género">
                {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="volumen">Volumen</label>
                <input type="text" name="volumen" class="form-control{{ $errors->has('volumen') ? ' is-invalid' : '' }}" value="{{ old('volumen', $tbLibro->volumen) }}" placeholder="Volumen">
                {!! $errors->first('volumen', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="{{ old('titulo', $tbLibro->titulo) }}" placeholder="Título">
                {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="nro_paginas">Nro de Páginas</label>
                <input type="text" name="nro_paginas" class="form-control{{ $errors->has('nro_paginas') ? ' is-invalid' : '' }}" value="{{ old('nro_paginas', $tbLibro->nro_paginas) }}" placeholder="Nro de páginas">
                {!! $errors->first('nro_paginas', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="digital">Digital</label>
                <input type="text" name="digital" class="form-control{{ $errors->has('digital') ? ' is-invalid' : '' }}" value="{{ old('digital', $tbLibro->digital) }}" placeholder="Digital (Sí / No)">
                {!! $errors->first('digital', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="nro_copias">Nro Copias</label>
                <input type="text" name="nro_copias" class="form-control{{ $errors->has('nro_copias') ? ' is-invalid' : '' }}" value="{{ old('nro_copias', $tbLibro->nro_copias) }}" placeholder="Nro de copias">
                {!! $errors->first('nro_copias', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="en_biblio">En Biblioteca</label>
                <input type="text" name="en_biblio" class="form-control{{ $errors->has('en_biblio') ? ' is-invalid' : '' }}" value="{{ old('en_biblio', $tbLibro->en_biblio) }}" placeholder="En Biblioteca">
                {!! $errors->first('en_biblio', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="en_arch">En Archivo</label>
                <input type="text" name="en_arch" class="form-control{{ $errors->has('en_arch') ? ' is-invalid' : '' }}" value="{{ old('en_arch', $tbLibro->en_arch) }}" placeholder="En Archivo">
                {!! $errors->first('en_arch', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" name="ubicacion" class="form-control{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}" value="{{ old('ubicacion', $tbLibro->ubicacion) }}" placeholder="Ubicación física o digital">
                {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="lugar">Lugar</label>
                <input type="text" name="lugar" class="form-control{{ $errors->has('lugar') ? ' is-invalid' : '' }}" value="{{ old('lugar', $tbLibro->lugar) }}" placeholder="Lugar de publicación">
                {!! $errors->first('lugar', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="img">Imagen de portada</label>
                <input type="file" name="img" class="form-control">
            </div>

            <div class="form-group" hidden>
                <label for="pdf">Archivo PDF</label>
                <input type="file" name="pdf" class="form-control">
            </div>

        </div>

        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">REGISTRAR</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>

    <?php include "bofer.php";?>
