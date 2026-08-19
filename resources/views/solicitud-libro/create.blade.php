<?php $values = auth()->user()->permisos;  include "est.php";?>

<style>
/* Estilos para hacer el input más delgado */
input[type="text"] {
  border-width: 0.01px; /* Puedes probar con un valor menor, como 0.5px */
  border-color: #ccc; /* Color del borde (opcional) */
  padding: 1px; /* Espacio interno entre el contenido y el borde */
  margin: 1px; /* Espacio externo alrededor del input */
}

</style>

    <!-- Main content -->
    <section class="content">



	<form method="POST" action="{{ route('registroforml') }}"  role="form" enctype="multipart/form-data">
	@csrf
                          
	<div>
  <span style="font-style: normal; font-weight: bold; font-size: 10pt; font-family: Times New Roman; color: #000000;">
    "Material de Apoyo Logistico"
  </span>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        Docente: <input type="checkbox" name="doc">
      </span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        Director de carrera: <input type="checkbox" name="dic_car">
      </span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        Carrera/Área: <input type="text" name="carr">
      </span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        Fecha y Hora de Solicitud: {{ \Carbon\Carbon::now() }}
      </span>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        Nombre del estudiante responsable: <input type="text" name="est">
      </span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        COD. EST.: <input type="text" name="cod">
      </span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        Celular: <input type="text" name="cel">
      </span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        Semestre/Año: <input type="text" name="sem">
      </span>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        Domicilio: <input type="text" name="dom">
      </span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        Garantía: <input type="checkbox" name="gar">
      </span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        C.I.: <input type="checkbox" name="gci">
      </span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        CREDENCIAL: <input type="checkbox" name="gcred">
      </span>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
    <div class="form-group">
      <span style="font-style: normal; font-weight: normal; font-size: 10pt; font-family: Times New Roman; color: #000000;">
        Actividad: <input type="text" name="activi">
      </span>
    </div>
  </div>
</div>


<table border="2" style="width: 73%; height: 5%;">
	<tr>
		<td colspan="5"><span style="position: relative; left: 2.00in;">MATERIAL SOLICITADO</span></td>
	</tr>
	<tr>
		<td>Nº</td>
		<td>DESCRIPCIÓN</td>
		<td>CANTIDAD</td>
	
	</tr>
	<tr>
		<td>1</td>
		<td><input type="text" name="desc" style="width: 100%;"></td>
		<td><input type="text" name="cant" style="width: 100%;"></td>
	</tr>
	<tr>
		<td>2</td>
		<td><input type="text" name="desc1" style="width: 100%;"></td>
		<td><input type="text" name="cant1" style="width: 100%;"></td>
	</tr>
	<tr>
		<td>3</td>
		<td><input type="text" name="desc2" style="width: 100%;"></td>
		<td><input type="text" name="cant2" style="width: 100%;"></td>
	</tr>
	<tr>
		<td>4</td>
		<td><input type="text" name="desc3" style="width: 100%;"></td>
		<td><input type="text" name="cant3" style="width: 100%;"></td>
	</tr>
	<tr>
		<td>5</td>
		<td><input type="text" name="desc4" style="width: 100%;"></td>
		<td><input type="text" name="cant4" style="width: 100%;"></td>
	</tr>
</table>

 <div style="position:absolute;top:3.00in;left:12.85in;width:8.19in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:16pt;font-family:Times New Roman">Nº</span></SPAN><br/></div>
 
<br>
 <center>
 <input type="submit" class="btn btn-primary" value="Registrar">

</center>

   </form>

</section>

<?php include "bofer.php";?>

