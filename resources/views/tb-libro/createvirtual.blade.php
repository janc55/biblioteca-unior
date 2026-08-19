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

            <!-- Campos visibles -->
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
                       value="{{ old('nombre', $tbLibro->nombre) }}" placeholder="Nombre">
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" name="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                       value="{{ old('url', $tbLibro->url) }}" placeholder="URL de acceso al libro">
                {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <!-- Campos ocultos -->
            @foreach ([
                'id_libro', 'isbm', 'codigo', 'año', 'ciudad', 'editorial',
                'autores', 'genero', 'etiquetas', 'descripcion', 'volumen',
                'titulo', 'nro_paginas', 'presentacion', 'trabajo_grado', 'digital',
                'nro_copias', 'en_biblio', 'en_arch', 'ubicacion', 'lugar'
            ] as $field)
                <input type="hidden" name="{{ $field }}" value="{{ old($field, $tbLibro->$field) }}">
            @endforeach

            <input type="hidden" name="tp" value="4">

            <!-- Archivos ocultos -->
            <input type="file" name="img" hidden>
            <input type="file" name="pdf" hidden>

        </div>

        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Registrar Libro Virtual</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>

    <?php include "bofer.php";?>
