@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CERTIFICADO DE CALIFICACIONES</h1>
@stop

@section('content')

<br>
@foreach ($datos as $datos2)   
<div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"><b>NOMBRE:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->nombre_est}} {{$datos2->ape_p_est}} {{$datos2->ape_m_est}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>

<span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">&nbsp; &nbsp; &nbsp; &nbsp; <b>MATRICULA:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->cod_est}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN></div>

<div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"><b>CEDULA DE IDENTIDAD:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->ci_est}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>

<span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <b>CARRERA:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->nombre_carre}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN></div>

<div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"><b>GRADO ACADEMICO:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->grado_est}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<b>GESTION:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->anio_gestion}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN></div>
<div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> <b>N DE SERIE DE HISTORIAL ACADEMICO:</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN>
<span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000">{{$datos2->nro_serie_est}}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#000000"> </span></SPAN></div>
<br>
<form method="POST" action="{{ route('nota_estudiante_pdf') }}"  role="form" enctype="multipart/form-data">
    @csrf
    <div>
    <input class="col-sm-3" class="form-control " type="hidden" name="id_est" id="id_est" value="{{ $datos2->id_est }}"> 
    <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-fw fa-user"></i>Imprimir Calificaciones PDF</button>
</form>
@break
@endforeach
<br><br>

<table border="1" style="text-align:center;">
<thead >
    <tr colspan="5">
<th><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"><b>COD</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"></span><br/></SPAN></div></th>
<th><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"><b>MATERIA</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"></span><br/></SPAN></div></th>
<th><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"><b>NOTA</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"></span><br/></SPAN></div></th>
<th><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"><b>LITERAL</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"></span><br/></SPAN></div></th>
<th><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"><b>OBSERVACIONES</b></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Medium;color:#444444"></span><br/></SPAN></div></th>

</tr>
</thead > 

<tbody> 
@foreach ($datos as $datos) 
<tr alling="center">

<td><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444">{{ $datos->codigo_mat }}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444"> </span><br/></SPAN></div></td>
<td><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444">{{ $datos->nombre_mat }}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444"> </span><br/></SPAN></div></td>
<td><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444">{{ $datos->NotaFinal }} </span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444"> </span><br/></SPAN></div></td>
<td><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444">{{ $datos->literal }}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444"> </span><br/></SPAN></div></td>
<td><div ><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444">{{ $datos->obs_asig }}</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Roboto-Regular;color:#444444"> </span><br/></SPAN></div></td>

</tr>
@endforeach

</tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop