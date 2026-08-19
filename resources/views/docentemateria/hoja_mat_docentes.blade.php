<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><head><title></title>
<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
</head>
<style>
    table,th,td {
	border: 0.2px solid black;
}
</style>

<body>
    <h2 align="right">Universidad Privada de Oruro</h2>
    <h4 align="right"><i>!Orgullo orureño!</i></h4>
<h3 align="center">CERTIFICADO 138/2023<br/></h3>

<p align="right"><i>LA   SUSCRITA   VICERRRECTORA<br/>ACADEMICA DE LA UNIVERSIDAD<br/></i>
<i>PRIVADA DE ORURO. A SOLICITUD<br/>ESCRITA DE LA INTERESADA.<br/></i></p>

<p>CERTIFICA QUE:<br/></p>
@foreach ($datos as $datos2) 
<p><i> {{ $datos2->grado }}.  {{ $datos2->nombre_doc }} {{ $datos2->ape_p_doc }} {{ $datos2->ape_m_doc }} con numero de C.I. {{ $datos2->ci }} {{ $datos2->exp_doc }}., es 
    <br/>docente titular de la carrera de {{ $datos2->nombre_carre }} de la Universidad en las 
    <br/>asignaturas de :<br/></i></p>
    @break
@endforeach    
<table>
<thead>
    <tr>
    <th>AÑO</th>
    <th>GESTION</th>
    <th>CARRERA</th>
    <th>SEMESTRE</th>
    <th>MATERIA</th>
    </tr> 
</thead>
<tbody>
@foreach ($datos as $datos)  
    <tr>
	    <td align="center">{{ $datos->anio_gestion}}</td>
        <td align="center">{{ $datos->periodo_gestion}}</td>
	    <td align="center">{{ $datos->nombre_carre}}</td>
        <td align="center">{{ $datos->numero }}</td>
        <td align="center">{{ $datos->nombre_mat }}</td>
	</tr>
@endforeach
</tbody>

</table>


<p> Es cuando certifico en honor a la verdad para fines que convengan a la solicitante. <br/></p>
<p align="right"><i>Oruro, 24 de marzo de 2023.<br/></i></p>
<br><br><br><br><br><br><br>
<p>EDIFICIO CENTRAL: calle junin N° 348 esquina potosi - Telefonos: 5273780 - 5273781 - Fax: 5280745
    <br/>SEGUNDO EDIFICIO: calle ayacucho N° 550 entre 6 de Octubre y Soria Galvarro - Telefonos: 5284586</p>

</div></div>
</body></html>