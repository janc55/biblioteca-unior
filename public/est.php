     

     
          <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BIBLIOTECA</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.13.6/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-responsive-bs4@2.5.0/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-buttons-bs4@2.4.2/css/buttons.bootstrap4.min.css">

<!-- AdminLTE Theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- Daterangepicker -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker@3.1/daterangepicker.css">

<!-- Summernote -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css">
  <link rel="stylesheet" href="estilo.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
   <li class="nav-item">
          <!--       <img width="100" height="25" src="https://fundacionsebastianpagador.com/elibros.png">-->
      </li>

    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4"  style="background-color:#aeaaaa">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/uniorlogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">UNIOR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://upload.wikimedia.org/wikipedia/commons/8/81/Sin_Foto.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            
          <?php echo auth()->user()->nombre;   //ADMIN?>
          <br>
          <?php echo auth()->user()->tipo;   //ADMIN?>


          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->





               <?php


// The sequence of values

// Explode the values by '|'
$valuesArray = explode('|', $values);





if ($valuesArray[18] === 'true') {
  // Display the list item
  echo '
  <li class="nav-item">
  <a href="/inicio_ad" class="nav-link btn-danger">
    <i class="fas fa-home"></i>
    <p>INICIO ADMINISTRADOR</p>
  </a>
</li>
<li class="nav-item">
    <a href="docente/8/edit" class="nav-link btn-danger">
        <i class="fas fa-user-cog"></i> <!-- Agrega un ícono de Font Awesome aquí -->
        <p>MODIFICAR CUENTA ADMINISTRADOR</p>
    </a>
</li>
';
}

if ($valuesArray[0] === 'true') {
  // Display the list item
  echo '

               <li class="nav-item">
  <a href="/solicitar" class="nav-link btn-danger">
    <i class="fas fa-home"></i>
    <p>LIBROS FISICOS</p>
  </a>

</li>
   <li class="nav-item">
  <a href="/sol_rev" class="nav-link btn-danger">
  <i class="fas fa-newspaper"></i>
  <p>REVISTAS</p>
</a>

</li>
   <li class="nav-item">
  <a href="/sol7" class="nav-link btn-danger">
  <i class="fas fa-search"></i>
  <p>TRABAJOS DE INVESTIGACION</p>
</a>
</li>
   <li class="nav-item">
<a href="/sol8" class="nav-link btn-danger">
  <i class="fas fa-bullhorn"></i>
  <p>BOLETINES</p>
</a>
</li>
   <li class="nav-item">
<a href="/sol9" class="nav-link btn-danger">
  <i class="fas fa-newspaper"></i>
  <p>GACETAS</p>
</a>
</li>
   <li class="nav-item">
<a href="/sol10" class="nav-link btn-danger">
  <i class="fas fa-graduation-cap"></i>
  <p>TRABAJOS DE POST GRADO</p>
</a>

</li>
';
}


if ($valuesArray[1] === 'true') {
  // Display the list item
  echo '
<li class="nav-item">
  <a href="/chat.php" class="nav-link btn-danger">
    <i class="fas fa-comments"></i>
    <p>CHAT INTELIGENTE</p>
  </a>
</li>


';
}

if ($valuesArray[2] === 'true') {
  // Display the list item
  echo '
<li class="nav-item">
  <a href="/virtual" class="nav-link btn-danger">
    <i class="far fa-bookmark"></i>
    <p>BIBLIOTECA VIRTUAL</p>
  </a>
</li>
';
}


if ($valuesArray[3] === 'true') {
  // Display the list item
  echo '
<li class="nav-item">
  <a href="/digital" class="nav-link btn-danger">
    <i class="far fa-file"></i>
    <p>LIBROS DIGITALES</p>
  </a>
</li>

';
}

if ($valuesArray[4] === 'true') {
  // Display the list item
  echo '
<li class="nav-item">
  <a href="/tesis" class="nav-link btn-danger">
    <i class="far fa-file-alt"></i>
    <p>TRABAJOS DE GRADO</p>
  </a>
</li>


';
}


if ($valuesArray[5] === 'true') {
  // Display the list item
  echo '

<li class="nav-item" hidden>
  <a href="/tesis" class="nav-link btn-danger">
    <i class="far fa-file-alt"></i>
    <p>ARCHIVADOS</p>
  </a>
</li>

';
}


if ($valuesArray[6] === 'true') {
  // Display the list item
  echo '
<li class="nav-item">
  <a href="/form_solDireccotcreate" class="nav-link btn-danger">
    <i class="far fa-file-alt"></i>
    <p>Material de Apoyo Logistico</p>
  </a>
</li>

';
}

if ($valuesArray[7] === 'true') {
  // Display the list item
  echo '
<li class="nav-item">
  <a href="/form_solDireccotbi" class="nav-link btn-danger">
    <i class="far fa-file-alt"></i>
    <p>Formulario de Solicitud para adquisición de Material Bibliografico</p>
  </a>
</li>


';
}

if ($valuesArray[8] === 'true') {
  // Display the list item
  echo '
<li class="nav-item">
  <a href="/historial" class="nav-link btn-danger">
    <i class="far fa-history"></i>
    <p>HISTORIAL USUARIO</p>
  </a>
</li>










';
}


if ($valuesArray[9] === 'true') {
  // Display the list item
  echo ' 

<li class="nav-item">
    <a href="/#" class="nav-link btn-danger">
        <i class="fas fa-plus"></i>
        <p>
            REGISTRAR
            <i class="fas fa-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/libros" class="nav-link btn-danger">
                <i class="fas fa-book"></i>
                <p>LIBROS FISICOS</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/bus_lib_arch" class="nav-link btn-danger">
                <i class="fas fa-file-archive"></i>
                <p>ARCHIVO INSTITUCIONAL</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/bus_lib_dig" class="nav-link btn-danger">
                <i class="fas fa-file"></i>
                <p>LIBROS DIGITALES</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/bus_lib_rev" class="nav-link btn-danger">
                <i class="fas fa-newspaper"></i>
                <p>REVISTAS</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/bus_lib_tes" class="nav-link btn-danger">
                <i class="fas fa-graduation-cap"></i>
                <p>TRABAJOS DE GRADO</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/bus_lib_vir" class="nav-link btn-danger">
                <i class="fas fa-globe"></i>
                <p>BIBLIOTECA VIRTUAL</p>
            </a>
        </li>



        <li class="nav-item">
        <a href="/indexinv" class="nav-link btn-danger">
            <i class="fas fa-globe"></i>
            <p>TRABAJOS DE INVESTIGACION</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/indexbol" class="nav-link btn-danger">
            <i class="fas fa-bullhorn"></i>
            <p>BOLETINES</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/indexga" class="nav-link btn-danger">
            <i class="fas fa-newspaper"></i>
            <p>GACETA</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/indexta" class="nav-link btn-danger">
            <i class="fas fa-graduation-cap"></i>
            <p>TRABAJOS DE POSTGRADO</p>
        </a>
    </li>
    


    </ul>
</li>


';
}


if ($valuesArray[10] === 'true') {
  // Display the list item
  echo '

          <li class="nav-item">
            <a href="/pres_libros" class="nav-link btn-danger">
              <i class="fas fa-presentation"></i>
              <p>PRESENTACIONES</p>
            </a>
          </li>


          ';
        }
        


          if ($valuesArray[11] === 'true') {
            // Display the list item
            echo '
          <li class="nav-item">
            <a href="/devolver" class="nav-link btn-danger">
              <i class="fas fa-handshake"></i>
              <p>ATENCIÓN</p>
            </a>
          </li>


          ';
        }
        

          if ($valuesArray[12] === 'true') {
            // Display the list item
            echo '
          <li class="nav-item">
            <a href="/tb-enlace-bis" class="nav-link btn-danger">
              <i class="fas fa-clipboard"></i>
              <p>REGISTRAR BIBLIOTECAS</p>
            </a>
          </li>

          ';
        }
        

          if ($valuesArray[13] === 'true') {
            // Display the list item
            echo '
          <li class="nav-item">
  <a href="/noticias" class="nav-link btn-danger">
    <i class="fas fa-newspaper"></i>
    <p>NOTICIAS</p>
  </a>
</li>

';
}


if ($valuesArray[14] === 'true') {
  // Display the list item
  echo '
          <li class="nav-item">
  <a href="/#" class="nav-link btn-danger">
    <i class="fas fa-file-alt"></i> <!-- Icono para el menú principal -->
    <p>
      SOLICITUD DE DIRECTORES
      <i class="right fas fa-angle-left"></i> <!-- Icono para el desplegable -->
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="/tb-form-sols" class="nav-link btn-danger">
        <i class="fas fa-file"></i> <!-- Icono para el submenú -->
        <p>Material de Apoyo Logistico</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/tb-form-mat-bios" class="nav-link btn-danger">
        <i class="fas fa-file"></i> <!-- Icono para el submenú -->
         <p>Formulario de Solicitud para adquisición de Material Bibliografico</p>
      </a>
    </li>
  </ul>
</li>


';
}


if ($valuesArray[15] === 'true') {
  // Display the list item
  echo '


          <li class="nav-item">
            <a href="/#" class="nav-link btn-danger">
              <i class="fas fa-chart-pie"></i>
              <p>
              GRAFICOS Y REPORTES
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/historial_ad" class="nav-link btn-danger">
                  <i class="fas fa-history"></i>
                  <p>HISTORIAL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inicio_cant" class="nav-link btn-danger">
                  <i class="fas fa-chart-bar"></i>
                  <p>CANTIDAD DE REGISTROS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inicio_op" class="nav-link btn-danger">
                  <i class="fas fa-tasks"></i>
                  <p>CANTIDAD DE OPERACIONES</p>
                </a>
              </li>

            

            
              <li class="nav-item">
                <a href="/rep_arch" class="nav-link btn-danger">
                  <i class="fas fa-tasks"></i>
                  <p>EN ARCHIVO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/log_ses" class="nav-link btn-danger">
                  <i class="fas fa-tasks"></i>
                  <p>LOG SESSION</p>
                </a>
                <li class="nav-item">
                <a href="/statistics" class="nav-link btn-danger">
                  <i class="fas fa-tasks"></i>
                  <p>GRAFICO</p>
                </a>


                
              </li>
            </ul>
          </li>

          ';
        }
        


          if ($valuesArray[16] === 'true') {
            // Display the list item
            echo '
          <li class="nav-item">
  <a href="/estudiantes" class="nav-link btn-danger">
    <i class="nav-icon fas fa-user"></i>
    <p>USUARIO</p>
  </a>
</li>

';
}


if ($valuesArray[17] === 'true') {
  // Display the list item
  echo '
<li class="nav-item">
  <a href="/tb-rooles-us" class="nav-link btn-danger">
    <i class="nav-icon fas fa-users"></i>
    <p>ROLES</p>
  </a>
</li>
';
}


?>



<li class="nav-item">
  <a href="cerrar" class="nav-link btn-danger">
    <i class="fas fa-sign-out-alt"></i>
    <p>CERRAR SESIÓN</p>
  </a>
</li>

<br>
<br>


<?php include 'enlaces.php';?>





        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->


  <div class="content-wrapper">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/han.png" alt="First slide">
    </div>

  </div>
</div>
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

