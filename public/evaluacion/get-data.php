<?php
// Connect to your MySQL database
$servername = "localhost";
$username = "fundacionsebasti_evalua";
$password = "fundacionsebasti_evalua";
$dbname = "fundacionsebasti_evalua";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
$sql = "SELECT `id`, `nombre_colaborador`, `cargo_colaborador`, `fecha_ingreso`, `nombre_superior`, `cargo_superior`, `area_superior`, `criterio1`, `criterio2`, `criterio3`, `criterio4`, `criterio5`, `criterio6`, `criterio7`, `criterio8`, `criterio9`, `criterio10`, `criterio11`, `criterio12`, `criterio13`, `criterio14`,  `continuar_contratacion`, `comentarios_evaluador`, `objetivos_definidos` FROM `formulario`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['nombre_colaborador'] . '</td>';
        echo '<td>' . $row['cargo_colaborador'] . '</td>';
        echo '<td>' . $row['fecha_ingreso'] . '</td>';
        echo '<td>' . $row['nombre_superior'] . '</td>';
        echo '<td>' . $row['cargo_superior'] . '</td>';
        echo '<td>' . $row['area_superior'] . '</td>';
        echo '<td>' . $row['criterio1'] . '</td>';
        echo '<td>' . $row['criterio2'] . '</td>';
        echo '<td>' . $row['criterio3'] . '</td>';
        echo '<td>' . $row['criterio4'] . '</td>';
        echo '<td>' . $row['criterio5'] . '</td>';
        echo '<td>' . $row['criterio6'] . '</td>';
        echo '<td>' . $row['criterio7'] . '</td>';
        echo '<td>' . $row['criterio8'] . '</td>';
        echo '<td>' . $row['criterio9'] . '</td>';
        echo '<td>' . $row['criterio10'] . '</td>';
        echo '<td>' . $row['criterio11'] . '</td>';
        echo '<td>' . $row['criterio12'] . '</td>';
        echo '<td>' . $row['criterio13'] . '</td>';
        echo '<td>' . $row['criterio14'] . '</td>';
        echo '<td>' . $row['continuar_contratacion'] . '</td>';
        echo '<td>' . $row['comentarios_evaluador'] . '</td>';
        echo '<td>' . $row['objetivos_definidos'] . '</td>';
        echo '</tr>';
    }
}

// Close the connection
$conn->close();
?>
