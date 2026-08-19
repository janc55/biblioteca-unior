@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Materias del Estudiante</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                            @foreach ($lista as $lista3)
                                Estudiante: {{ $lista3->nombre_est }} {{ $lista3->ape_p_est }} {{ $lista3->ape_m_est }} <br>
                                Codigo: {{ $lista3->cod_est }} <br>
                                CI: {{ $lista3->ci_est }} <br>
                                Carrera: {{ $lista3->nombre_carre }} <br>
                            @break
                            @endforeach
                            </span>

                            
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <!-- <th>No</th> -->
                                        
									
										<th>Docente</th>									
                                        <th>Materia</th>                                        
                                        <th>Paralelo</th>
                                        <th>Turno</th>
                                        <th>Gestion</th>
                                        <th>Asignar</th>
							
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista2 as $lista4)
                                        <tr>
                                          
                                            
										
											<td>{{ $lista4->ape_p_doc}} {{ $lista4->ape_m_doc}} {{ $lista4->nombre_doc}}</td>
                                            <td>{{ $lista4->codigo_mat}} {{ $lista4->nombre_mat}}</td>
                                            <td>{{ $lista4->paralelo_asig_mat}}</td>
                                            <td>{{ $lista4->desc_turno}}</td>
                                            <td>{{ $lista4->periodo_gestion}}/{{ $lista4->anio_gestion}}</td>

                                            <td>
                                               
                                            <div class="card-body">
                                            <form method="POST" action="{{ route('asigP') }}"  role="form" enctype="multipart/form-data">
                                            @csrf
                                           
                                            @foreach ($lista as $lista5)
                                                <input type="hidden" name="id_est"   id="id_est"   value="{{ $lista5->id_est}}">                                               
                                                <input type="hidden" name="id_turno" id="id_turno" value="{{ $lista5->id_turno}}">
                                            @endforeach
                                                <input type="hidden" name="id_asig_mat" id="id_asig_mat" value="{{ $lista4->id_asig_mat}}">
                                          
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-fw fa-pencil"></i> Asignar</button>
                                                </form>  
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
