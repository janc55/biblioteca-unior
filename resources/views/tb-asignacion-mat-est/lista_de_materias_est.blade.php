@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiante con Materias asignadas</h1>
    
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center; background-color:snow">
                   
                        <!-- <form action="{{ route('asignacion_mat_est_pdf') }}"method="post" target="_blank">
                            <div>@csrf
                            <input class="col-sm-7" class="form-control " type="search" name="busqueda" placeholder=" 🔎 Busca" size="20" maxlength="70"> 
                            <input class="col-sm-3 btn btn-success btn-sm float-left bi bi-0-square-fill" type="submit" value="Buscar" >
                            <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-fw fa-user"></i>Hoja PDF</button>
                        </div>    
                            </form> -->
                            <span id="card_title">
                            <h6>
                                 @foreach ($vista2 as $vista3)
                                <table>
                                    <tr>
                                    <td>
                                        <img src="img/user/imagenest.jpg" alt="Sin Imagen" width="150" height="150" align="right"/>
                                    </td>
                                        <td>
                                       
                                Estudiante: {{ $vista3->nombre_est }} {{ $vista3->ape_p_est }} {{ $vista3->ape_m_est }} <br>
                                Codigo: {{ $vista3->cod_est }} <br>
                                CI: {{ $vista3->ci_est }} <br>
                                Carrera: {{ $vista3->nombre_carre }} <br>
                                <br>
                                <form action="{{ route('asignacion_mat_est_pdf') }}"method="post" target="_blank">
                                   <div>@csrf                                   
                                   <input class="col-sm-3" class="form-control " type="hidden" name="id" name="id" value="{{ $vista3->id_est }}"> 
                                   <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-fw fa-user"></i>Hoja de Materias Asignadas</button>
                                    </div>    
                                </form>
                                        </td>
                                        
                                    </tr>
                                </table>
                           


                                
                            @break
                            @endforeach
                            </h6>
                            </span>
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
                                         <!-- <th>No</th> -->
                                         <!-- <th>Nombre</th> -->
                                        <!-- <th>CI</th>                                        -->
                                        <th>Materia</th>
                                        <th>Paralelo</th>
                                        <th>Turno</th>
                                        <!-- <th>Semestre</th> -->
                                        <th>Docente</th>
                                        <th>Gestion</th>
										
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vista as $vista)
                                        <tr> 
                                        <!-- <td>{{ $vista->ape_p_est }} {{ $vista->ape_m_est }} {{ $vista->nombre_est }}</td> -->
											<!-- <td>{{ $vista->ci_est }}</td> -->
                                            <td>{{ $vista->codigo_mat }} {{ $vista->nombre_mat }}</td>                                            
                                            <td>{{ $vista->paralelo_asig_mat }}</td>
                                            <td>{{ $vista->desc_turno }}</td>
                                            <!-- <td>{{ $vista->desc_sem}}</td> -->
											<td>{{ $vista->ape_p_doc }} {{ $vista->ape_m_doc }} {{ $vista->nombre_doc }}</td>
                                            <td>{{ $vista->periodo_gestion}} / {{ $vista->anio_gestion}}</td>
                                            
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
