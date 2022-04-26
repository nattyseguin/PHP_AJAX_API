<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_REQUEST['q']);

$ciudad[1]="Ourense";
$ciudad[]="Coruña";
$ciudad[]="Lugo";
$ciudad[]="Pontevedra";

$poblacion[1]="100.000";
$poblacion[]="250.000";
$poblacion[]="90.000";
$poblacion[]="320.000";

$monumento[1]="Puente Romano";
$monumento[]="Torre de Hercules";
$monumento[]="Muralla Romana";
$monumento[]="Colegiata";

echo "<table>
<tr>
<th>Nombre</th>
<th>Habitantes</th>
<th>Monumento</th>
</tr>";
    echo "<tr>";
    echo "<td>" . $ciudad[$q] . "</td>";
    echo "<td>" . $poblacion[$q]. "</td>";
    echo "<td>" . $monumento[$q]. "</td>";
    echo "</tr>";

echo "</table>";
?>