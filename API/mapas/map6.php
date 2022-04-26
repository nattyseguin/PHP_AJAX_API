<?php
 $lat=42.3435849;
 $long=-7.8791259;
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Quick Start - Leaflet</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


	
</head>
<body>



<div id="mapid" style="width: 600px; height: 400px;"></div>
<script>
    var mymap = L.map('mapid').setView([<?php echo $lat?>, <?php echo $long?> ], 13);

var OPNVKarte = L.tileLayer('https://tileserver.memomaps.de/tilegen/{z}/{x}/{y}.png', {
	maxZoom: 18,
	attribution: 'Map <a href="https://memomaps.de/">memomaps.de</a> <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);
    <?php
         $archivo = fopen('mapFavorites.txt', "r");
         while ($linea = fgets($archivo)) {
             $partes = explode('#', trim($linea)); 
             
    ?>
    
	   var marker = L.marker([<?php echo $partes[0]; ?>, <?php echo $partes[1]; ?>]).addTo(mymap);
            marker.bindPopup("<b><?php echo $partes[2]; ?></b><br><a href='<?php echo $partes[3]; ?>'>Web del sitio</a>").openPopup();
	<?php
	}
	fclose($archivo);
	?>
</script>



</body>
</html>