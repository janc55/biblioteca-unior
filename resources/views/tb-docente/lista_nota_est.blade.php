<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>

 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
   
   
   
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
               MATERIAS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('vista_rol_doc') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>MATERIAS</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('vista_nota_rol_doc') }}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>NOTAS</p>
                    </a>
                  </li>
         
            </ul>
          </li>
		  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
       
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->              

              <div class="panel panel-info">
                @foreach($lista as $lista2) 
                <h5 class="text">DOCENTE: {{ $lista2->grado}} {{ $lista2->docente}} </h5>
                <h5 class="text">MATERIA: {{ $lista2->codigo_mat}} -  {{ $lista2->nombre_mat}}  </h5>
                <H5 class="text">PARALELO: {{ $lista2->paralelo_asig_mat}}</H5>
                <h5 class="text">TURNO: {{ $lista2->desc_turno}}   </h5>
                <h5 class="text">GESTION: {{ $lista2->periodo_gestion}} / {{ $lista2->anio_gestion}}  </h5>
            
                <form method="POST" action="{{ route('hoja_control_notas') }}"  role="form" enctype="multipart/form-data">
                      @csrf
                      <div>                                    
                      <input type="hidden" id="id" name="id" value="{{ $lista2->id_doc }}"> 
                      <input type="hidden" id="id_asig_mat" name="id_asig_mat" value="{{ $lista2->id_asig_mat }}">                            
                      <input class="btn btn-danger" type="submit" value="Reporte PDF " >                                   
                      </div>                                                                     
                </form>     
                
                @break
                @endforeach
                <!-- <h2 class="text-center">NOTAS DE LOS ESTUDIANTES</h2> -->
             
                <div class="panel panel-info">
               
                    <!-- <div class="panel-heading">LISTA DE ESTUDIANTES</div> -->
                    <h6>LISTA DE NOTAS</h6>
                    <div class="panel-body">
                    
                        <table id="example1" class="table table-bordered data-table">
                        
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Nota 1P</th>
                                    <th>Nota 2P</th>
                                    <th>Nota EF</th>
                                    <th>Nota 2T</th>
            
                                </tr>
                            </thead>
            
                            @foreach($lista as $lista)
                            <tbody>
                               
                                    <tr>
            
                                        <td>
                                            {{ $lista->id_asig_mat_est }}
                                        </td>
                                        <td>
                                            {{ $lista->cod_est}}
                                        </td>
                                        <td>
                                            {{ $lista->estudiante }}
                                        </td>
                                        <td>
                                            <a href="" class="update" data-name="eval_p1" data-type="text" data-pk="{{ $lista->id_asig_mat_est}}" data-title="Enter Nota 1P">{{ $lista->eval_p1 }}</a>
                                        </td>
                                        <td>
                                            <a href="" class="update" data-name="eval_p2" data-type="text" data-pk="{{ $lista->id_asig_mat_est}}" data-title="Enter Nota 2P">{{ $lista->eval_p2 }}</a>
                                        </td>
                                        <td>
                                            <a href="" class="update" data-name="eval_fin" data-type="text" data-pk="{{ $lista->id_asig_mat_est}}" data-title="Enter Nota EF">{{ $lista->eval_fin }}</a>
                                        </td>
                                        <td>
                                            <a href="" class="update" data-name="eval_2t" data-type="text" data-pk="{{ $lista->id_asig_mat_est}}" data-title="Enter Nota 2T">{{ $lista->eval_2t }}</a>
                                        </td>                               
                                    </tr>                       
                            </tbody>                          
                                       
                            @endforeach                    
                        </table>
                    </div>
                </div>
                </div>
            
            <script type="text/javascript">
                $.fn.editable.defaults.mode = 'inline';
            
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
            
                $('.update').editable({
                    url: "{{ route('lista_nota.update') }}",
                    type: 'text',
                    pk: 1,
                    name: 'name',
                    title: 'Enter name'
                });
            
            
            
                $(".deletelista").click(function(){
                    $(this).parents('tr').hide();
                    var id = $(this).data("id");
                    var token = '{{ csrf_token() }}';
                    $.ajax(
                    {
                        method:'POST',
                        url: "lista/delete/"+id,
                        data: {_token: token},
                        success: function(data)
                        {
                            toastr.success('Successfully!','Delete');
                        }
                    });
                });
            </script>



            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
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
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
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
</body>
</html>






