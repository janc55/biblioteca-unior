@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Inscripciones de Estudiantes</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"> 
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                        <form action="../../form-result.php" method="post" target="_blank">
                            <div>
                            <input class="col-sm-7" class="form-control " type="search" name="busqueda" placeholder=" 🔎 Busca" size="20" maxlength="70"> 
                            <input class="col-sm-3 btn btn-success btn-sm float-left bi bi-0-square-fill" type="submit" value="Buscar" >
                            </div>    
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
                                                                         
										<th>Cod</th>
										<th>Estudiante</th>
										<!-- <th>CI</th> -->
										<th>Carrera</th>
										<th>Turno</th>
										<th>Gestion</th>
										<th>Plan de Pago</th>
                                        <th>Beca</th>
										<!-- <th>N° Boleta</th> -->

                                        <th>Obs</th>
                                        <th>Crear</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista as $lista)
                                        <tr>
                                            
											<td>{{ $lista->id_est }}</td>
                                            <!-- <td>{{ $lista->cod_est }}</td> -->
											<td>{{ $lista->ape_p_est}} {{ $lista->ape_m_est}} {{ $lista->nombre_est}}</td>
											<!-- <td>{{ $lista->ci_est }}</td> -->
											<td>{{ $lista->nombre_carre }}</td>
											<td>{{ $lista->desc_turno }}</td>
											<td>{{ $lista->periodo_gestion }}/{{ $lista->anio_gestion }}</td>
											<td>{{ $lista->nombre_plan }}</td>											                                      
                                            <form method="POST" action="{{ route('reg_ins') }}"  role="form" enctype="multipart/form-data">
                                           
                                            <td>
                                                <select name="id_beca" id="id_beca" class="form-control">
                                                 @foreach ($lista2 as $listaa)
                                                     <option value="{{ $listaa->id_beca}}">                      
                                                              {{ $listaa->nombre_beca }}
                                                     </option> 
                                                 @endforeach
                                                </select> 
                                            </td> 
                                            <td>
                                            <input type="text" id="obs_ins" name="obs_ins" value="Ninguna" size="5" maxlength="10">
                                            </td>
                                            <td>
                                      
                                            @csrf                                         
                                            
                                            <input type="hidden" name="id_est"       id="id_est"        value="{{ $lista->id_est}}">
                                            <input type="hidden" name="id_gestion"   id="id_gestion"    value="{{ $lista->id_gestion}}">
                                            <input type="hidden" name="id_boleta"    id="id_boleta"     value="{{ $lista->id_boleta }}">
                                            
                                                  
                                                    <input type="submit" class="btn btn-success">
                                            </td>
                                            </form>
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
