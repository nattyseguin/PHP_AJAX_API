<?php
include ("jpgraph/src/jpgraph.php");
include ("jpgraph/src/jpgraph_pie.php");
include ("jpgraph/src/jpgraph_pie3d.php");

// Some data
$data = array(30,40,60,80);

// Create the Pie Graph. 
$graph = new PieGraph(1050,550);

$theme_class= new VividTheme;
$graph->SetTheme($theme_class);

// Setup margin and titles
$graph->title->Set("Provincias y su poblacion en Galicia");

$p1 = new PiePlot3D($data);
$p1->SetSize(0.35);
$p1->SetCenter(0.5);

// Setup slice labels and move them into the plot
$p1->value->SetFont(FF_FONT1,FS_BOLD);
$p1->value->SetColor("black");
$p1->SetLabelPos(0.2);// esto son los porcentajes que estan encima 

$nombres=array("Ourense","Lugo","Pontevedra","Coruña");
$p1->SetLegends($nombres);

// Explode all slices
$p1->ExplodeAll();

$graph->Add($p1);
$graph->Stroke();
?>