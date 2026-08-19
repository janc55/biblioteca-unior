@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vista de Plan de Estudios para asignar</h1>
@stop

@section('content')

<br>

    <form action="{{ route('hoja_memo_doc') }}" method="post" >
    @foreach ($datos2 as $datos3) 
    <div>@csrf                                               
        <input class="col-sm-3" class="form-control " type="hidden" name="id_doc" name="id_doc" value="{{ $datos3->id_doc}}"> 
        <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-fw fa-user"></i>Memorandum PDF</button>
    </div>  
    @break
    @endforeach      
    </form>
  
<br>

<h3>Universidad Privada de Oruro <h3> <br/>
<h5><i>!Orgullo orureño!<br/></i></h5>
<p>MEMORANDUM<br/></p>
<p>VRA - SIS-039/2023<br/></p>
@foreach ($datos2 as $datos2)  
<p>Para:                                                                                      
    <br/>
    {{ $datos2->grado}}  {{ $datos2->ape_p_doc}} {{ $datos2->ape_m_doc}} {{ $datos2->nombre_doc}}           <br/></p>
<p> Asunto:                                                  
    <br/>designacion de docente<br/></p>
<p>      oruro,10 de abril de 2023<br/></p>
<p>distinguido (a) profesional:<br/></p>
<p><i> De conformidad a normas y procedimientos de nuestra Universidad y luego de haber realizado la 
    <br/>evaluacion de sus antecedentes profesionales, es grato comunicarle que a sido designado(a) para la 
    <br/>prestacion de servicios en orden civil como DOCENTE  de la materia de {{ $datos2->codigo_mat}} 
    {{ $datos2->nombre_mat}}, de la carrera de {{ $datos2->nombre_carre}}, correspondiente al 
    <br/>SEMESTRE {{ $datos2->periodo_gestion}}/{{ $datos2->anio_gestion}}  INICIANDO EL {{ $datos2->inicio_desig}} al {{ $datos2->fin_desig}}.<br/></i></p>
<p> Para fines administrativos y cancelacion de honorarios se considern las horas efectivamente 
    <br/>trabajadas y registradas en el Sistema de Control de Asisitencia. Asi mismo debera registrar todas 
    <br/>las notas finales en el Sistema Informatico con firma y sello en el Acta de Notas respectivas. 
    <br/>A tiempo de felicitarle por la presente designacion,ruego dar estricta observacion y cumplimiento al 
    <br/>Reglamento Docente,los instructivos,horarios y periodos de clase asignados.<br/></p>
<p>Con este particular, saludo a usted con atencion.<br/></p>
<p>UNIOR</p>
<br><br><br><br><br><br>
@break
@endforeach



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop