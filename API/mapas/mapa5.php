<?php
$latitude=42.343059;
$longitud=-7.870041;
$lat_Carb_Ou=42.3328117;
$long_Carb_Ou=-7.8691511;
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Mapa desde ourense</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
	
</head>
<body>


<div id="map" style="width: 600px; height: 400px;"></div>
<script>
 

	var map = L.map('map').setView([<?php echo "$latitude" ?>, <?php echo "$longitud" ?>], 13);

	var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(map);
  var marker = L.marker([<?php echo "$lat_Carb_Ou" ?>, <?php echo "$long_Carb_Ou" ?>]).addTo(map);
	marker.bindPopup('<a href="https://cifpcarballeira.com/moodle/">Aula Virtual</a>').openPopup();	

    var circle = L.circle([42.343058, -7.870039], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
   }).addTo(map);


    var polygon = L.polygon([
		[51.509, -0.08],
		[51.503, -0.06],
		[51.51, -0.047]
	]).addTo(map).bindPopup('I am a polygon.');


</script>

</body>
</html>