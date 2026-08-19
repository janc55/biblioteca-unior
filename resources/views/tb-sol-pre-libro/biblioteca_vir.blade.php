<?php $values = auth()->user()->permisos;  include "est.php";?>




<div class="card">
    <div class="card-header">
      <h3 class="card-title">VIRTUAL</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>

            <th>VER</th>
            <th>NOMBRE</th>
            <th>URL</th>






        </tr>
    </thead>
    <tbody>
        @foreach ($tbLibros as $tbLibro)
            <tr>

                <td> <a class="btn btn-primary" href="{{ $tbLibro->url }}" role="button" target="_blank">IR</a></td>

                <td>{{ $tbLibro->nombre }}</td>
                <td>{{ $tbLibro->url }}</td>









                                            </tr>
                                        @endforeach

</tbody>

</table>
</div>
<!-- /.card-body -->
</div>

    <?php include "bofer.php";?>

