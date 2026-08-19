

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">LISTA DE USUARIOS</h1>
@stop

@section('content')


<div class="card-body">
    <form action="{{ route('buscar_usuario') }}" method="GET">
        <div class="form-group">
            <label for="busqueda">Buscar usuario:</label>
            <input type="text" name="busqueda" id="busqueda" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <hr>

    @if($vistaUs)
        <p><strong>Usuario:</strong> {{ $vistaUs->email }}</p>
        <p><strong>Tipo:</strong> {{ $vistaUs->tipo }}</p>
        <p><strong>Nombre:</strong> {{ $vistaUs->nombre }}</p>
        <p><strong>Cédula de identidad:</strong> {{ $vistaUs->ci }}</p>
        <p><strong>Domicilio:</strong> {{ $vistaUs->domicilio }}</p>
        <p><strong>Celular:</strong> {{ $vistaUs->cel }}</p>
        <p><strong>Carrera:</strong> {{ $vistaUs->carrera }}</p>
        <p><strong>Rol:</strong> {{ $vistaUs->rool }}</p>
        
        @if($vistaUs->estado == 'activo')
            <a href="{{ route('deshabilitar_usuario', $vistaUs->id) }}" class="btn btn-danger">Deshabilitar</a>
        @else
            <a href="{{ route('habilitar_usuario', $vistaUs->id) }}" class="btn btn-success">Habilitar</a>
        @endif

    @else
        <p>No se encontró ningún usuario con el email proporcionado.</p>
    @endif
</div>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

@stop

@section('js')


<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@stop

