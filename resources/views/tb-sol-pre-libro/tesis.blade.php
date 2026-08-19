<?php $values = auth()->user()->permisos;  include "est.php";?>




<div class="card">
    <div class="card-header">
      <h3 class="card-title">TESIS</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <style>
            .letragrande{font-size:15px;}
            thead {
    position: sticky;
    top: 0;
}
            </style>

      <table id="example1" class="table table-bordered table-striped  letragrande">
     <thead style="background: linear-gradient(90deg, rgba(254,0,0,0.18531162464985995) 100%, rgba(8,0,36,0.5634628851540616) 100%);
        ">
        <tr>
            <th></th>
            <th>RESERVAR</th>
            <th>Imagen</th>
            <th>Titulo</th>
            <th>autor</th>
            <th>Codigo</th>
            <th>Año</th>
            <th>Trabajo de Grado</th>




        </tr>
    </thead>
    <tbody>
        @foreach ($tbLibros as $tbLibro)
            <tr>

                <td></td>

<td>
                    <form action="{{ route('solicitar.store') }}" method="POST">
                        <input type="hidden" id="id" name="id" value="{{ $tbLibro->id_libro }}">
                        @csrf
                         <button type="submit" class=" btn-primary"><i class=""></i> RESERVAR</button>
                    </form>
                </td>

                <td>
                    <img src="libro/{{ $tbLibro->imagen }}" width="100" height="100" />

                   </td>
                <td>{{ $tbLibro->titulo }}</td>
                <td>{{ $tbLibro->autores }}</td>
                <td>{{ $tbLibro->codigo }}</td>

                <td>{{ $tbLibro->año }}</td>
                <td>{{ $tbLibro->trabajo_grado }}</td>









                                            </tr>
                                        @endforeach

</tbody>

</table>
</div>
<!-- /.card-body -->
</div>

    <?php include "bofer.php";?>

