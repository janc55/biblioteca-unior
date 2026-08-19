<?php include "est.php";?>




<div class="card">
    <div class="card-header">
      <h3 class="card-title">LIBROS DIGITALES</h3>
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


            <th>VER</th>
            <th>NOMBRE</th>
            <th>AUTOR</th>

            <th>Isbm</th>
            <th>Codigo</th>
            <th>Año</th>

            <th>Editorial</th>
            <th>Genero</th>
            <th>Etiquetas</th>
            <th>Descripcion</th>
            <th>Volumen</th>





        </tr>
    </thead>
    <tbody>
        @foreach ($tbLibros as $tbLibro)
            <tr>


                <td>
                    
                    <embed src="https://softwaresitsys.com/pdf_unior/{{ $tbLibro->pdf }}#toolbar=0" width="500" height="375">
               </td>

                <td>{{ $tbLibro->nombre }}</td>


                <td>{{ $tbLibro->isbm }}</td>
                <td>{{ $tbLibro->codigo }}</td>
                <td>{{ $tbLibro->año }}</td>

                <td>{{ $tbLibro->editorial }}</td>
                <td>{{ $tbLibro->autores }}</td>
                <td>{{ $tbLibro->genero }}</td>
                <td>{{ $tbLibro->etiquetas }}</td>
                <td>{{ $tbLibro->descripcion }}</td>
                <td>{{ $tbLibro->volumen }}</td>








                                            </tr>
                                        @endforeach

</tbody>

</table>
</div>
<!-- /.card-body -->
</div>

    <?php include "bofer.php";?>

