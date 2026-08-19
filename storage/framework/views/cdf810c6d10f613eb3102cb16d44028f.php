
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UNIOR - Página de Inicio</title>

  <!-- Agrega los enlaces a los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Agrega el enlace al archivo de estilos personalizado -->
  <link rel="stylesheet" href="styles.css">

  <!-- Agrega el enlace a la biblioteca de iconos Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <style>
    /* Estilos para el div principal */
    .centered-div {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #FFCDD2; /* Color rojo claro */
      padding: 20px;
      max-width: 400px;
      width: 80%;
      text-align: center;
      border-radius: 10px; /* Bordes redondos */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
    }

    /* Estilos para el botón de ocultar */
    .hide-button {
      background-color: #000;
      color: #FFF;
      border: none;
      padding: 10px 20px;
      margin-top: 10px;
      cursor: pointer;
    }
    .scrollable {
      max-height: 200px; /* Tamaño máximo en píxeles para el elemento */
      overflow-y: scroll; /* Agregar scroll vertical cuando el contenido excede la altura máxima */
    }

  </style>
  
  <style>
    .modal-dialog.modal-dialog-centered {
        display: flex;
        align-items: center;
        justify-content: center;
    }
  </style>
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="img/hero/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo UNIOR">
      UNIOR
    </a>
  </nav>

  <!-- Contenido principal -->
  <div class="container mt-5">
    <div class="row">
        <?php if($DATOS->tipo == 'Admin'): ?>
          <div class="col-md-4">
            <a href="<?php echo e(route('libros.index')); ?>" class="btn btn-danger btn-lg btn-block">
              <i class="fas fa-user-shield fa-2x"></i><br>
              Administrador
            </a>
          </div>
        <?php endif; ?>
        <?php if($DATOS->tipo == 'EST' || $DATOS->tipo == 'DOC' || $DATOS->tipo == 'OTROS'): ?>
          <div class="col-md-4">
            <a href="<?php echo e(route('solicitar.index')); ?>" class="btn btn-danger btn-lg btn-block">
              <i class="fas fa-book fa-2x"></i><br>
              BIBLIOTECA
            </a>
          </div>
        <?php endif; ?>
            <div class="col-md-4">
        <a href="<?php echo e(route('invitado')); ?>" class="btn btn-danger btn-lg btn-block">
          <i class="fas fa-user-graduate fa-2x"></i><br>
          INVITADO
        </a>
      </div>
      <div class="col-md-4">
        <a href="cerrar" class="btn btn-danger btn-lg btn-block">
          <i class="fas fa-sign-out-alt fa-2x"></i><br>
          SALIR
        </a>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col">
        <h2>Últimas noticias</h2>
        <div class="card-deck mt-6" style="max-height: 500px; overflow-y: auto;">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
              $count = 0;
            ?>
            <?php $__currentLoopData = $noticia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($count % 3 == 0): ?>
                <div class="w-100"></div>
              <?php endif; ?>
              <div class="col">
                <div class="card shadow-sm rounded">
                  <img src="<?php echo e($noticia->imagen ? asset('libro/' . $noticia->imagen) : asset('biblio.png')); ?>" onerror="this.onerror=null;this.src='<?php echo e(asset('biblio.png')); ?>';" alt="Imagen informativa" class="card-img-top" data-toggle="modal" data-target="#noticiaModal<?php echo e($noticia->id_not); ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo e($noticia->titulo); ?></h5>
                    <p class="card-text"><?php echo e(Str::limit($noticia->contenido, 100)); ?></p>
                  </div>
                </div>
              </div>
              <!-- Modal de la noticia -->
              <div class="modal fade" id="noticiaModal<?php echo e($noticia->id_not); ?>" tabindex="-1" aria-labelledby="noticiaModalLabel<?php echo e($noticia->id_not); ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="noticiaModalLabel<?php echo e($noticia->id_not); ?>"><?php echo e($noticia->titulo); ?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="<?php echo e($noticia->imagen ? asset('libro/' . $noticia->imagen) : asset('biblio.png')); ?>" onerror="this.onerror=null;this.src='<?php echo e(asset('biblio.png')); ?>';" alt="Imagen informativa" class="img-fluid mb-3">
                      <p><?php echo e($noticia->contenido); ?></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                $count++;
              ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>

    <?php if($ultimaNoticia): ?>
      <div class="centered-div">
        <a href="#" data-toggle="modal" data-target="#imagenModal">
          <img src="<?php echo e($ultimaNoticia->imagen ? asset('libro/' . $ultimaNoticia->imagen) : asset('biblio.png')); ?>" onerror="this.onerror=null;this.src='<?php echo e(asset('biblio.png')); ?>';" alt="Imagen informativa" class="img-fluid">
        </a>
        <h3><?php echo e($ultimaNoticia->titulo); ?></h3>
        <p class="scrollable"><?php echo e($ultimaNoticia->contenido); ?></p>
        <button class="hide-button" onclick="hideDiv()">Ocultar</button>
      </div>
    <?php else: ?>
      <div class="centered-div">
        <p>Sin noticias</p>
      </div>
    <?php endif; ?>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="imagenModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Imagen Ampliada</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="<?php echo e(isset($noticia) && $noticia->imagen ? asset('libro/' . $noticia->imagen) : asset('biblio.png')); ?>" onerror="this.onerror=null;this.src='<?php echo e(asset('biblio.png')); ?>';" alt="Imagen informativa" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="imagenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Imagen Ampliada</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="<?php echo e($ultimaNoticia && $ultimaNoticia->imagen ? asset('libro/' . $ultimaNoticia->imagen) : asset('biblio.png')); ?>" onerror="this.onerror=null;this.src='<?php echo e(asset('biblio.png')); ?>';" alt="Imagen informativa" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <script>
    function hideDiv() {
      var div = document.querySelector('.centered-div');
      div.style.display = 'none';
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\ProgramData\envkit\projects\biblioteca\resources\views/inicio/home.blade.php ENDPATH**/ ?>