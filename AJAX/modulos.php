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

$ciclos[1]="DAW";
$ciclos[]="DAM";
$ciclos[]="ASIR";


$modulo[1]="FOL,CLIENTE,SERVIDOR,DAW Y DISEÑO WEB";
$modulo[]="PROGRAMACION,DESARROLLO APP,FOL";
$modulo[]="CONTORNO SERVIDOR,SISTEMAS";


$ciudad[1]="Ourense,Pontevedra,A coruña";
$ciudad[]="Ourense,Pontevedra,A coruña";
$ciudad[]="A coruña, Ourense";


echo "<table>
<tr>
<th>CICLO</th>
<th>ASIGNATURAS</th>
<th>CIUDAD</th>
</tr>";
    echo "<tr>";
    echo "<td>" . $ciclos[$q] . "</td>";
    echo "<td>" . $modulo[$q]. "</td>";
    echo "<td>" . $ciudad[$q]. "</td>";
    echo "</tr>";

echo "</table>";
?>