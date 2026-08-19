<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><head><title></title>
<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
</head>
<style>
    table,th,td {
	border: 0.2px solid black;
}
td,th {
	align="center";
    style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">CODIGO:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"
}
 
</style>

<body>
<!-- <div style="page-break-before:always; page-break-after:always"><div> -->
    <h6>Universidad Privada de oruro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    @foreach ($datos2 as $datos2)     
    GESTION {{$datos2->periodo_gestion}}/{{$datos2->anio_gestion}}
    @endforeach </h6>
    <h6 align="center"> DESIGNACION DE DOCENTES<br/></h6>

<table>
    <thead> 
        <tr>
            <th>CAR</th>
            <th>NIV</th>
            <th>TUR</th>
            <th>PAR</th>
            <th>SIGLA</th>
            <th>MATERIA</th>
            <th>DOCENTE</th>
            <th>TIPO</th>
            <th>INICIO</th>
            <th>FIN</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($datos as $datos)  
        <tr>
            <td align="center">{{ $datos->sigla_carre }}</td> 
            <td align="center">{{ $datos->numero }}</td>
            <td align="center">{{ $datos->sigla_turno }}</td>
            <td align="center">{{ $datos->paralelo_asig_mat }}</td>
            <td align="center">{{ $datos->codigo_mat }}</td>
            <td>{{ $datos->nombre_mat }}</td>
            <td>{{ $datos->grado }}. {{ $datos->nombre_doc }} {{ $datos->ape_p_doc }} {{ $datos->ape_m_doc }}</td>
            <td align="center">{{ $datos->tipo_asig_mat}}</td>
            <td>{{ $datos->inicio_desig }}</td>
            <td>{{ $datos->fin_desig }}</td>
        </tr>
    @endforeach  
    </tbody>
</table>           

</div></div>

</div></div>
</body></html>
