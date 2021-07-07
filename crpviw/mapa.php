<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="UTF-8">
		<title>Dashboard - CozyCarrige</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font/style.css">
		<link rel="stylesheet" href="css/animate.css">
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<script type="text/javascript" src="js/js.js"></script>
</head>
<body>
		<h1>Mapa de prueba</h1>
		<header class="cabecera">
				<ul id="bar">
						<li class="bt-menu"><span class="icon-menu"></span></li>
						<a href="http://localhost/cozycarrige"><img class="logo" src="image/icon/iso.png" alt="CozyCarrige"></a>
						<img class="perfil" src="image/post/marc.jpg" alt="Marc Suquerberg">
						<ul class="children">
								<li><a href="">Ajustes</a></li>
								<li><a href="">Cerrar Sesión</a></li>
						</ul>
				</ul>
				<li><a href="#bar" class="top"><span class="icon-circle-up"></span></a></li>
				<ul id="navBar">
						<li><a class="active" href=""><span class="icon-home"></span><p>Inicio</p></a></li>
						<li><a href=""><span class="icon-search"></span><p>Buscar</p></a></li>
						<li><a href=""><span class="icon-location"></span><p>Mapa</p></a></li>
						<li><a href=""><span class="icon-calendar"></span><p>Agenda</p></a></li>
						<li><a href=""><span class="icon-user"></span><p>Mi Perfil</p></a></li>
				</ul>
		</header>
			 <div style="width: 600px;">
				 <div id="map" style="width: 280px; height: 400px; float: left;"></div> 
				 <div id="panel" style="width: 300px; float: right;"></div> 
			 </div>
			 
			 <script type="text/javascript"> 
		
				 var directionsService = new google.maps.DirectionsService();
				 var directionsDisplay = new google.maps.DirectionsRenderer();
		
				 var map = new google.maps.Map(document.getElementById('map'), {
					 zoom:7,
					 mapTypeId: google.maps.MapTypeId.ROADMAP
				 });
				
				 directionsDisplay.setMap(map);
				 directionsDisplay.setPanel(document.getElementById('panel'));
		
				 var request = {
					 origin: 'Chicago', 
					 destination: 'New York',
					 travelMode: google.maps.DirectionsTravelMode.DRIVING
				 };
		
				 directionsService.route(request, function(response, status) {
					 if (status == google.maps.DirectionsStatus.OK) {
						 directionsDisplay.setDirections(response);
					 }
				 });
			 </script> 
</body>
</html>