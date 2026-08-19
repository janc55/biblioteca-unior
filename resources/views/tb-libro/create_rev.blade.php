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
                        <span class="card-title">REVISTAS</span>
                    </div>
                    <div class="card-body">
                       <form method="POST" action="{{ route('libros.store') }}" role="form" enctype="multipart/form-data">
    @csrf

    <div class="box box-info padding-1">
        <div class="box-body">

            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" placeholder="Codigo" value="{{ old('codigo', $tbLibro->codigo) }}">
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" placeholder="Titulo" value="{{ old('titulo', $tbLibro->titulo) }}">
                {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="año">Año</label>
                <input type="text" name="año" class="form-control{{ $errors->has('año') ? ' is-invalid' : '' }}" placeholder="Año" value="{{ old('año', $tbLibro->año) }}">
                {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="autores">Autor</label>
                <input type="text" name="autores" class="form-control{{ $errors->has('autores') ? ' is-invalid' : '' }}" placeholder="Autores" value="{{ old('autores', $tbLibro->autores) }}">
                {!! $errors->first('autores', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" name="ubicacion" class="form-control{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}" placeholder="Ubicacion" value="{{ old('ubicacion', $tbLibro->ubicacion) }}">
                {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group" hidden>
                <label for="presentacion">Presentación</label>
                <select name="presentacion" class="form-control">
                    <option value="VIRTUAL" selected>REVISTA</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nro_copias">Nro Copias</label>
                <input type="text" name="nro_copias" class="form-control{{ $errors->has('nro_copias') ? ' is-invalid' : '' }}" placeholder="Nro Copias" value="{{ old('nro_copias', $tbLibro->nro_copias) }}">
                {!! $errors->first('nro_copias', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="en_biblio">En Biblio</label>
                <input type="text" name="en_biblio" class="form-control{{ $errors->has('en_biblio') ? ' is-invalid' : '' }}" placeholder="En Biblio" value="{{ old('en_biblio', $tbLibro->en_biblio) }}">
                {!! $errors->first('en_biblio', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="en_arch">En Arch</label>
                <input type="text" name="en_arch" class="form-control{{ $errors->has('en_arch') ? ' is-invalid' : '' }}" placeholder="En Arch" value="{{ old('en_arch', $tbLibro->en_arch) }}">
                {!! $errors->first('en_arch', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="img">Subir archivo (PDF o Imagen)</label>
                <input type="file" name="img" class="form-control">
            </div>

            <input type="hidden" name="tp" value="6">

        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>

    <?php include "bofer.php";?>
