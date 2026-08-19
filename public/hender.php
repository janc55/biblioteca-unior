<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UNIOR</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.13.6/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-responsive-bs4@2.5.0/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-buttons-bs4@2.4.2/css/buttons.bootstrap4.min.css">

<!-- AdminLTE Theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- Ionicons (antiguo) -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- Daterangepicker -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker@3.1/daterangepicker.css">

<!-- Summernote -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#aeaaaa">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/LOGO.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">UNIOR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">BIBLIOTECA UNIOR</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="inicio_ad" class="nav-link btn-danger">
              <i class="fas fa-home"></i>
              <p>INICIO</p>
            </a>
          </li>
          <li class="nav-item">
  <a href="chat_ad_min.php" class="nav-link btn-danger">
    <i class="fas fa-comments"></i>
    <p>CHAT INTELIGENTE</p>
  </a>
</li>





   

<li class="nav-item">
    <a href="#" class="nav-link btn-danger">
        <i class="fas fa-plus"></i>
        <p>
            REGISTRAR
            <i class="fas fa-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="libros" class="nav-link btn-danger">
                <i class="fas fa-book"></i>
                <p>LIBROS</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="bus_lib_arch" class="nav-link btn-danger">
                <i class="fas fa-file-archive"></i>
                <p>ARCHIVOS INSTITUCIONALES</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="bus_lib_dig" class="nav-link btn-danger">
                <i class="fas fa-file"></i>
                <p>DIGITAL</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="bus_lib_rev" class="nav-link btn-danger">
                <i class="fas fa-newspaper"></i>
                <p>REVISTAS</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="bus_lib_tes" class="nav-link btn-danger">
                <i class="fas fa-graduation-cap"></i>
                <p>TRABAJOS DE GRADO</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="bus_lib_vir" class="nav-link btn-danger">
                <i class="fas fa-globe"></i>
                <p>VIRTUAL</p>
            </a>
        </li>
    </ul>
</li>



          <li class="nav-item">
            <a href="pres_libros" class="nav-link btn-danger">
              <i class="fas fa-presentation"></i>
              <p>PRESENTACIONES</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="devolver" class="nav-link btn-danger">
              <i class="fas fa-handshake"></i>
              <p>ATENCIÓN</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="tb-enlace-bis" class="nav-link btn-danger">
              <i class="fas fa-clipboard"></i>
              <p>REGISTRAR BIBLIOTECAS</p>
            </a>
          </li>
          <li class="nav-item">
  <a href="noticias" class="nav-link btn-danger">
    <i class="fas fa-newspaper"></i>
    <p>NOTICIAS</p>
  </a>
</li>

          <li class="nav-item">
  <a href="#" class="nav-link btn-danger">
    <i class="fas fa-file-alt"></i> <!-- Icono para el menú principal -->
    <p>
      SOLICITUD DE DIRECTORES
      <i class="right fas fa-angle-left"></i> <!-- Icono para el desplegable -->
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="tb-form-sols" class="nav-link btn-danger">
        <i class="fas fa-file"></i> <!-- Icono para el submenú -->
        <p>FORMULARIO 1</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="tb-form-mat-bios" class="nav-link btn-danger">
        <i class="fas fa-file"></i> <!-- Icono para el submenú -->
        <p>FORMULARIO 2</p>
      </a>
    </li>
  </ul>
</li>







          <li class="nav-item">
            <a href="#" class="nav-link btn-danger">
              <i class="fas fa-chart-pie"></i>
              <p>
              GRAFICOS Y REPORTES
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="historial_ad" class="nav-link btn-danger">
                  <i class="fas fa-history"></i>
                  <p>HISTORIAL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="inicio_cant" class="nav-link btn-danger">
                  <i class="fas fa-chart-bar"></i>
                  <p>CANTIDAD DE REGISTROS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="inicio_op" class="nav-link btn-danger">
                  <i class="fas fa-tasks"></i>
                  <p>CANTIDAD DE OPERACIONES</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="cant_reg_tipo" class="nav-link btn-danger">
                  <i class="fas fa-tasks"></i>
                  <p>POR TIPOS</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="cant_reg_carre" class="nav-link btn-danger">
                  <i class="fas fa-tasks"></i>
                  <p>POR CARRERA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rep_arch" class="nav-link btn-danger">
                  <i class="fas fa-tasks"></i>
                  <p>EN ARCHIVO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="log_ses" class="nav-link btn-danger">
                  <i class="fas fa-tasks"></i>
                  <p>LOG SESSION</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
  <a href="estudiantes" class="nav-link btn-danger">
    <i class="nav-icon fas fa-user"></i>
    <p>USUARIO</p>
  </a>
</li>

<li class="nav-item">
  <a href="tb-rooles-us" class="nav-link btn-danger">
    <i class="nav-icon fas fa-users"></i>
    <p>ROLES</p>
  </a>
</li>

          <li class="nav-item">
            <a href="cerrar" class="nav-link btn-danger">
              <i class="fas fa-sign-out-alt"></i>
              <p>CERRAR SESIÓN</p>
            </a>
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

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Coloca aquí el contenido de la página -->
