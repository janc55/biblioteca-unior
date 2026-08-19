@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>    ASIGNACIÓN DOCENTE     </h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                       
                            
                            <form method="POST" action="{{ route('buscar_mat_lista') }}"  role="form" enctype="multipart/form-data">
                                   <input type="hidden" id="nombre" name="nombre" value="{{ $nombredoc}}">
                          
                            @csrf
                            <input type="hidden" id="nombre" name="nombre" value="{{ $nombredoc}}">
                          
                            <div>
                            <h3>
                            {{ $nombredoc}}
                            </h3>
                            <span id="card_title">
                                <br>  {{ __('NOMINA DE MATERIAS') }} <br><br>
                            </span>
                            <input type="hidden" id="id" name="id" value="{{ $id_rec }}">     
                                                   
                            <input class="col-sm-7" class="form-control " type="text" name="dato" id="dato" placeholder=" 🔎 Buscar por materia o sigla" size="40" maxlength="70"> 
                            <input class="col-sm-3 btn btn-success btn-sm float-left bi bi-0-square-fill" type="submit" value="Buscar" >
                            </div> 
                                <div id="resultados"></div>                               
                            </form>
                           
                            <form method="POST" action="{{ route('filtromatdoc') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div>
                            <input type="hidden" id="id" name="id" value="{{ $id_rec }}">
                            <input type="hidden" id="nombre" name="nombre" value="{{ $nombredoc}}">
                                <div class="form-group">
                                    <label class="form-control">Carrera</label>
                                    <select name="id_carre" id="id_carre" class="form-control">
                                    @foreach ($TbCarrera as $tbCarrera)
                                            <option value="{{ $tbCarrera->id_carre}}">                      
                                                    <td> {{ $tbCarrera->nombre_carre }}</td>
                                            </option> 
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control">Semestre</label>
                                    <select name="id_sem" id="id_sem" class="form-control">
                                    @foreach ($TbSemestre as $tbSemestre)
                                            <option value="{{ $tbSemestre->id_sem}}">                      
                                                    <td> {{ $tbSemestre->desc_sem }}</td>
                                            </option> 
                                        @endforeach
                                    </select>
                                </div>
                            <input class="col-sm-3 btn btn-warning btn-sm float-left bi bi-0-square-fill" type="submit" value="Filtrar" >
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
                                                                              
										<th>Sigla</th>
										<th>Materias</th>										 
										<th>Carrera</th>
										<th>Semestre</th>
                                        <th>Turno</th>
                                        <th>Paralelo</th>
                                        <th>Inicio</th>
                                        <th>Fin</th>
                                        <th>Asignar Materia</th>

										
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista as $lista)
                                        <tr>
                                          
                                            
											<td>{{ $lista->codigo_mat}}</td>
											<td>{{ $lista->nombre_mat}}</td>
											<td>{{ $lista->nombre_carre}}</td>
											<td>{{ $lista->desc_sem}}</td>
																						
                                            <td>                                         
                                            <form method="POST" action="{{ route('rg_mt') }}"  role="form" enctype="multipart/form-data">
                                                 @csrf
                                            
                                            <select name="id_turno" id="id_turno" value="" style="background-color:green; color:white; ">
                                                <option value="1"> MAÑANA</option>
                                                <option value="3"> TARDE</option>
                                                <option value="2"> NOCHE</option>
                                            </select>
                                            </td>
                                            <td>
                                            <select name="pr" id="pr" value="" style="background-color:orange; color:white; " >
                                                <option value="A"> A</option>
                                                <option value="B"> B</option>
                                                <option value="C"> C</option>  
                                                <option value="I"> I</option>
                                                <option value="V"> V</option>
                                            </select>
                                            </td>
                                                <input type="hidden" name="id_doc" id="id_doc" value="{{ $id_rec}}">
                                                <input type="hidden" name="id_mat" id="id_mat" value="{{ $lista->id_materia}}">
                                                <input type="hidden" name="id_car" id="id_car" value="{{ $lista->id_carre}}">

                                            <td>
                                                <input type="date"  name="inicio_desig" id="inicio_desig" class="form-control bi bi-0-square-fill" >
                                            </td>
                                            <td>
                                                <input type="date"  name="fin_desig" id="fin_desig" class="form-control bi bi-0-square-fill" >
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Asignar</button>
                                            <td>
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
