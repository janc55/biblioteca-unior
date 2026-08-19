@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Boletas de Estudiantes</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                        <form method="POST" action="{{ route('boleta_buscar_est') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div>
                            <input class="col-sm-7" class="form-control " type="text" name="dato" id="dato" placeholder=" 🔎 Buscar por nombre o código" size="40" maxlength="70"> 
                            <input class="col-sm-3 btn btn-success btn-sm float-left bi bi-0-square-fill" type="submit" value="Buscar" >
                            </div> 
                                <div id="resultados"></div>                               
                            </form>

                            
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
                                        
										<th>Codigo</th>
										<th>Nombre</th>
										<th>CI</th>
                                        <th>Carrera</th>
                                        <th>Turno</th>
                                        <th>Plan</th>
                                        <th>Asignar Boleta</th>

							
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista as $lista)
                                        <tr>
                                          
                                        <td>{{ $lista->id_est}}</td>
											<!-- <td>{{ $lista->cod_est}}</td> -->
											<td>{{ $lista->ape_p_est}} {{ $lista->ape_m_est}} {{ $lista->nombre_est}}</td>
											<td>{{ $lista->ci_est}}</td>
                                            <td>{{ $lista->nombre_carre}}</td>
                                            <td>{{ $lista->desc_turno}}</td>
                                            <td>{{ $lista->nombre_plan}}</td>

                                            <td>
                                              
                                            <div class="card-body">
                                            <form method="POST" action="{{ route('boleta_asignar') }}"  role="form" enctype="multipart/form-data">
                                            @csrf
                                                  <!-- $dato="ape_p_est ape_m_est nombre_est" -->

                                            <input type="hidden" name="id_est"   id="id_est"   value="{{ $lista->id_est}}">
                                            <input type="hidden" name="dato"   id="dato"   value="{{ $lista->ape_p_est}} {{ $lista->ape_m_est}} {{ $lista->nombre_est}}">
                                           

                                                    <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Crear Boleta</button>
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
