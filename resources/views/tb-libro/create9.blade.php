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
                        <span class="card-title">crear gacetas</span>
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
                <label for="ciudad">Ciudad</label>
                <input type="text" name="ciudad" class="form-control{{ $errors->has('ciudad') ? ' is-invalid' : '' }}" value="{{ old('ciudad', $tbLibro->ciudad) }}" placeholder="Ciudad">
                {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="editorial">Editorial</label>
                <input type="text" name="editorial" class="form-control{{ $errors->has('editorial') ? ' is-invalid' : '' }}" value="{{ old('editorial', $tbLibro->editorial) }}" placeholder="Editorial">
                {!! $errors->first('editorial', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="descripcion">Características</label>
                <input type="text" name="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" value="{{ old('descripcion', $tbLibro->descripcion) }}" placeholder="Descripción">
                {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="nro_paginas">Nro de Páginas</label>
                <input type="text" name="nro_paginas" class="form-control{{ $errors->has('nro_paginas') ? ' is-invalid' : '' }}" value="{{ old('nro_paginas', $tbLibro->nro_paginas) }}" placeholder="Número de páginas">
                {!! $errors->first('nro_paginas', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="presentacion">Presentación</label>
                <select name="presentacion" class="form-control">
                    <option value="{{ $tbLibro->presentacion }}" selected>{{ $tbLibro->presentacion }}</option>
                    @foreach ($pres as $p)
                        <option value="{{ $p->des_pres }}">{{ $p->des_pres }}</option>
                    @endforeach
                </select>
                {!! $errors->first('presentacion', '<div class="invalid-feedback">:message</div>') !!}
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

            <input type="hidden" name="tp" value="9">

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
