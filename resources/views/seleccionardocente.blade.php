@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Materias del Docente</h1>
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
                                        <th>Nombre Docente</th>
                                        <th>CI</th>                                       
                                        <th>Materia</th>
                                        <th>Turno</th>                                                                   
                                        <th>Gestion</th>
                                        <!-- <th>Observación</th> -->
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vista as $vista)
                                        <tr>
                                            <td>{{ $vista->id_asig_mat }}</td>
                                            
											<td>{{ $vista->ape_p_doc }} {{ $vista->ape_m_doc }} {{ $vista->nombre_doc }}</td>
											<td>{{ $vista->ci}}</td>
                                            <td>{{ $vista->codigo_mat }} {{ $vista->nombre_mat }} {{ $vista->paralelo_asig_mat }}</td>                                            
                                            
                                            <td>{{ $vista->desc_turno}}</td>                                           									
                                            <td>{{ $vista->periodo_gestion}} / {{ $vista->anio_gestion}}</td>
                                            

                                            <td>
                                            <a class="btn btn-sm btn-success" href="{{ route('lista_nota.por_id',$vista->id_asig_mat) }}"><i class="fa fa-fw fa-edit"></i> Notas</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('lista_nota.nomina_est_id',$vista->id_asig_mat) }}"><i class="fa fa-fw fa-edit"></i> Nomina</a>
                                                  
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

