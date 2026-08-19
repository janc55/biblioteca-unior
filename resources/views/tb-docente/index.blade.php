@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista Completa Docentes </h1>
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                        <form method="POST" action="{{ route('buscar_doc') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div>
                            <input class="col-sm-7" class="form-control " type="text" name="dato" id="dato" placeholder=" 🔎 Buscar por nombre" size="40" maxlength="70"> 
                            <input class="col-sm-3 btn btn-success btn-sm float-left bi bi-0-square-fill" type="submit" value="Buscar" >
                            </div> 
                                <div id="resultados"></div>                               
                            </form>

                            <div class="float-right">
                                <a href="{{ route('docente.index') }}" class="btn btn-warning btn-sm float-right"  data-placement="left">
                                  {{ __('Refrescar') }}
                                </a>
                              </div>

                             <div class="float-right">
                                <a href="{{ route('docente.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
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
                             
                                        
										<th>Cod Doc</th>
                                        <!-- <th>Grado</th> -->
										<th>Nombre Completo</th>
										<!-- <th>Ape P Doc</th>
										<th>Ape M Doc</th>										 -->
										<th>Ci</th>
										<!-- <th>Expedido</th>
										
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
                                    @foreach ($tbDocentes as $tbDocente)
                                        <tr>
                                 
                                            
                                            <td>{{ $tbDocente->cod_doc }}</td>
                                            <!-- <td>{{ $tbDocente->grado }}</td> -->
											<td>{{ $tbDocente->grado }} {{ $tbDocente->nombre_doc }} {{ $tbDocente->ape_p_doc }} {{ $tbDocente->ape_m_doc }}</td>
											<!-- <td>{{ $tbDocente->ape_p_doc }}</td>
											<td>{{ $tbDocente->ape_m_doc }}</td>										 -->
											<td>{{ $tbDocente->ci }}</td>
											<!-- <td>{{ $tbDocente->expedido }}</td>
											<td>{{ $tbDocente->grado }}</td>
											<td>{{ $tbDocente->fec_nac_doc }}</td>
											<td>{{ $tbDocente->tel_dom_doc }}</td>
											<td>{{ $tbDocente->cel_doc }}</td>
											<td>{{ $tbDocente->dom_doc }}</td>
											<td>{{ $tbDocente->lug_doc }}</td>
											<td>{{ $tbDocente->dir_trab_doc }}</td>
											<td>{{ $tbDocente->tel_trab_doc }}</td>
											<td>{{ $tbDocente->email_doc }}</td>
											<td>{{ $tbDocente->estado_civ_doc }}</td>
											<td>{{ $tbDocente->nacional_doc }}</td>
											<td>{{ $tbDocente->obser_doc }}</td>
											<td>{{ $tbDocente->foto_doc }}</td> -->

                                            <td>
                                                <form action="{{ route('docente.destroy',$tbDocente->id_doc) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('docente.show',$tbDocente->id_doc) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('docente.edit',$tbDocente->id_doc) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
