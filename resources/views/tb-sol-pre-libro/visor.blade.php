<?php $values = auth()->user()->permisos;  include "est.php";?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">



<div class="card">
    <div class="card-header">
      <h3 class="card-title">LIBROS DIGITALES</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <style>
            .letragrande{font-size:15px;}
            thead {
    position: sticky;
    top: 0;
}


            </style>
            
            
       <style>
    .boton-flotante {
            position: fixed;
            bottom: 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            z-index: 999;
        }

        .boton-flotante i {
            margin-right: 5px;
        }

        #zoomInButton {
            right: 90px; /* Ajusta la posición desde la derecha */
        }

        #zoomOutButton {
            right: 20px; /* Ajusta la posición desde la izquierda */
        }
    </style> 
    
       <button class="boton-flotante" id="zoomInButton" onclick="zoomIn()">
        <i class="fas fa-search-plus"></i>  
    </button>
    <button class="boton-flotante" id="zoomOutButton" onclick="zoomOut()">
        <i class="fas fa-search-minus"></i>  
    </button>
    
          <div id="pdfContainer" style="width: 100%; overflow: hidden;">
  <embed id="pdfEmbed" src="{{ asset($dir) }}#toolbar=0" width="100%" height="400px">
</div>


<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>

<script>
  var currentZoom = 1.0;

  document.getElementById('pdfEmbed').addEventListener('load', function() {
    // PDF cargado, ahora podemos aplicar el zoom
    setZoom(currentZoom);
  });

  function zoomIn() {
    currentZoom += 0.1;
    setZoom(currentZoom);
  }

  function zoomOut() {
    currentZoom -= 0.1;
    setZoom(currentZoom);
  }

  function setZoom(zoom) {
    var pdfContainer = document.getElementById('pdfContainer');
    pdfContainer.style.transform = 'scale(' + zoom + ')';
  }
</script>




</div>
<!-- /.card-body -->
</div>


    <?php include "bofer.php";?>

