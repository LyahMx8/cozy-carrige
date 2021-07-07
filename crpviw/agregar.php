<!DOCTYPE html>
<html lang="es">
<head>
	<?php 
		require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
		require_once((SERV."/crpconx/functions.php"));
		sec_session_start();
		if (login_check($mysqli) == true) :
		require_once((SERV."/crpinclude/addcard.php"));
		include((SERV."/crpviw/black/asst/head.php"));
	?> 
	<title>Dashboard - CozyCarrige</title>
</head>
<body>
	<header class="cabecera">
		<?php include((SERV."/crpviw/black/asst/menu.php")); ?>
	</header>
	<section class="cuerpo">
		<form method="post" class="viajeAdd">
			<?php
				if(!empty($error_msn)){
					echo $error_msn;
				}
			?>
			<h3>Agrega un viaje</h3>
			<label for="descc">Agrega una descripción breve</label>
			<textarea name="descc" id="descc" maxlength="255" placeholder="Agrega una descripción" required style="max-width:100%;min-width:100%;min-height:80px"></textarea><br><br>
			<p>Agrega la fecha de tu cita, si es de un solo dígito, por favor agrega el cero</p>
			<div class="viajFil">
				<label for="dia">Dia</label><br><input type="text" id="dia" name="dia" pattern="[0-9]{2}" maxlength="2" placeholder="00" required style="width:45px;">
			</div>
			<div class="viajFil">
				<label for="mes">Mes</label><br><input type="text" id="mes" name="mes" pattern="[0-9]{2}" maxlength="2" placeholder="00" required style="width:45px;">
			</div>
			<div class="viajFil">
				<label for="anio">Año</label><br><input type="text" id="anio" name="anio" pattern="[0-9]{4}" maxlength="4" placeholder="0000" required style="width:60px;">
			</div>
			<div class="viajFil">
				<label for="hora">Hora</label><br><input type="text" id="hora" name="hora" pattern="[0-9]{2}" maxlength="2" placeholder="00" required style="width:45px;">
			</div>
			<div class="viajFil">
				<label for="minuto">Minuto</label><br><input type="text" id="minuto" name="minuto" pattern="[0-9]{2}" maxlength="2" placeholder="00" required style="width:45px;">
			</div>
			<div class="viajFil">
				<label for="horario">AM/PM</label><br>
				<select name="horario" id="horario">
					<option value="am">AM</option>
					<option value="pm">PM</option>
				</select>
			</div><br><br>
			<div class="direccion">
				<input type="text" id="origen" name="origen" placeholder="Lugar de recogida..." required><br>
				<input type="text" id="destino" name="destino" placeholder="Lugar de tu cita..." required>
			</div>
			<div style="display:none;" id="mode-selector" class="controls">
				<input type="radio" name="type" id="changemode-driving" checked="checked">
				<label for="changemode-driving">Conducir</label>
			</div>
			<div id="map"></div> 
			<script> 
				function initMap() {
					var map = new google.maps.Map(document.getElementById('map'), { 
						mapTypeControl: false, center: {lat: 4.6597100, lng: -74.1117500}, zoom: 13 
					}); 
					new AutocompleteDirectionsHandler(map);
				}
				var originInput = document.getElementById('origen');
				var destinationInput = document.getElementById('destino');
				function AutocompleteDirectionsHandler(map) {
					this.map = map; this.originPlaceId = null; this.destinationPlaceId = null; this.travelMode = 'DRIVING';
					this.directionsService = new google.maps.DirectionsService; 
					this.directionsDisplay = new google.maps.DirectionsRenderer; 
					this.directionsDisplay.setMap(map);
					var originAutocomplete = new google.maps.places.Autocomplete( originInput, {placeIdOnly: true}); 
					var destinationAutocomplete = new google.maps.places.Autocomplete( destinationInput, {placeIdOnly: true});
					this.setupClickListener('changemode-driving', 'DRIVING'); 
					this.setupPlaceChangedListener(originAutocomplete, 'ORIG'); 
					this.setupPlaceChangedListener(destinationAutocomplete, 'DEST'); 
					this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput); 
					this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
				} AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
					var radioButton = document.getElementById(id); 
					var me = this; 
					radioButton.addEventListener('click', function() { 
						me.travelMode = mode; me.route(); 
					}); 
				};
				AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) { 
					var me = this; 
					autocomplete.bindTo('bounds', this.map); 
					autocomplete.addListener('place_changed', function() { 
						var place = autocomplete.getPlace(); 
						if (!place.place_id) { 
							window.alert("Por favor selecciona una opción de la lista."); return; 
						} 
						if (mode === 'ORIG') { 
							me.originPlaceId = place.place_id; 
						} else { 
							me.destinationPlaceId = place.place_id; 
						} me.route(); 
					}); 
				}; 
				AutocompleteDirectionsHandler.prototype.route = function() { 
					if (!this.originPlaceId || !this.destinationPlaceId) { return; } 
					var me = this; 
					this.directionsService.route({ 
						origin: {'placeId': this.originPlaceId}, destination: {'placeId': this.destinationPlaceId}, travelMode: this.travelMode 
					}, function(response, status) { 
						if (status === 'OK') { 
							me.directionsDisplay.setDirections(response); 
						} else { 
							window.alert('La dirección es errónea ' + status); 
						} 
					}); 
				};
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJMVLdHeYL5j4F_YiWsriobIiOkClKYSg&libraries=places&callback=initMap" async defer></script>

			<button type="reset" id="delete" value="Reset" onclick="this.form.reset()" style="background:#7e7e7e;border-bottom:2px solid #545454;">Reiniciar</button>
			<button type="submit" id="send_card" value="send_card" style="background:#22D3F5;border-bottom:2px solid #008DA8;">Enviar</button>
		</form>
	</section>
	<br><br>
	<?php else:
		header('Location: '.SERV.'/index');
		endif;
	?>
</body>
</html>