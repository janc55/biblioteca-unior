@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Designaciones de Materias</h1>
@stop

@section('content')

<style>
    table,th,td {
	border: 0.2px solid black;
}
td,th {
	align="center";
    style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000">CODIGO:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Roboto-Regular;color:#000000"
}

</style>


<br>
@foreach ($datos as $datos3)
 <form action="{{ route('hoja_asig_doc') }}" method="post" >
  <div>@csrf                                              
     <input class="col-sm-3" class="form-control " type="hidden" name="id_doc" name="id_doc" value="{{ $datos3->id_doc }}"> 
     <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-fw fa-user"></i>Designaciones PDF</button>
 </div>    
 </form>
  @break
  @endforeach
<br>

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


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop