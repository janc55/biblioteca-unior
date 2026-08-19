<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Libro:</strong>
                            {{ $tbLibro->id_libro }}
                        </div>
                        <div class="form-group">
                            <strong>Isbm:</strong>
                            {{ $tbLibro->isbm }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $tbLibro->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $tbLibro->año }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tbLibro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $tbLibro->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $tbLibro->editorial }}
                        </div>
                        <div class="form-group">
                            <strong>Autores:</strong>
                            {{ $tbLibro->autores }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $tbLibro->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Etiquetas:</strong>
                            {{ $tbLibro->etiquetas }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $tbLibro->url }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tbLibro->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Volumen:</strong>
                            {{ $tbLibro->volumen }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $tbLibro->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Nro Paginas:</strong>
                            {{ $tbLibro->nro_paginas }}
                        </div>
                        <div class="form-group">
                            <strong>Presentacion:</strong>
                            {{ $tbLibro->presentacion }}
                        </div>
                        <div class="form-group">
                            <strong>Trabajo Grado:</strong>
                            {{ $tbLibro->trabajo_grado }}
                        </div>
                        <div class="form-group">
                            <strong>Digital:</strong>
                            {{ $tbLibro->digital }}
                        </div>
                        <div class="form-group">
                            <strong>Nro Copias:</strong>
                            {{ $tbLibro->nro_copias }}
                        </div>
                        <div class="form-group">
                            <strong>En Biblio:</strong>
                            {{ $tbLibro->en_biblio }}
                        </div>
                        <div class="form-group">
                            <strong>En Arch:</strong>
                            {{ $tbLibro->en_arch }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $tbLibro->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Pdf:</strong>
                            {{ $tbLibro->pdf }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "bofer.php";?>
