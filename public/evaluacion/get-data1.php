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
       $criteriaValues = [
    $row['criterio1'], $row['criterio2'], $row['criterio3'],
    $row['criterio4'], $row['criterio5'], $row['criterio6'],
    $row['criterio7'], $row['criterio8'], $row['criterio9'],
    $row['criterio10'], $row['criterio11'], $row['criterio12'],
    $row['criterio13'], $row['criterio14']
];

$criteriaSum = array_sum($criteriaValues);

$ct=0;
if($row['criterio6']==0)
{
    
   $ct =count($criteriaValues)-1;
}
else
{
    $ct =count($criteriaValues);
    
}
$average = $criteriaSum / count($criteriaValues);


$formattedAverage = number_format($average, 2);

$backgroundColor = ($average >= 5.6) ? 'green' : 'red';

echo '<td style="background-color: ' . $backgroundColor . ';">' . $formattedAverage . '</td>';

    $backgroundColor = '';
if ($row['continuar_contratacion'] == 0) {
    $backgroundColor = 'red'; // No (0) - Red color
} elseif ($row['continuar_contratacion'] == 1) {
    $backgroundColor = 'green'; // Yes (1) - Green color
} elseif ($row['continuar_contratacion'] == 2) {
    $backgroundColor = 'orange'; // With Help (2) - Orange color
}

echo '<td style="background-color: ' . $backgroundColor . ';">' . $row['continuar_contratacion'] . '</td>';
        echo '<td>' . $row['comentarios_evaluador'] . '</td>';
        echo '<td>' . $row['objetivos_definidos'] . '</td>';
        echo '</tr>';
    }
}

// Close the connection
$conn->close();
?>
