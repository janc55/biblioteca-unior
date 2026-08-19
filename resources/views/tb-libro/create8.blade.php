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
                        <span class="card-title">crear boletin</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('libros.store') }}" role="form" enctype="multipart/form-data">
    @csrf

    <div class="box box-info padding-1">
        <div class="box-body">

            <div class="form-group">
                <label for="descripcion">Nro de Boletín</label>
                <input type="text" name="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" value="{{ old('descripcion', $tbLibro->descripcion) }}" placeholder="Descripción">
                {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="año">Gestión</label>
                <input type="text" name="año" class="form-control{{ $errors->has('año') ? ' is-invalid' : '' }}" value="{{ old('año', $tbLibro->año) }}" placeholder="Año">
                {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="titulo">Contenido</label>
                <input type="text" name="titulo" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="{{ old('titulo', $tbLibro->titulo) }}" placeholder="Contenido">
                {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
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

            <input type="hidden" name="tp" value="8">

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
