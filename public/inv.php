<?php
if (!headers_sent()) {
    header('Content-Type: text/html; charset=UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="es">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BIBLIOTECA</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="estilo.css">

  <style>
    body{
      font-family: 'Source Sans Pro', sans-serif;
      background: #f4f6f9;
    }

    .main-header.navbar{
      background: #ffffff !important;
      border-bottom: 3px solid #c00000;
    }

    .main-sidebar{
      background: linear-gradient(180deg, #000000 0%, #1a1a1a 60%, #2b0000 100%) !important;
    }

    .brand-link{
      background: #111111 !important;
      border-bottom: 1px solid rgba(255,255,255,.08);
    }

    .brand-text{
      color: #ffffff !important;
      font-weight: 700 !important;
      letter-spacing: .5px;
    }

    .user-panel{
      border-bottom: 1px solid rgba(255,255,255,.08) !important;
    }

    .user-panel .info a{
      color: #ffffff !important;
      font-weight: 600;
    }

    .nav-sidebar .nav-link{
      color: #ffffff !important;
      border-radius: 10px;
      margin-bottom: 8px;
      transition: all .2s ease;
      background: rgba(255,255,255,.04);
    }

    .nav-sidebar .nav-link:hover{
      background: #c00000 !important;
      color: #ffffff !important;
      transform: translateX(3px);
    }

    .nav-sidebar .nav-link.btn-danger{
      background: linear-gradient(135deg, #8b0000 0%, #c00000 100%) !important;
      border: none !important;
      box-shadow: 0 6px 16px rgba(192,0,0,.25);
    }

    .content-wrapper{
      background: #f5f5f5;
    }

    .carousel-inner img{
      max-height: 250px;
      object-fit: cover;
      border-bottom: 4px solid #c00000;
    }

    .content{
      padding: 18px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars" style="color:#c00000;"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="invitado" class="brand-link">
      <img src="dist/img/LOGO.png" alt="UNIOR" class="brand-image img-circle elevation-3" style="opacity:.9">
      <span class="brand-text font-weight-light">UNIOR</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="Usuario">
        </div>
        <div class="info">
          <a href="#" class="d-block">BIBLIOTECA UNIOR</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="invitado" class="nav-link btn-danger">
              <i class="fas fa-home nav-icon"></i>
              <p>INICIO</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="cerrar" class="nav-link btn-danger">
              <i class="fas fa-arrow-left nav-icon"></i>
              <p>VOLVER ATR&Aacute;S</p>
            </a>
          </li>

          <li class="nav-item mt-4 text-center">
            <a href="https://elibro.net/es/lc/unior/inicio" target="_blank">
              <img width="110" height="28" src="https://fundacionsebastianpagador.com/elibros.png" alt="elibros">
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="han.png" alt="Biblioteca">
        </div>
      </div>
    </div>

    <section class="content">