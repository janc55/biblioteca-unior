<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVALUACIÓN DEL DESEMPEÑO</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2; /* Light gray background color */
        }
        .container {
            background-color: #ffffff; /* White container background color */
            border-radius: 8px; /* Add border-radius for rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for depth */
            padding: 20px; /* Add padding for content inside the container */
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div style="float: right; text-align: right;">
                <!-- Logo on the right side -->
                <img src="logo.png" alt="Logo" style="max-width: 100%;">
            </div>
    <form action="procesar_formulario.php" method="POST">
	 
 
<br>
        <h2>EVALUACIÓN DEL DESEMPEÑO</h2>

      
    

        <div class="form-group">
            <label for="cargo_colaborador">Nombre del evaluado:</label>
            <input type="text" class="form-control" id="cargo_colaborador" name="cargo_colaborador" required>
        </div>

        <div class="form-group">
            <label for="fecha_ingreso">Fecha de evaluación:</label>
            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
        </div>

 
        <h4>Información del Evaluador</h4>

      
 <div class="form-group">
 

            <label for="nombre_colaborador">Nombre Evaluador:</label>
            <input type="text" class="form-control" id="nombre_colaborador" name="nombre_colaborador" required>
        </div>
        <div class="form-group">
            <label for="cargo_superior">Cargo:</label>
            <input type="text" class="form-control" id="cargo_superior" name="cargo_superior" required>
        </div>

        <div class="form-group">
            <label for="area_superior">Área :</label>
            
              <select class="form-control" id="area_superior" name="area_superior">
           
                	  <option value="VICERECTORADO">VICERECTORADO</option>
                <option value="ADMINISTRACION">ADMINISTRACION</option>
			    <option value="DIRECCION DE CARRERA">DIRECCION DE CARRERA</option>
                	  <option value="MARKETING">MARKETING</option>
                <option value="LABORATORIOS">LABORATORIOS</option>
                
                <option value="BIBLIOTECA">BIBLIOTECA</option>
                	  <option value="CLINICAS">CLINICAS</option>
                <option value="APOYO">APOYO</option>
			    <option value="BINIESTAR ESTUDIANTIL">BINIESTAR ESTUDIANTIL</option>
                	  <option value="INTERACCION SOCIAL Y RELACIONES PUBLICAS">INTERACCION SOCIAL Y RELACIONES PUBLICAS</option>
                	   <option value="ADM. REGISTROS">ADM. REGISTROS</option>
            </select>
         
        </div>



La evaluación del desempeño tiene el fin de calificar objetivamente las habilidades, competencias y compromiso del administrativo en cuanto al cumplimiento de sus funciones, 
el desarrollo de su trabajo y la mejora continua de la UNIOR.  La información contenida es confidencial, 
teniendo conocimientos de los resultados únicamente el Evaluado, Dirección Adminstrativa , Dirección de Autoevaluación y Rectorado.																											
<br><b>Instrucciones</b>	<br>																										
Para los efectos de evaluación, el jefe inmediato (evaluador/autoevaliación) deberá considerar los indicadores de cumplimiento que a 
continuación se describen, marcando en cada casilla  según el concepto que mejor represente, donde 10 es el máximo valor y 1 el menor. 																											

<br>
        <?php
        // Generar opciones para el combobox del 1 al 10
        $opciones = '';
		$val=10;
        for ($i = 1; $i <= 10; $i++) {
            $opciones .= "<option value=\"{$val}\">{$val}</option>";
			$val--;
        }
		
		$criterios = array(
    "Tiene criterio y conocimiento técnico comprobado en el área de su competencia.",
    "Demuestra interés por continuar aprendiendo, buscando ayuda de sus compañeros de trabajo.",
    "Trabaja de manera eficiente, no requiriendo supervisión constante.",
    "Entrega los resultados de las tareas que se le han confiado, aunque aquello requiera un esfuerzo adicional.",
    "Mantiene orden y limpieza continuamente en su sector de trabajo.",
    "Presenta POA, plan de trabajo y se esmera en el cumplimiento de los mismos.",
    "Organiza su trabajo de manera efectiva, permitiendo cumplir con sus responsabilidades a tiempo.",
    "Tiene clara sus responsabilidades y se hace cargo por sus resultados.",
    "Se comunica adecuadamente con su jefe y sus compañeros de trabajo.",
    "Esta dispuesto a pedir ayuda cuando la necesita y dar ayuda cuando le solicitan.",
    "Tiene una actitud positiva y predisposición en el día a día.",
    "Trabaja activamente adaptándose a los cambios que el trabajo presenta.",
    "Conoce y cumple las normas de la institucion, horarios, reglamentos; normas de seguridad, bioseguridad y requerimientos.",
    "Su comportamiento está alineado a los preceptos éticos de la UNIOR"
);

        ?>
     <h4>1. Aplicación de conocimientos y
	 habilidades en el puesto de trabajo:</h4>


		
   <?php for ($i = 0; $i < 6; $i ++): ?>
    <div class="row">
     
        <div class="col-md-6">
            <div class="form-group">
                <label for="criterio<?php echo $i ; ?>"><?php echo $criterios[$i]; ?>:</label>
                <select class="form-control" id="criterio<?php echo $i+1 ; ?>" name="criterio<?php echo $i+1 ; ?>">
                    <?php echo $opciones; ?>
                    
                       <?php   
                
                     echo '     <option value="0">NO APLICA</option>';
                    
                    ?>
                    
                </select>
            </div>
        </div>
        
    
  
    </div>
<?php endfor; ?>


		
		
		     <h4>2. Competencias </h4>


		
   <?php for ($i = 6; $i < 14; $i ++): ?>
    <div class="row">
     
        <div class="col-md-6">
            <div class="form-group">
                <label for="criterio<?php echo $i ; ?>"><?php echo $criterios[$i]; ?>:</label>
                <select class="form-control" id="criterio<?php echo $i+1 ; ?>" name="criterio<?php echo $i+1 ; ?>">
                    
                    
                    
                    <?php echo $opciones; ?>
                 
                </select>
            </div>
        </div>
  
    </div>
<?php endfor; ?>


		



  <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Puntaje</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10 a 9 pts.</td>
                    <td>Cumple con las expectativas del puesto y competencias</td>
                </tr>
                <tr>
                    <td>8 a 7 pts.</td>
                    <td>Cumple con las mínimas expectativas, pero requiere acompañamiento y desarrollo</td>
                </tr>
                <tr>
                    <td>6 para adelante</td>
                    <td>No cumple con las mínimas expectativas</td>
                </tr>
            </tbody>
        </table>
		
		
		

        <div class="form-group" hidden>
            <label for="continuar_contratacion">Se solicita continuar con su contratación:</label>
            <select class="form-control" id="continuar_contratacion" name="continuar_contratacion">
                <option value="1">Sí</option>
                	  <option value="2">SI,CON INDUCCION</option>
                <option value="0">No</option>
			
            </select>
        </div>

        <div class="form-group">
            <label for="comentarios_evaluador">Comentarios del Evaluador:</label>
            <textarea class="form-control" id="comentarios_evaluador" name="comentarios_evaluador" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="objetivos_definidos">Objetivos definidos en el puesto de trabajo:</label>
            <textarea class="form-control" id="objetivos_definidos" name="objetivos_definidos" rows="3"></textarea>
        </div>

  <div class="form-group" >
            <label for="nombre_superior">Observaciones:</label>
            <input type="text" class="form-control" id="nombre_superior" name="nombre_superior" value=" ">
        </div>
        <!-- Botón de Envío -->
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<!-- Agrega el enlace al archivo JS de Bootstrap y al archivo jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
