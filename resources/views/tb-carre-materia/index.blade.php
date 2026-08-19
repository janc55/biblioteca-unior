@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Plan de Estudios</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                           

                             <div class="float-right">
                                <a href="{{ route('carrematerias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>                             

                              <form action="{{ route('plan_estudios') }}"method="post" target="_blank">
                                 <div>@csrf                                 
                                 <!-- <input class="col-sm-3" class="form-control " type="hidden" name="id" name="id" value="id_doc">  -->
                                 <button type="submit"  class="btn btn-warning btn-sm"><i class="fa fa-fw fa-user"></i>Plan de Estudios</button>
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
                                        <th>No</th>
                                        
										<!-- <th>Id Carre Mater</th> -->
                                        <th>Materia</th>
										<th>Carrera</th>										
										<th>Semestre</th>
										<!-- <th>Cred Materia</th>
										<th>Ht Materia</th>
										<th>Hp Materia</th>
										<th>Tse Materia</th>
										<th>Tsm Materia</th>
										<th>Id Cat Mat</th>
										<th>Are Materia</th>
										<th>Ord Materia</th>
										<th>Obs Materia</th>
										<th>Id Plane</th> -->

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbCarreMateria as $tbCarreMateria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<!-- <td>{{ $tbCarreMateria->id_carre_mater }}</td> -->
											<!-- <td>{{ $tbCarreMateria->id_carre }}</td>
											<td>{{ $tbCarreMateria->id_materia }}</td>
											<td>{{ $tbCarreMateria->id_sem }}</td> -->
                                            
											<!-- <td>{{ $tbCarreMateria->cred_materia }}</td>
											<td>{{ $tbCarreMateria->ht_materia }}</td>
											<td>{{ $tbCarreMateria->hp_materia }}</td>
											<td>{{ $tbCarreMateria->tse_materia }}</td>
											<td>{{ $tbCarreMateria->tsm_materia }}</td>
											<td>{{ $tbCarreMateria->id_cat_mat }}</td>
											<td>{{ $tbCarreMateria->are_materia }}</td>
											<td>{{ $tbCarreMateria->ord_materia }}</td>
											<td>{{ $tbCarreMateria->obs_materia }}</td>
											<td>{{ $tbCarreMateria->id_planE }}</td> -->
                                            
                                            <td>{{ $tbCarreMateria->nombre_mat }}</td>
                                            <td>{{ $tbCarreMateria->nombre_carre }}</td>
                                            <td>{{ $tbCarreMateria->desc_sem }}</td>

                                            <td>
                                                <form action="{{ route('carrematerias.destroy',$tbCarreMateria->id_carre_mater) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('carrematerias.show',$tbCarreMateria->id_carre_mater) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('carrematerias.edit',$tbCarreMateria->id_carre_mater) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
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
