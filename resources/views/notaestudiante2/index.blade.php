@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nota Estudiantes</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                        <form method="POST" action="{{ route('nota_estudiante_pdf') }}"  role="form" enctype="multipart/form-data">
                            @csrf
 
                        
                        <div>
                            <input class="col-sm-7" class="form-control " type="search" name="busqueda" placeholder=" 🔎 Busca" size="20" maxlength="70"> 
                            <input class="col-sm-3 btn btn-success btn-sm float-left bi bi-0-square-fill" type="submit" value="Buscar" >                         
                            </div>    
                            </form>

                             <div class="float-right">
                               
                              </div>
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
                                        <th>No</th>
                                        <th>Nombre Estudiante</th>
                                        <!-- <th>CI</th>                                        -->
                                        <th>Materia</th>
                                        <th>Nota 1P</th>
                                        <th>Nota 2P</th>
                                        <th>Nota EF</th>
                                        <th>Nota 2T</th>                                      
                                        <th>Nota Final</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vista as $vista)
                                        <tr>
                                            <td></td>
                                            
											<td>{{ $vista->ape_p_est }} {{ $vista->ape_m_est }} {{ $vista->nombre_est }}</td>
											<!-- <td>{{ $vista->ci_est}}</td> -->
                                            <td>{{ $vista->codigo_mat }} {{ $vista->nombre_mat }} {{ $vista->paralelo_asig_mat }}</td>                                            
                                            <td>{{ $vista->eval_p1}}</td>
                                            <td>{{ $vista->eval_p2}}</td>
                                            <td>{{ $vista->eval_fin}}</td>
                                            <td>{{ $vista->eval_2t}}</td>                                           									
                                            <!-- <td>{{ $vista->periodo_asig_mat}} / {{ $vista->gestion_asig_mat}}</td> -->
                                            <td>{{ $vista->NotaFinal}}</td>
                                            <td>{{ $vista->NotaEstado}}</td> 
                                            <td>
                                            <form method="POST" action="{{ route('calificacion_est') }}"  role="form" enctype="multipart/form-data">
                                                @csrf
                                                <div>
                                                <input class="col-sm-3" class="form-control " type="hidden" name="id_est" id="id_est" value="{{ $vista->id_est }}"> 
                                                <button type="submit"  class="btn btn-warning btn-sm"><i class="fa fa-fw fa-user"></i>Calificaciones</button>
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
