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
                <a href="{{ route('rol_lista_est') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MATERIAS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('rol_lista_est') }}" class="nav-link active">
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
              

              @foreach ($datos as $datos2)   
              <div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"><b>NOMBRE:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
              <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->nombre_est}} {{$datos2->ape_p_est}} {{$datos2->ape_m_est}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
              
              <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">&nbsp; &nbsp; &nbsp; &nbsp; <b>MATRICULA:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
              <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->cod_est}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN></div>
              
              <div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"><b>CEDULA DE IDENTIDAD:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
              <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->ci_est}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
              
              <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <b>CARRERA:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
              <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->nombre_carre}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN></div>
              
              <div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"><b>GRADO ACADEMICO:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
              <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->grado_est}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
              <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<b>GESTION:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
              <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->anio_gestion}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN></div>
              <div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> <b>N DE SERIE DE HISTORIAL ACADEMICO:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
              <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->nro_serie_est}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN></div>
              <br>
              <form method="POST" action="{{ route('nota_estudiante_pdf') }}"  role="form" enctype="multipart/form-data">
                  @csrf
                  <div>
                  <input class="col-sm-3" class="form-control " type="hidden" name="id_est" id="id_est" value="{{ $datos2->id_est }}"> 
                  <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-fw fa-user"></i>Imprimir Calificaciones PDF</button>
              </form>
              @break
              @endforeach
              <br><br>
              
              <table border="1" style="text-align:center;">
              <thead >
                  <tr colspan="5">
              <th><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"><b>COD</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"></span><br/></SPAN></div></th>
              <th><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"><b>MATERIA</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"></span><br/></SPAN></div></th>
              <th><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"><b>NOTA</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"></span><br/></SPAN></div></th>
              <th><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"><b>LITERAL</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"></span><br/></SPAN></div></th>
              <th><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"><b>OBSERVACIONES</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"></span><br/></SPAN></div></th>
              
              </tr>
              </thead > 
              
              <tbody> 
              @foreach ($datos as $datos) 
              <tr alling="center">
              
              <td><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444">{{ $datos->codigo_mat }}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444"> </span><br/></SPAN></div></td>
              <td><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444">{{ $datos->nombre_mat }}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444"> </span><br/></SPAN></div></td>
              <td><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444">{{ $datos->NotaFinal }} </span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444"> </span><br/></SPAN></div></td>
              <td><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444">{{ $datos->literal }}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444"> </span><br/></SPAN></div></td>
              <td><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444">{{ $datos->obs_asig }}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444"> </span><br/></SPAN></div></td>
              
              </tr>
              @endforeach
              
              </tbody>
              </table>


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
