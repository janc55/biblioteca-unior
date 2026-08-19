<?php
$values = auth()->user()->permisos;
include "est.php";?>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif



<div class="card">
    <div class="card-header">
      <h3 class="card-title">SOLICITUD DE REVISTAS</h3>
      <br>

        <form method="POST" action="{{ route('sol_rev') }}"  role="form" enctype="multipart/form-data">
            @csrf
        <div class="form-group mb-2">
          <label for="staticEmail2" class="sr-only">Buscar:</label>
          <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Buscar:">
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="bus" class="sr-only">Buscar</label>
          <input style="background: linear-gradient(90deg, rgba(254,0,0,0.18531162464985995) 100%, rgba(8,0,36,0.5634628851540616) 100%);
          " type="text" class="form-control" name ="bus" id="bus" placeholder="Ingresar Librio">
       <button type="submit" class="btn btn-primary mb-2">Buscar</button>
    </div>

      </form>
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
 <th>Codigo</th>
                                    <th>Titulo</th>
                                    <th>Año</th>
                                    <th>Autores</th>
                                    <th>Ubicacion</th>
                                    <th>Ciudad</th>
                                    <th>Presentacion</th>

                                     


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
                                                         <button type="submit" class="btn btn-primary btn-sm"><i ></i> RESERVAR</button>
                                                    </form>
                                                </td>

                                                <td>
                                                    <img src="libro/{{ $tbLibro->imagen }}" width="50" height="50" />

                                                   </td>
 
                                                   <td>{{ $tbLibro->codigo }}</td>
                                        <td>{{ $tbLibro->titulo }}</td>
                                        <td>{{ $tbLibro->año }}</td>
                                       
                                        <td>{{ $tbLibro->autores }}</td>
                                       

                                        <td>{{ $tbLibro->ubicacion }}</td>
                                        <td>{{ $tbLibro->ciudad }}</td>
                                       
                                        <td>{{ $tbLibro->presentacion }}</td>
                                       









                                            </tr>
                                        @endforeach

</tbody>

</table>
</div>
<!-- /.card-body -->
</div>

    <?php include "boferest.php";?>

