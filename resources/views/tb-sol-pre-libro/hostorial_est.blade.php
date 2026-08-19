<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


<div class="card">
    <div class="card-header">
      <h3 class="card-title">HISTORIAL</h3>
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

            <th>imagen</th>
            <th>estado</th>
            <th>presentacion</th>

            <th>fecha_sol</th>
            <th>hora_sol</th>
            <th>fecha_Dev</th>
            <th>hora_dev</th>

            <th>isbm</th>
            <th>codigo</th>
            <th>Titulo</th>

            <th>obs</th>





        </tr>
    </thead>
    <tbody>
        @foreach ($tbLibros as $tbLibro)
            <tr>


                <td>
                    <img src="libro/{{ $tbLibro->imagen }}" width="100" height="100" />

                   </td>

                   <td>{{ $tbLibro->estado }}</td>
                   <td>{{ $tbLibro->presentacion }}</td>
                   <td>{{ $tbLibro->fecha_sol }}</td>
                   <td>{{ $tbLibro->hora_sol }}</td>
                   <td>{{ $tbLibro->fecha_Dev }}</td>
                   <td>{{ $tbLibro->hora_dev }}</td>

                   <td>{{ $tbLibro->isbm }}</td>
                   <td>{{ $tbLibro->codigo }}</td>

                   <td>{{ $tbLibro->linro_nom }}</td>

                   <td>{{ $tbLibro->obs }}</td>






                                            </tr>
                                        @endforeach

</tbody>

</table>
</div>
<!-- /.card-body -->
</div>

    <?php include "bofer.php";?>

