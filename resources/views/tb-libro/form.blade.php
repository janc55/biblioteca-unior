<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label>Id Libro</label>
            <input type="text" name="id_libro" value="{{ old('id_libro', $tbLibro->id_libro) }}" class="form-control @error('id_libro') is-invalid @enderror">
            @error('id_libro') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>ISBM</label>
            <input type="text" name="isbm" value="{{ old('isbm', $tbLibro->isbm) }}" class="form-control @error('isbm') is-invalid @enderror">
            @error('isbm') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Código</label>
            <input type="text" name="codigo" value="{{ old('codigo', $tbLibro->codigo) }}" class="form-control @error('codigo') is-invalid @enderror">
            @error('codigo') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Año</label>
            <input type="text" name="año" value="{{ old('año', $tbLibro->año) }}" class="form-control @error('año') is-invalid @enderror">
            @error('año') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre', $tbLibro->nombre) }}" class="form-control @error('nombre') is-invalid @enderror">
            @error('nombre') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Ciudad</label>
            <input type="text" name="ciudad" value="{{ old('ciudad', $tbLibro->ciudad) }}" class="form-control @error('ciudad') is-invalid @enderror">
            @error('ciudad') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Editorial</label>
            <input type="text" name="editorial" value="{{ old('editorial', $tbLibro->editorial) }}" class="form-control @error('editorial') is-invalid @enderror">
            @error('editorial') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Autores</label>
            <input type="text" name="autores" value="{{ old('autores', $tbLibro->autores) }}" class="form-control @error('autores') is-invalid @enderror">
            @error('autores') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Género</label>
            <input type="text" name="genero" value="{{ old('genero', $tbLibro->genero) }}" class="form-control @error('genero') is-invalid @enderror">
            @error('genero') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Etiquetas</label>
            <input type="text" name="etiquetas" value="{{ old('etiquetas', $tbLibro->etiquetas) }}" class="form-control @error('etiquetas') is-invalid @enderror">
            @error('etiquetas') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>URL</label>
            <input type="text" name="url" value="{{ old('url', $tbLibro->url) }}" class="form-control @error('url') is-invalid @enderror">
            @error('url') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Descripción</label>
            <input type="text" name="descripcion" value="{{ old('descripcion', $tbLibro->descripcion) }}" class="form-control @error('descripcion') is-invalid @enderror">
            @error('descripcion') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Volumen</label>
            <input type="text" name="volumen" value="{{ old('volumen', $tbLibro->volumen) }}" class="form-control @error('volumen') is-invalid @enderror">
            @error('volumen') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Título</label>
            <input type="text" name="titulo" value="{{ old('titulo', $tbLibro->titulo) }}" class="form-control @error('titulo') is-invalid @enderror">
            @error('titulo') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Nro Páginas</label>
            <input type="text" name="nro_paginas" value="{{ old('nro_paginas', $tbLibro->nro_paginas) }}" class="form-control @error('nro_paginas') is-invalid @enderror">
            @error('nro_paginas') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Presentación</label>
            <select name="presentacion" class="form-control">
                <option value="{{ $tbLibro->presentacion }}" selected>{{ $tbLibro->presentacion }}</option>
                @foreach ($pres as $p)
                    <option value="{{ $p->des_pres }}">{{ $p->des_pres }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Trabajo de Grado</label>
            <input type="text" name="trabajo_grado" value="{{ old('trabajo_grado', $tbLibro->trabajo_grado) }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Digital</label>
            <input type="text" name="digital" value="{{ old('digital', $tbLibro->digital) }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Nro Copias</label>
            <input type="text" name="nro_copias" value="{{ old('nro_copias', $tbLibro->nro_copias) }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Ubicación</label>
            <input type="text" name="ubicacion" value="{{ old('ubicacion', $tbLibro->ubicacion) }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Lugar</label>
            <input type="text" name="lugar" value="{{ old('lugar', $tbLibro->lugar) }}" class="form-control">
        </div>

        <div class="form-group">
            <input type="file" name="img">
        </div>

        <div class="form-group" hidden>
            <input type="file" name="pdf">
        </div>

    </div>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>