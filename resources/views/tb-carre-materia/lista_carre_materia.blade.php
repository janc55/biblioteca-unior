@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vista de Plan de Estudios para asignar</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                                                       
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
                                        
                                        
										<th>Id Carre Mater</th>
										<th>Carrera</th>
										<th>Semestre</th>
										<th>Categoria</th>
										
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista as $lista)
                                        <tr>                                      
                                            
											<td>{{ $lista->id_carre_mater }}</td>

											

                                            <td>
                                                <div class="form-group">
                                                    <!-- <label class="form-control">Carrera</label> -->
                                             
                                                    <select name="id_carre" id="id_carre" class="form-control">
                                                       @foreach ($TbCarrera as $carre)
                                                        <option value="{{$carre ->id_carre}}">{{$carre->nombre_carre}} </option> 
                                                        @endforeach                                                       
                                                    </select>
                                                    
                                                </div>
                                            </td>
											
											<td>
                                                <div class="form-group">
                                                   
                                                    <!-- <label class="form-control">Semestre</label> -->
                                                   
                                                    <select name="id_sem" id="id_sem" class="form-control">
                                                    @foreach ($TbSemestre as $sem )
                                                        <option value="{{$sem->id_sem}}">{{$sem->desc_sem}} </option>  
                                                        @endforeach                                                      
                                                    </select>
                                                 
                                                </div>
                                            </td>
											
											<td>
                                                <div class="form-group">
                                                    <!-- <label class="form-control">Categoria</label> -->
                                                  
                                                    <select name="id_cat_mat" id="id_cat_mat" class="form-control">
                                                    @foreach ($TbCategoriaMat as $catmat )
                                                        <option value="{{$catmat->id_cat_mat}}"> {{$catmat->nombre_cat_mat}}</option>     
                                                        @endforeach                                                   
                                                    </select>
                                                    
                                                </div>
                                            </td>											

                                            <td>                                           
                                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-fw fa-user"></i>Asignar</button>

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
