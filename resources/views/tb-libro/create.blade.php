<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


          <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tb Libro</span>
                    </div>
                    <div class="card-body">
                        <<form method="POST" action="{{ route('libros.store') }}" role="form" enctype="multipart/form-data">
    @csrf
    <div class="box box-info padding-1">
        <div class="box-body">

            <input type="hidden" name="id_libro" value="{{ old('id_libro', $tbLibro->id_libro) }}">

            <div class="form-group">
                <label for="isbm">ISBN</label>
                <input type="text" name="isbm" class="form-control{{ $errors->has('isbm') ? ' is-invalid' : '' }}" value="{{ old('isbm', $tbLibro->isbm) }}" placeholder="Isbm">
                {!! $errors->first('isbm', '<div class="invalid-feedback">:message</div>') !!}
            </div>

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

            <input type="hidden" name="nombre" value="{{ old('nombre', $tbLibro->nombre) }}">

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
                <label for="etiquetas">Etiquetas</label>
                <input type="text" name="etiquetas" class="form-control{{ $errors->has('etiquetas') ? ' is-invalid' : '' }}" value="{{ old('etiquetas', $tbLibro->etiquetas) }}" placeholder="Etiquetas">
                {!! $errors->first('etiquetas', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" name="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" value="{{ old('url', $tbLibro->url) }}" placeholder="URL">
                {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" value="{{ old('descripcion', $tbLibro->descripcion) }}" placeholder="Descripción">
                {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
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
                <label for="nro_paginas">Nro Páginas</label>
                <input type="text" name="nro_paginas" class="form-control{{ $errors->has('nro_paginas') ? ' is-invalid' : '' }}" value="{{ old('nro_paginas', $tbLibro->nro_paginas) }}" placeholder="Nro Páginas">
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

            <input type="hidden" name="trabajo_grado" value="{{ old('trabajo_grado', $tbLibro->trabajo_grado) }}">

            <div class="form-group">
                <label for="digital">Digital</label>
                <input type="text" name="digital" class="form-control{{ $errors->has('digital') ? ' is-invalid' : '' }}" value="{{ old('digital', $tbLibro->digital) }}" placeholder="Digital">
                {!! $errors->first('digital', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="nro_copias">Nro Copias</label>
                <input type="text" name="nro_copias" class="form-control{{ $errors->has('nro_copias') ? ' is-invalid' : '' }}" value="{{ old('nro_copias', $tbLibro->nro_copias) }}" placeholder="Nro Copias">
                {!! $errors->first('nro_copias', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="en_biblio">En Biblio</label>
                <input type="text" name="en_biblio" class="form-control{{ $errors->has('en_biblio') ? ' is-invalid' : '' }}" value="{{ old('en_biblio', $tbLibro->en_biblio) }}" placeholder="En Biblio">
                {!! $errors->first('en_biblio', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="en_arch">En Arch</label>
                <input type="text" name="en_arch" class="form-control{{ $errors->has('en_arch') ? ' is-invalid' : '' }}" value="{{ old('en_arch', $tbLibro->en_arch) }}" placeholder="En Arch">
                {!! $errors->first('en_arch', '<div class="invalid-feedback">:message</div>') !!}
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

            <div class="form-group">
                <label for="img">Imagen (opcional)</label>
                <input type="file" name="img" class="form-control">
            </div>

            <div class="form-group" hidden>
                <label for="pdf">PDF (opcional)</label>
                <input type="file" name="pdf" class="form-control">
            </div>

            <input type="hidden" name="tp" value="1">

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
