<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>




<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>

<th>RESERVAR</th> <th>Imagen</th>
                                            <th>Isbm</th>
                                            <th>Codigo</th>
                                            <th>Año</th>

                                            <th>Editorial</th>
                                            <th>Autores</th>
                                            <th>Genero</th>
                                            <th>Etiquetas</th>
                                            <th>Descripcion</th>
                                            <th>Volumen</th>
                                            <th>Titulo</th>
                                            <th>Nro Paginas</th>
                                            <th>Presentacion</th>




                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tbLibros as $tbLibro)
                                            <tr>

   <td>
                                                    <form action="{{ route('solicitar.store') }}" method="POST">
                                                        <input type="hidden" id="id" name="id" value="{{ $tbLibro->id_libro }}">
                                                        @csrf
                                                         <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> RESERVAR</button>
                                                    </form>
                                                </td>

                                                <td>
                                                    <img src="libro/{{ $tbLibro->imagen }}" width="100" height="100" />

                                                   </td>

                                                <td>{{ $tbLibro->isbm }}</td>
                                                <td>{{ $tbLibro->codigo }}</td>
                                                <td>{{ $tbLibro->año }}</td>

                                                <td>{{ $tbLibro->editorial }}</td>
                                                <td>{{ $tbLibro->autores }}</td>
                                                <td>{{ $tbLibro->genero }}</td>
                                                <td>{{ $tbLibro->etiquetas }}</td>
                                                <td>{{ $tbLibro->descripcion }}</td>
                                                <td>{{ $tbLibro->volumen }}</td>
                                                <td>{{ $tbLibro->titulo }}</td>
                                                <td>{{ $tbLibro->nro_paginas }}</td>
                                                <td>{{ $tbLibro->presentacion }}</td>










                                            </tr>
                                        @endforeach

</tbody>

</table>
</div>
<!-- /.card-body -->
</div>

    <?php include "bofer.php";?>

