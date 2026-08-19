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

<h4>Plan de Estudios <br/>
DERECHO</h4>

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
            {{ $datos->GrupoSemestre}}
                    <!-- <p>
                    <i>1
                    <br/>1
                    <br/>1
                    <br/>1
                    <br/>1
                    <br/>1<br/></i></p> -->
            </td>
            <td align="center">
            {{ $datos->GrupoSigla}}
                    <!-- <p>ADM-100
                    <br/>CPA-100
                    <br/>ECO-100
                    <br/>ING-100
                    <br/>MAT-100
                    <br/>PSI-100<br/></p> -->
            </td>
            <td align="center">
            {{ $datos->GrupoMaterias}}
                    <!-- <p>ADMINISTRACION I
                    <br/>CONTABILIDAD BASICA
                    <br/>ECONOMIA POLITICA
                    <br/>INGLES I
                    <br/>MATEMATICAS GENERAL I
                    <br/>PSICOLOGIA SOCIAL<br/></p> -->
            </td>
            <td align="center">
            {{ $datos->GrupoPrerrequisito1}}
                    <!-- <p>Ninguno
                    <br/>Ninguno
                    <br/>Ninguno
                    <br/>Ninguno
                    <br/>Ninguno
                    <br/>Ninguno<br/></p> -->
            </td>            
        </tr>
        @endforeach
    </tbody>
</table>


</div></div>
</body></html>