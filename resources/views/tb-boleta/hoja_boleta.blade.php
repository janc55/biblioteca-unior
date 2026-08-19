<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title></title>
<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
</head>
<body>
<!-- <div style="page-break-before:always; page-break-after:always"> -->
<div>

<div>
    <p>  UNIVERSIDAD PRIVADA DE ORURO <br/>3
         MATRICULA DE INSCRIPCION PREGRADO <br/>
    </p>

@foreach ($datos as $datos)
<p>N°0186{{ $datos->id_est }};<br/></p>
<p>Apellido Paterno: {{ $datos->ape_p_est }} <br/>
Apellido Materno: {{ $datos->ape_m_est }}<br/>
Nombres: {{ $datos->nombre_est }} <br/>
C.I./Pasaporte: {{ $datos->ci_est }}<br/>
Fecha y Lugar de nacimiento: {{ $datos->fec_nac_est }}<br/>
Domicilio: {{ $datos->dom_est }} <br/>
Telefono: {{ $datos->tel_dom_est }}<br/>

Empresa donde Trabaja: {{ $datos->nombre_trab_padre_est }}<br/>
Direccion Trabajo: {{ $datos->dir_trab_padre_est }} <br/>
Telefono: {{ $datos->tel_trab_padre_est }}<br/>

Nombre del Colegio donde obtuvo su bachillerato: {{ $datos->cole_est }}  <br/>
Tipo: {{ $datos->tipo_cole_est }}<br/></p>
<p>Fecha de Bachillerato: {{ $datos->dato_bachi_est }}<br/>

Nombre del Padre: {{ $datos->padre_del_est }}<br/>
Nombre de la madre: {{ $datos->madre_del_est }}<br/>
Domicilio Familia:{{ $datos->dom_est }} <br/>
Telefono: {{ $datos->tel_dom_est }}<br/>

Carrera Elegida: {{ $datos->nombre_carre }}<br/>
turno: {{ $datos->desc_turno }}<br/>
Plan de pago elegido: {{ $datos->nombre_plan }} <br/></p>

<p>El Señor(a): ______________________ se compromete a cumplir con el plan de pago elegido con absoluta responsabilidad y puntualidad<br/></p>
<p>____________<br/>Firma<br/></p>
<p>C.I.__________ Oruro____________</p>
@endforeach

</div></div>
</body></html>