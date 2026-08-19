<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

          <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear trabajos de investigacion</span>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('libros.store') }}" role="form" enctype="multipart/form-data">
    @csrf
    <div class="box box-info padding-1">
        <div class="box-body">

            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" value="{{ old('codigo', $tbLibro->codigo) }}" placeholder="Código">
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="año">Año</label>
                <input type="text" name="año" class="form-control{{ $errors->has('año') ? ' is-invalid' : '' }}" value="{{ old('año', $tbLibro->año) }}" placeholder="Año">
                {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="nombre">Tutor</label>
                <input type="text" name="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ old('nombre', $tbLibro->nombre) }}" placeholder="Nombre del tutor">
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
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
                <label for="genero">Género</label>
                <input type="text" name="genero" class="form-control{{ $errors->has('genero') ? ' is-invalid' : '' }}" value="{{ old('genero', $tbLibro->genero) }}" placeholder="Género">
                {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="etiquetas">Etiquetas</label>
                <input type="text" name="etiquetas" class="form-control{{ $errors->has('etiquetas') ? ' is-invalid' : '' }}" value="{{ old('etiquetas', $tbLibro->etiquetas) }}" placeholder="Etiquetas">
                {!! $errors->first('etiquetas', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="nro_copias">Nro de Copias</label>
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
                <input type="text" name="ubicacion" class="form-control{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}" value="{{ old('ubicacion', $tbLibro->ubicacion) }}" placeholder="Ubicación">
                {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="img">Archivo o Imagen</label>
                <input type="file" name="img" class="form-control">
            </div>

            <input type="hidden" name="tp" value="7">
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
