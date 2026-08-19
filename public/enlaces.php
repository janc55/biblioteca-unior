
<?php
 
$host = function_exists('env') ? env('DB_HOST', '127.0.0.1') : '127.0.0.1';
$usuario = function_exists('env') ? env('DB_USERNAME', 'root') : 'root';
$contraseña = function_exists('env') ? env('DB_PASSWORD', '') : '';
$base_datos = function_exists('env') ? env('DB_DATABASE', 'unioredu_biblioteca') : 'unioredu_biblioteca';

$conexion = mysqli_connect($host, $usuario, $contraseña, $base_datos);

if (!$conexion) {
    die('Error al conectar con la base de datos: ' . mysqli_connect_error());
}


?>
 



<?php
$consulta = mysqli_query($conexion, 'SELECT * FROM tb_enlace_bi');
if (!$consulta) {
    die('Error al realizar la consulta: ' . mysqli_error($conexion));
}
?>




<?php
while ($fila = mysqli_fetch_assoc($consulta)) {
    echo '<li class="nav-item">';
    echo '  <a href="' . $fila['dir'] . '" target="_blank">';
    echo '    <center>';
    echo '      <img width="100" height="25" src="libro/' . $fila['foto'] . '">';
    echo '    </center>';
    echo '  </a>';
    echo '</li> <br>';
}
?>

<?php
mysqli_close($conexion);
?>
