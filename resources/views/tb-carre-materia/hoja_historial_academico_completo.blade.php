<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><head><title></title>
<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
</head>
<style>
table {
        font-style:normal;font-weight:normal;font-size:10pt;
        font-family:Roboto-Regular;color:#000000">NOMBRE:</span><span style="font-style:normal;
        font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000;
}
td,th {
        font-style:normal;font-weight:normal;font-size:10pt;
        font-family:Roboto-Regular;color:#000000">NOMBRE:</span><span style="font-style:normal;
        font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000;
        border: 0.2px solid black;
}
</style>
<body>
    <p>Historial Academico
@foreach ($datos2 as $datos2)         
        <br/>{{ $datos2->nombre_carre}} <br/></p>

<p>NOMBRE: {{ $datos2->Nombre1}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
N° SERIE: {{ $datos2->NSerie1}} <br/></p>
<p>MATRICULA: {{ $datos2->Matricula1}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    C.I.: {{ $datos2->CI1}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    GRADO: {{ $datos2->Grado1}} <br/></p>
@endforeach
<table>
    <thead>
        <tr>
            <th align="center">SEM</th>
            <th align="center">COD</th>
            <th align="center">MATERIA</th>
            <th align="center">NOTA</th>
            <th align="center">ESTADO</th>
            <th align="center">PRE-REQUISITO</th>
            <th align="center">OBSERVACIONES</th>
            <th align="center">CRED</th>
            <th align="center">HT</th>
            <th align="center">HP</th>
            <th align="center">TOTAL SEMESTRE</th>
        </tr> 
    </thead>
    <tbody>
        @foreach ($datos3 as $datos3) 
        <tr>
            <td colspan="11" align="center"> {{ $datos3->Periodo1}} / {{ $datos3->Gestion1}}</td>  
        </tr>
        @endforeach
        
        @foreach ($datos as $datos) 
        <tr>
            <td align="center">{{ $datos->numero}}</td>
            <td align="center">{{ $datos->codigo_mat}}</td>
            <td >{{ $datos->nombre_mat}}</td>
            <td align="center">{{ $datos->Nota1}}</td>
            <td align="center">{{ $datos->Estado1}}</td>
            <td align="center">{{ $datos->Prerrequisito1}}</td>
            <td align="center">{{ $datos->OBS1}}</td>
            <td align="center">{{ $datos->cred_materia}}</td>
            <td align="center">{{ $datos->ht_materia}}</td>
            <td align="center">{{ $datos->hp_materia}}</td>
            <td align="center">{{ $datos->tse_materia}}</td>
        </tr>
        @endforeach
   
    </tbody>
</table>
  
<p align="right">
    <br/>HORAS ACADEMICAS VENCIDAS: 10920<br/></p>
<p align="right">TOTAL ASIGNATURAS APROBADAS: 79
    <br/>TOTAL ASIGNATURAS CONVALIDADAS: 10<br/></p>
<p align="right">TOTAL ASIGNATURAS HOMOLOGADAS: 0
    <br/>PROMEDIO DE CALIFICACIONES ASIGNATURAS AROBADAS: 59.13</p>

</div></div>
</body></html>