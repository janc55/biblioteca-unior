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
   
    <table BORDER WIDTH="100%">
        <tr>
            <td WIDTH="70%" align="center">
                <h4 >Universidad Privada de Oruro</h4>
                <h4 > Orgullo Orureño!!! </h4>
            </td>
            <td  WIDTH="30%"align="center">
                 <h1 > Control de notas</h1>
            </td>
        </tr>
        
    </table>

<p align="right">Dirección de Admisiones y registro<br/></p>

<table BORDER WIDTH="100%">
@foreach ($datos2 as $datos2) 
    <tr>
        <td WIDTH="10%">Carrera </td>
        <td WIDTH="40%">{{ $datos2->nombre_carre}}</td>
        <td WIDTH="10%">Docente </td>
        <td WIDTH="40%">{{ $datos2->grado}} {{ $datos2->docente}} </td>
    </tr> 
    <tr>
        <td WIDTH="10%">Semestre </td>
        <td WIDTH="40%">{{ $datos2->desc_sem }}</td>
        <td WIDTH="10%">Materia </td>
        <td WIDTH="40%">{{ $datos2->nombre_mat }}</td>
    </tr> 
    <tr>
        <td WIDTH="10%">Paralelo</td>
        <td WIDTH="40%">{{ $datos2->paralelo_asig_mat }}</td>
        <td WIDTH="10%">Turno:</td>        
        <td WIDTH="40%">{{ $datos2->desc_turno }}</td>
    </tr>
@endforeach
</table>

<br><br>

<table BORDER WIDTH="100%">
    <thead>
        <tr align="center">
            <td WIDTH="5%">N°</td>
            <td WIDTH="55%">NOMINA DE ESTUDIANTES</td>
            <td WIDTH="10%">NOTA PRIMER PARCIAL 35%</td>
            <td WIDTH="10%">NOTA SEGUNDO PARCIAL 35%</td>
            <td WIDTH="10%">NOTA EXAMEN FINAL 30%</td>
            <td WIDTH="10%">TOTAL 100%</td>
        </tr>
    </thead>
    <tbody>
    {{ $i=1 }}
        @foreach ($datos as $datos) 
        
        <tr>
            <td align="center" WIDTH="5%">{{ $i++ }}</td>
            <td WIDTH="55%">{{ $datos->estudiante }} </td> 
            <td align="center" WIDTH="10%">{{ round($datos->eval_p1*0.35, 0)}}</td>
            <td align="center" WIDTH="10%">{{ round($datos->eval_p2*0.35, 0)}}</td>
            <td align="center" WIDTH="10%">{{ round($datos->eval_fin*0.30, 0)}}</td>
            <!-- <td align="center" WIDTH="10%">{{ $datos->NotaFinal }}</td>  -->
            <td align="center" WIDTH="10%">{{ round($datos->eval_p1*0.35, 0) + round($datos->eval_p2*0.35, 0) + round($datos->eval_fin*0.30, 0) }}</td>

        </tr>
        @endforeach
    </tbody>
</table>
<br><br>
<h5> DESCRIPCION DE LA EVALUACION </h5>
<table >
    <thead> 
    @foreach ($datos3 as $datos3) 
        <tr align="right">
            <th> Estudiantes Aprobados</th>
            <td> {{ $datos3->tlaprobados}} </td>
        </tr>
        <tr align="right">
            <th> Estudiantes Reprobados</th>
            <td> {{ $datos3->tlrepro}} </td>
        </tr>
        <tr align="right">
            <th> Estudiantes Abandonados</th>
            <td> {{ $datos3->tlaban}} </td>
        </tr>
    </thead>
    @endforeach  
</table>

</div></div>
</body></html>