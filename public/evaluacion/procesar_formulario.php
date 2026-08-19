<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $servername = "localhost";
    $username = "fundacionsebasti_evalua";
    $password = "fundacionsebasti_evalua";
    $dbname = "fundacionsebasti_evalua";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }


    $nombre_colaborador = $_POST["nombre_colaborador"];
    $cargo_colaborador = $_POST["cargo_colaborador"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $nombre_superior = $_POST["nombre_superior"];
    $cargo_superior = $_POST["cargo_superior"];
    $area_superior = $_POST["area_superior"];


    $criterios = [];
    for ($i = 1; $i <= 14; $i++) {
        $criterios["criterio{$i}"] = $_POST["criterio{$i}"];
    }


    $continuar_contratacion = $_POST["continuar_contratacion"];
    $comentarios_evaluador = $_POST["comentarios_evaluador"];
    $objetivos_definidos = $_POST["objetivos_definidos"];

    $sql = "INSERT INTO formulario (nombre_colaborador, cargo_colaborador, fecha_ingreso, nombre_superior, 
            cargo_superior, area_superior, ";
    
    foreach ($criterios as $criterio => $valor) {
        $sql .= "$criterio, ";
    }

    $sql .= "continuar_contratacion, comentarios_evaluador, objetivos_definidos) VALUES (
            '$nombre_colaborador', '$cargo_colaborador', '$fecha_ingreso', '$nombre_superior', 
            '$cargo_superior', '$area_superior', ";
    
    foreach ($criterios as $valor) {
        $sql .= "$valor, ";
    }

    $sql .= "'$continuar_contratacion', '$comentarios_evaluador', '$objetivos_definidos')";
// $sql;

    if ($conn->query($sql) === TRUE) {
        echo "Datos ingresados correctamente.";
        
    } else {
        echo "Error al ingresar datos: " . $conn->error;
    }
    echo '<META HTTP-EQUIV=REFRESH CONTENT="2; URL=https://fundacionsebastianpagador.com/biblioteca/public/evaluacion/">';

    $conn->close();
} else {
    header("Location: index.php");
    exit();
}
?>
