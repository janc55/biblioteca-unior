<?php include "inv.php"; ?>

@php
    function texto_limpio($valor)
    {
        if ($valor === null) {
            return '';
        }

        $texto = (string) $valor;
        $texto = trim($texto);

        if ($texto === '') {
            return '';
        }

        $original = $texto;

        if (function_exists('mb_detect_encoding')) {
            $enc = mb_detect_encoding($texto, ['UTF-8', 'ISO-8859-1', 'Windows-1252', 'ASCII'], true);

            if ($enc && $enc !== 'UTF-8') {
                $tmp = @mb_convert_encoding($texto, 'UTF-8', $enc);
                if ($tmp !== false && $tmp !== '') {
                    $texto = $tmp;
                }
            }
        }

        $patronesRotos = ['Ã¡','Ã©','Ã­','Ã³','Ãº','Ã','Ã‰','Ã','Ã“','Ãš','Ã±','Ã‘','â€“','â€”','â€œ','â€','â€˜','â€™','Â','�','C�digo','T�tulo','G�nero','Descripci�n','Ubicaci�n','P�ginas'];

        $hayRoto = false;
        foreach ($patronesRotos as $p) {
            if (strpos($texto, $p) !== false) {
                $hayRoto = true;
                break;
            }
        }

        if ($hayRoto) {
            $intentos = [];

            $i1 = @utf8_encode($texto);
            if ($i1 !== false && $i1 !== '') {
                $intentos[] = $i1;
            }

            $i2 = @utf8_decode($texto);
            if ($i2 !== false && $i2 !== '') {
                $intentos[] = $i2;
            }

            $i3 = @iconv('ISO-8859-1', 'UTF-8//IGNORE', $texto);
            if ($i3 !== false && $i3 !== '') {
                $intentos[] = $i3;
            }

            $i4 = @iconv('Windows-1252', 'UTF-8//IGNORE', $texto);
            if ($i4 !== false && $i4 !== '') {
                $intentos[] = $i4;
            }

            foreach ($intentos as $intento) {
                if (
                    strpos($intento, 'Ã') === false &&
                    strpos($intento, '�') === false &&
                    strpos($intento, 'Â') === false
                ) {
                    $texto = $intento;
                    break;
                }
            }
        }

        return $texto;
    }
@endphp

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius:14px;">
    <i class="fas fa-check-circle mr-1"></i> {{ texto_limpio($message) }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<style>
    .lib-card{
        border: 0;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,.10);
        overflow: hidden;
        background: #ffffff;
    }

    .lib-header{
        background: linear-gradient(135deg, #000000 0%, #5e0000 45%, #c00000 100%);
        color: #ffffff;
        padding: 24px 24px 22px 24px;
    }

    .lib-header h3{
        margin: 0;
        font-size: 26px;
        font-weight: 800;
        letter-spacing: .4px;
    }

    .lib-subtitle{
        margin-top: 6px;
        opacity: .92;
        font-size: 14px;
    }

    .search-box{
        background: #ffffff;
        border-radius: 18px;
        box-shadow: 0 8px 24px rgba(0,0,0,.08);
        padding: 18px;
        margin-top: -18px;
        position: relative;
        z-index: 5;
    }

    .search-label{
        font-weight: 700;
        color: #111111;
        margin-bottom: 8px;
        display: block;
    }

    .search-input{
        height: 48px;
        border-radius: 12px;
        border: 1px solid #d1d5db;
        box-shadow: none !important;
    }

    .search-input:focus{
        border-color: #c00000;
        box-shadow: 0 0 0 0.2rem rgba(192,0,0,.12) !important;
    }

    .btn-buscar{
        height: 48px;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        color: #ffffff;
        background: linear-gradient(135deg, #c00000 0%, #7a0000 100%);
        box-shadow: 0 8px 18px rgba(192,0,0,.22);
    }

    .btn-buscar:hover{
        color: #ffffff;
        opacity: .96;
        transform: translateY(-1px);
    }

    .info-bar{
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 16px;
    }

    .info-chip{
        background: #111111;
        color: #ffffff;
        padding: 9px 16px;
        border-radius: 999px;
        font-weight: 700;
        font-size: 13px;
        box-shadow: 0 6px 16px rgba(0,0,0,.10);
    }

    .table-wrap{
        border-radius: 18px;
        overflow: hidden;
        box-shadow: inset 0 0 0 1px #ececec;
        background: #ffffff;
    }

    .table-responsive{
        max-height: 72vh;
    }

    .table{
        margin-bottom: 0;
    }

    .table thead th{
        position: sticky;
        top: 0;
        z-index: 2;
        background: #000000 !important;
        color: #ffffff !important;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: .3px;
        white-space: nowrap;
        vertical-align: middle;
        border: none !important;
    }

    .table td{
        vertical-align: middle !important;
        font-size: 14px;
        color: #222222;
    }

    .table tbody tr:hover{
        background: #fff1f1;
    }

    .lib-img{
        width: 62px;
        height: 78px;
        object-fit: cover;
        border-radius: 10px;
        border: 2px solid #f0f0f0;
        box-shadow: 0 4px 12px rgba(0,0,0,.10);
        background: #ffffff;
    }

    .titulo-libro{
        font-weight: 800;
        color: #111111;
        min-width: 180px;
    }

    .badge-genero{
        display: inline-block;
        padding: 6px 12px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
        background: #c00000;
        color: #ffffff;
    }

    .desc-box{
        min-width: 220px;
        max-width: 320px;
        white-space: normal;
        line-height: 1.35;
    }

    .small-col{
        white-space: nowrap;
    }

    .empty-box{
        text-align: center;
        padding: 45px 20px;
        color: #6b7280;
    }

    .empty-box i{
        color: #c00000;
    }
</style>

<div class="card lib-card">
    <div class="lib-header">
        <h3><i class="fas fa-book-reader mr-2"></i> SOLICITUD DE LIBROS</h3>
        <div class="lib-subtitle">Consulta r&aacute;pida del cat&aacute;logo bibliogr&aacute;fico</div>
    </div>

    <div class="card-body" style="background:#f8f8f8;">
        <div class="container-fluid px-0">

            <div class="search-box mb-4">
                <form method="POST" action="{{ route('fil_invi') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-9 col-lg-10">
                            <label for="bus" class="search-label">
                                <i class="fas fa-search mr-1" style="color:#c00000;"></i> Buscar libro
                            </label>
                            <input
                                type="text"
                                class="form-control search-input"
                                name="bus"
                                id="bus"
                                value="{{ old('bus') }}"
                                placeholder="Ingrese t&iacute;tulo, autor, editorial, g&eacute;nero, c&oacute;digo o ISBN">
                        </div>
                        <div class="col-md-3 col-lg-2 mt-3 mt-md-0">
                            <button type="submit" class="btn btn-buscar btn-block">
                                <i class="fas fa-search mr-1"></i> Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="info-bar">
                <span class="info-chip">
                    <i class="fas fa-books mr-1"></i> Total registros: {{ count($tbLibros) }}
                </span>
            </div>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width:50px;">#</th>
                                <th>Imagen</th>
                                <th>T&iacute;tulo</th>
                                <th>ISBN</th>
                                <th>C&oacute;digo</th>
                                <th>A&ntilde;o</th>
                                <th>Editorial</th>
                                <th>Autores</th>
                                <th>G&eacute;nero</th>
                                <th>Etiquetas</th>
                                <th>Descripci&oacute;n</th>
                                <th>Volumen</th>
                                <th>Nro. p&aacute;ginas</th>
                                <th>Presentaci&oacute;n</th>
                                <th>Ubicaci&oacute;n</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tbLibros as $tbLibro)
                                <tr>
                                    <td class="text-center small-col">{{ $loop->iteration }}</td>

                                    <td class="text-center">
                                        <img src="libro/{{ $tbLibro->imagen }}" alt="Libro" class="lib-img">
                                    </td>

                                    <td>
                                        <div class="titulo-libro">{{ texto_limpio($tbLibro->titulo ?? '') }}</div>
                                    </td>

                                    <td class="small-col">{{ texto_limpio($tbLibro->isbm ?? '') }}</td>
                                    <td class="small-col">{{ texto_limpio($tbLibro->codigo ?? '') }}</td>
                                    <td class="small-col">{{ texto_limpio($tbLibro->{'a単o'} ?? '') }}</td>
                                    <td>{{ texto_limpio($tbLibro->editorial ?? '') }}</td>
                                    <td>{{ texto_limpio($tbLibro->autores ?? '') }}</td>
                                    <td><span class="badge-genero">{{ texto_limpio($tbLibro->genero ?? '') }}</span></td>
                                    <td>{{ texto_limpio($tbLibro->etiquetas ?? '') }}</td>
                                    <td><div class="desc-box">{{ texto_limpio($tbLibro->descripcion ?? '') }}</div></td>
                                    <td class="small-col">{{ texto_limpio($tbLibro->volumen ?? '') }}</td>
                                    <td class="small-col">{{ texto_limpio($tbLibro->nro_paginas ?? '') }}</td>
                                    <td class="small-col">{{ texto_limpio($tbLibro->presentacion ?? '') }}</td>
                                    <td class="small-col">{{ texto_limpio($tbLibro->ubicacion ?? '') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="15">
                                        <div class="empty-box">
                                            <i class="fas fa-book-open fa-2x mb-3"></i>
                                            <div>No se encontraron libros para mostrar.</div>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include "boferest.php"; ?>