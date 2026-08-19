@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Docentes</h1>
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
                                        
										<!-- <th>Id Doc</th> -->
										<th>Nombre Docente</th>
										<!-- <th>Ape P Doc</th>
										<th>Ape M Doc</th> -->
										<th>Codigo</th>
										<th>Carnet</th>
										<!-- <th>Expedido</th>
										<th>Grado</th>
										<th>Fec Nac Doc</th>
										<th>Tel Dom Doc</th>
										<th>Cel Doc</th>
										<th>Dom Doc</th>
										<th>Lug Doc</th>
										<th>Dir Trab Doc</th>
										<th>Tel Trab Doc</th>
										<th>Email Doc</th>
										<th>Estado Civ Doc</th>
										<th>Nacional Doc</th>
										<th>Obser Doc</th>
										<th>Foto Doc</th> -->

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tabla as $tabla)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<!-- <td>{{ $tabla->id_doc }}</td> -->
											<td>{{ $tabla->ape_p_doc }} {{ $tabla->ape_m_doc }} {{ $tabla->nombre_doc }} </td>
											<!-- <td>{{ $tabla->ape_p_doc }}</td>
											<td>{{ $tabla->ape_m_doc }}</td> -->
											<td>{{ $tabla->cod_doc }}</td>
											<td>{{ $tabla->ci }}</td>
											<!-- <td>{{ $tabla->expedido }}</td>
											<td>{{ $tabla->grado }}</td>
											<td>{{ $tabla->fec_nac_doc }}</td>
											<td>{{ $tabla->tel_dom_doc }}</td>
											<td>{{ $tabla->cel_doc }}</td>
											<td>{{ $tabla->dom_doc }}</td>
											<td>{{ $tabla->lug_doc }}</td>
											<td>{{ $tabla->dir_trab_doc }}</td>
											<td>{{ $tabla->tel_trab_doc }}</td>
											<td>{{ $tabla->email_doc }}</td>
											<td>{{ $tabla->estado_civ_doc }}</td>
											<td>{{ $tabla->nacional_doc }}</td>
											<td>{{ $tabla->obser_doc }}</td>
											<td>{{ $tabla->foto_doc }}</td> -->

                                            <td>
                                                
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
