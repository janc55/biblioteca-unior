

@foreach ($datos as $dato)



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
</head>
<body>
      <table>
            <tr>
              
                  <div style="position:absolute;top:1.22in;left:1.00in;width:0.58in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">BIBLIOTECA </span></SPAN><br/></div>
                  <div style="position:absolute;top:1.22in;left:1.58in;width:0.58in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">UNIOR </span></SPAN><br/></div>
                  <div style="position:relative;top:0.87in;left:3.25in;width:1.58in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times New Roman;color:#000000">Nº </span></SPAN><br/></div>
                  <div style="position:absolute;top:1.32in;left:1.02in;width:1.85in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">“Simón Cortes Saravia”</span><br/></SPAN></div>
                  <div style="position:absolute;top:1.42in;left:0.78in;width:1.40in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">Formulario de Solicitud de Préstamo</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.60in;left:0.03in;width:0.90in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">Código de Adquisición:</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.60in;left:0.87in;width:2.40in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">UNIOR BIBL. ECON. 3-002</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.60in;left:2.02in;width:2.40in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">Autor:</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.60in;left:2.27in;width:2.40in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">{{$dato->titulo}}</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.70in;left:0.03in;width:0.10in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">Titulo:</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.70in;left:0.32in;width:2.40in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">{{$dato->autor}}</span></SPAN><br/></div>
                       
              

              
                  <div style="position:absolute;top:1.22in;left:5.17in;width:1.58in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">BIBLIOTECA </span></SPAN><br/></div>
                  <div style="position:absolute;top:1.22in;left:5.72in;width:1.58in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">UNIOR </span></SPAN><br/></div>
                  <div style="position:absolute;top:0.87in;left:7.20in;width:1.58in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times New Roman;color:#000000">Nº </span></SPAN><br/></div>
                  <div style="position:absolute;top:1.32in;left:5.17in;width:1.57in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">“Simón Cortes Saravia”</span><br/></SPAN></div>
                  <div style="position:absolute;top:1.42in;left:5.00in;width:2.40in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">Formulario de Solicitud de Préstamo</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.60in;left:4.22in;width:0.90in;line-height:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:6pt;font-family:Times New Roman;color:#000000">Código de Adquisición:</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.60in;left:5.10in;width:2.67in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:5pt;font-family:Times New Roman;color:#000000">UNIOR BIBL. ECON. 3-002</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.60in;left:6.00in;width:2.67in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:5pt;font-family:Times New Roman;color:#000000">Autor</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.60in;left:6.20in;width:2.67in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:5pt;font-family:Times New Roman;color:#000000">{{$dato->titulo}}</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.70in;left:4.22in;width:2.67in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:5pt;font-family:Times New Roman;color:#000000">Titulo:</span></SPAN><br/></div>
                  <div style="position:absolute;top:1.70in;left:4.44in;width:3.67in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:5pt;font-family:Times New Roman;color:#000000">{{$dato->autor}}</span></SPAN><br/></div>
                
            <tr>
    </table>   

            <table border="2" style="width: 40%; height: 5%; position: relative; top:1.70in;left:0.10in">
            <tr>
                                 
                        <tr>
                             <th>      </th>
                             <th><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">FECHA </span></th>
                             <th><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">HORA </span></th>
                             <th><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">ESTADO </span></th>
                             <th><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">FIRMA </span></th>
                         </tr>
                         <tr>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">SALIDA </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">{{$dato->fecha_sol}}</span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"> </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"> </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"> </span></td>
                         </tr>
                         <tr>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">DEVOLUCION </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">{{$dato->fecha_lim}} </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"></span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"> </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"> </span>      </td>
                         </tr>
                    
                                
            </tr>
        </table>  

        <table border="2" style="width: 40%; height: 5%; position: relative; top:1.00in;left:4.28in" >
            <tr>
                
                    
                        <tr>
                             <th>      </th>
                             <th><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">FECHA </span></th>
                             <th><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">HORA </span></th>
                             <th><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">ESTADO </span></th>
                             <th><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">FIRMA </span></th>
                         </tr>
                         <tr>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">SALIDA </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">{{$dato->fecha_sol}} </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"> </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"> </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"> </span></td>
                         </tr>
                         <tr>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">DEVOLUCION </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000">{{$dato->fecha_lim}} </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"></span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"> </span></td>
                             <td><span style="font-style:normal;font-weight:bold;font-size:5pt;font-family:Times New Roman;color:#000000"> </span>      </td>
                         </tr>
                    
                                
            </tr>
        </table>   
        <table style="width: 40%; height: 5%; position: absolute; top:1.00in;left:0.01in">
                    <tr>
                    <div style="position:absolute;top:1.55in;left:0.05in;width:0.72in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Estudiante:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Times New Roman;color:#000000"> </span><br/></SPAN></div>
                    <div style="position:absolute;top:1.55in;left:0.60in;wi0dth:0.79in;line-height:0.13in;"><DIV style="position:relative; left:0.15in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Egresado:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Times New Roman;color:#000000"> </span><br/></SPAN></DIV></div>
                    <div style="position:absolute;top:1.55in;left:1.60in;width:1.04in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Docente:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Times New Roman;color:#000000"> </span><br/></SPAN></div>
                    <div style="position:absolute;top:1.55in;left:2.30in;width:1.68in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Administrativo:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Times New Roman;color:#000000"> </span><br/></SPAN></div>
                    <div style="position:absolute;top:1.75in;left:0.05in;width:3.55in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Otro/Externo:DOCENTE </span></SPAN><br/></div>
                    <div style="position:absolute;top:1.85in;left:0.05in;width:5.92in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Nombres y Apellidos : {{$dato->nombre}}</span></SPAN><br/></div>
                    <div style="position:absolute;top:1.95in;left:0.05in;width:5.93in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Carrera: MEDICINA</span></SPAN><br/></div>
                    <div style="position:absolute;top:1.95in;left:0.05in;width:5.93in;line-height:0.13in;"><DIV style="position:relative; left:2.15in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Semestre/Año: 2/2023</span> <br/></SPAN></DIV></div>
                    <div style="position:absolute;top:2.05in;left:0.05in;width:2.78in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Código:{{$dato->codigo}}</span><br/></SPAN></div>
                    <div style="position:absolute;top:2.05in;left:2.30in;width:2.70in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Celular: 72494556 </span></SPAN><br/></div>
                    <div style="position:absolute;top:2.15in;left:0.05in;width:5.94in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Domicilio: TACNA Y BOLIVAR</span></SPAN><br/></div>
                    <div style="position:absolute;top:2.70in;left:2.50in;width:1.57in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Firma: FIRMA3</span></SPAN><br/></div>
                    <div style="position:absolute;top:2.80in;left:2.50in;width:1.54in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">CI: {{$dato->ci}}</span></SPAN><br/></div>
                                     

                   
                    
                    <div style="position:absolute;top:1.55in;left:4.25in;width:0.72in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Estudiante:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Times New Roman;color:#000000"> </span><br/></SPAN></div>
                    <div style="position:absolute;top:1.55in;left:4.80in;width:0.79in;line-height:0.13in;"><DIV style="position:relative; left:0.15in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Egresado:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Times New Roman;color:#000000"> </span><br/></SPAN></DIV></div>
                    <div style="position:absolute;top:1.55in;left:5.50in;width:1.04in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Docente:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Times New Roman;color:#000000"> </span><br/></SPAN></div>
                    <div style="position:absolute;top:1.55in;left:6.40in;width:0.98in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Administrativo:</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Times New Roman;color:#000000"> </span><br/></SPAN></div>
                    <div style="position:absolute;top:1.75in;left:4.25in;width:3.55in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Otro/Externo:DOCENTE </span></SPAN><br/></div>
                    <div style="position:absolute;top:1.85in;left:4.25in;width:5.92in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Nombres y Apellidos : {{$dato->nombre}}</span></SPAN><br/></div>
                    <div style="position:absolute;top:1.95in;left:4.25in;width:5.93in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Carrera: </span></SPAN><br/></div>
                    <div style="position:absolute;top:1.95in;left:4.25in;width:5.93in;line-height:0.13in;"><DIV style="position:relative; left:2.15in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Semestre/Año:</span> <br/></SPAN></DIV></div>
                    <div style="position:absolute;top:2.05in;left:4.25in;width:2.78in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Código:{{$dato->codigo}}</span><br/></SPAN></div>
                    <div style="position:absolute;top:2.05in;left:6.50in;width:2.70in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Celular:  </span></SPAN><br/></div>
                    <div style="position:absolute;top:2.15in;left:4.25in;width:5.94in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Domicilio:</span></SPAN><br/></div>
                    <div style="position:absolute;top:2.70in;left:6.50in;width:1.57in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">Firma: FIRMA3</span></SPAN><br/></div>
                    <div style="position:absolute;top:2.80in;left:6.50in;width:1.54in;line-height:0.13in;"><span style="font-style:normal;font-weight:normal;font-size:6pt;font-family:Times New Roman;color:#000000">CI: {{$dato->ci}}</span></SPAN><br/></div>
                    
                 
            </tr>
        </table>    
          
          
</body>




















@endforeach





