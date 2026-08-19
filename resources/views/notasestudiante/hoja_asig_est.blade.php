<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
  
<div align="right" ><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#000000; text-align:center">Universidad Privada de Oruro</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#000000"> </span><br/></SPAN></div>
<div align="left"><span style="font-style:normal;font-weight:normal;font-size:16pt;font-family:Roboto-Medium;color:#000000">Asignacion de Materias</span><span style="font-style:normal;font-weight:normal;font-size:16pt;font-family:Roboto-Medium;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:16pt;font-family:Roboto-Medium;color:#000000">1/2,022</span><span style="font-style:normal;font-weight:normal;font-size:16pt;font-family:Roboto-Medium;color:#000000"> </span><br/></SPAN></div>
     
     <br/><br/>
     
@foreach ($datos as $datos2)  

<div ><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">CODIGO:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="border: ridge black 1px; font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">{{ $datos2->cod_est }}</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
        MATRICULA:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="border: ridge black 1px; font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">{{ $datos2->cod_est }}</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN></div>

<div ><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">NOMBRE:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="border: ridge black 1px; font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">{{ $datos2->ape_p_est }} {{ $datos2->ape_m_est }} {{ $datos2->nombre_est }}</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Carrera:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="border: ridge black 1px; font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">{{ $datos2->nombre_carre }} </span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN></div>
@break
@endforeach

<br/><br/>
<table border="1" style="text-align:center;">
<thead >
    <tr colspan="5">
<th><div><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444">ASIG</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444"> </span><br/></SPAN></div></th>
<th><div><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444">MATERIA</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444"> </span><br/></SPAN></div></th>
<th><div><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444">SEM</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444"> </span><br/></SPAN></div></th>
<th><div><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444">TURNO</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444"> </span><br/></SPAN></div></th>
<th><div><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444">PAR</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444"> </span><br/></SPAN></div></th>
<th><div><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444">DOCENTE</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444"> </span><br/></SPAN></div></th>
</tr>
</thead >

<tbody> 
@foreach ($datos as $datos) 
<tr alling="center">

<td><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#444444">{{ $datos->created_at}}</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#444444"> </span></SPAN></td>
<td><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#444444">{{ $datos->codigo_mat }} {{ $datos->nombre_mat }}</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#444444"> </span></SPAN></td>
<td><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#444444">{{ $datos->numero }}</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#444444"> </span></SPAN></td>
<td><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#444444">{{ $datos->desc_turno }}</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#444444"> </span></SPAN></td>
<td><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#444444">{{ $datos->paralelo_asig_mat }}</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#444444"> </span></SPAN></td>
<td><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444">{{ $datos->ape_p_doc }} {{ $datos->ape_m_doc }} {{ $datos->nombre_doc }}</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444"> </span></SPAN></td>
</tr>
@endforeach
</tbody>
</table>
<br/><br/><br/><br/><br/>
<div >
<center>
<span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444">Admisiones y Registros</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444"> </span></SPAN> <br>
<!-- <span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SALVATIERRA DAMIAN HENRY WILLIAM</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Medium;color:#444444"> </span></SPAN></div> -->
</center>



</body>
</html>
