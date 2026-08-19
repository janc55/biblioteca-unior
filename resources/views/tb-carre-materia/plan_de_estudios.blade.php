@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Plan de Estudios</h1>
@stop

@section('content')


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

<h4>DERECHO</h4>

<br>

<form action="{{ route('hoja_plan_de_estudios') }}"method="post" target="_blank">
    <div>@csrf                                 
    <!-- <input class="col-sm-3" class="form-control " type="hidden" name="id" name="id" value="id_doc">  -->
    <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-fw fa-user"></i>Hoja Plan de Estudios PDF</button>
    </div>    
 </form>

<br>

 <!-- <form action="{{ route('hoja_historial_acc') }}"method="post" target="_blank">
     <div>@csrf                                 
     <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-fw fa-user"></i>Hoja Historial Academico PDF</button>
     </div>    
  </form> -->

<br>

<table>
    <thead>
        <tr style="background-color:#D3D3D3">
            <th align="center">SEM</th>
            <th align="center">COD</th>
            <th align="center">MATERIA</th>
            <th align="center">PRE-REQUISITO</th>
        </tr>
       
    </thead>
    <tbody>
        @foreach ($datos as $datos) 
        <tr>
             <td colspan="4">{{ $datos->desc_sem}}</td>
        </tr>
        <tr>
            <td align="center">
            {{ $datos->GrupoSemestre }} </br>
                  
            </td>
            <td align="center">
            {{ $datos->GrupoSigla}} </br>
                    
            </td>
            <td align="center">
            {{ $datos->GrupoMaterias}} </br>
                  
            </td>
            <td align="center">
            {{ $datos->GrupoPrerrequisito1}} </br>
                  
            </td>            
        </tr>
        @endforeach
    </tbody>
</table>


</div></div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop