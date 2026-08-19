@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>
@stop

@section('content')
<link href="css/busqueda.css" rel="stylesheet" id="bootstrap-css">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                       
                        <form method="POST" action="{{ route('buscar_est') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div>
                            <input class="col-sm-7" class="form-control " type="text" name="dato" id="dato" placeholder=" 🔎 Buscar por nombre" size="40" maxlength="70"> 
                            <input class="col-sm-3 btn btn-success btn-sm float-left bi bi-0-square-fill" type="submit" value="Buscar" >
                            </div> 
                                <div id="resultados"></div>                               
                            </form>

                            <div class="float-right">
                                <a href="{{ route('estudiantes.index') }}" class="btn btn-warning btn-sm float-right"  data-placement="left">
                                  {{ __('Refrescar') }}
                                </a>
                              </div>
                               
                            
                             <div class="float-right">
                                <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                   
										<th>Codigo</th>
										<th>Nombre Completo</th>
										<!-- <th>Ape P Est</th>
										<th>Ape M Est</th> -->
										<th>Ci</th>
										<!-- <th>Exp Est</th> -->
										<!-- <th>Fec Nac Est</th>
										<th>Dir Est</th>
										<th>Tel Dom Est</th> -->
										<th>Celular</th>
									

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbEstudiante as $tbEstudiante)
                                        <tr>
                                      
                                            <td>{{ $tbEstudiante->id_est }}</td>
											<!-- <td>{{ $tbEstudiante->cod_est }}</td> -->
											<td>{{ $tbEstudiante->nombre_est }} {{ $tbEstudiante->ape_p_est }} {{ $tbEstudiante->ape_m_est }}</td>
											<!-- <td>{{ $tbEstudiante->ape_p_est }}</td>
											<td>{{ $tbEstudiante->ape_m_est }}</td> -->
											<td>{{ $tbEstudiante->ci_est }}</td>
											<!-- <td>{{ $tbEstudiante->exp_est }}</td> -->
											<!-- <td>{{ $tbEstudiante->fec_nac_est }}</td>
											<td>{{ $tbEstudiante->dir_est }}</td>
											<td>{{ $tbEstudiante->tel_dom_est }}</td> -->
											<td>{{ $tbEstudiante->cel_est }}</td>
											

                                            <td>
                                                <form action="{{ route('estudiantes.destroy',$tbEstudiante->id_est) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estudiantes.show',$tbEstudiante->id_est) }}"><i class="fa fa-fw fa-eye"></i> MOSTRAR</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudiantes.edit',$tbEstudiante->id_est) }}"><i class="fa fa-fw fa-edit"></i> AGREGAR INFO</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> ELIMINAR</button>
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

<script>
///keyupp 
window.addEventListener("load",function(){
    document.getElementById("texto").addEventListener("keyup", function(){
    // alert("a");
    console.log(document.getElementByid("texto").value)
    fetch(`filtro_est?texto=${document.getElementById("texto").value}` ,{
        method:'get'
})
.then(response => response.text() )
.then(html => {
    cargando.setAttribute('hidden','')
    document.getElementById("resultados").innerHTML += html
    // pagina++;
})
    // .catch(error => console.log(error))
 
    })
})
</script>

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
