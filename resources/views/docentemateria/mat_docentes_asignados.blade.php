@extends('adminlte::page')

@section('title', 'DESIGNACION DE DOCENTES')
@section('title', 'Universidad Privada de oruro')

@section('content_header')
    <h1>Designaciones de Materias</h1>
@stop

@section('content')

<style>
    table,th,td {
	border: 0.2px solid black;
}
td,th {
	align="center";
    style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">CODIGO:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"
}
</style>


<!-- <form method="POST" action="{{ route('filtrar_asignacion_carrera') }}"  role="form" enctype="multipart/form-data">
@csrf
@foreach ($TbCarrera as $TbCarrera)
<div class="form-group">
        <label class="form-control">Carrera</label>
        <select name="id_carre" id="id_carre" class="form-control">
       
                <option value="{{ $TbCarrera->id_carre}}">
                        <td> {{ $TbCarrera->nombre_carre }}</td>
                </option>
      
        </select>
        <button type="submit"  class="btn btn-success btn-sm"><i class="fa fa-fw fa-user"></i>Filtrar</button>
</div>
@break
@endforeach
</form> -->

<form action="{{ route('hoja_asigacion_docs') }}"method="post" target="_blank">
    <div>@csrf
    <button type="submit"  class="btn btn-danger btn-sm">
        <i class="fa fa-fw fa-user"></i>Hoja de Designaciones
    </button>
    </div>    
</form>
<br>
<h6>Universidad Privada de oruro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    @foreach ($datos as $datos2)   
    <br>  
    GESTION {{$datos2->periodo_gestion}}/{{$datos2->anio_gestion}}
    <br>
    @break
    @endforeach </h6>
<h6 align="center"> DESIGNACION DE DOCENTES<br/></h6>

<table id="example1" >
    <thead> 
        <tr>
            <th>CAR</th>
            <th>NIV</th>
            <th>TUR</th>
            <th>PAR</th>
            <th>SIGLA</th>
            <th>MATERIA</th>
            <th>DOCENTE</th>
            <th>TIPO</th>
            <th>INICIO</th>
            <th>FIN</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($datos as $datos)  
        <tr>
            <td align="center">{{ $datos->sigla_carre }}</td> 
            <td align="center">{{ $datos->numero }}</td>
            <td align="center">{{ $datos->sigla_turno }}</td>
            <td align="center">{{ $datos->paralelo_asig_mat }}</td>
            <td align="center">{{ $datos->codigo_mat }}</td>
            <td>{{ $datos->nombre_mat }}</td>
            <td>{{ $datos->grado }}. {{ $datos->nombre_doc }} {{ $datos->ape_p_doc }} {{ $datos->ape_m_doc }}</td>
            <td align="center">{{ $datos->tipo_asig_mat}}</td>
            <td>{{ $datos->inicio_desig }}</td>
            <td>{{ $datos->fin_desig }}</td>
        </tr>
    @endforeach  
    </tbody>
</table>           
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
