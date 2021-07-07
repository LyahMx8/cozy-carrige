<!--
                <div id="map"></div> <script> function initMap() { var map = new google.maps.Map(document.getElementById('map'), { mapTypeControl: false, center: {lat: 4.6597100, lng: -74.1117500}, zoom: 13 }); new AutocompleteDirectionsHandler(map); } function AutocompleteDirectionsHandler(map) { this.map = map; this.originPlaceId = null; this.destinationPlaceId = null; this.travelMode = 'WALKING'; var originInput = document.getElementById('origin-input'); var destinationInput = document.getElementById('destination-input'); var modeSelector = document.getElementById('mode-selector'); this.directionsService = new google.maps.DirectionsService; this.directionsDisplay = new google.maps.DirectionsRenderer; this.directionsDisplay.setMap(map); var originAutocomplete = new google.maps.places.Autocomplete( originInput, {placeIdOnly: true}); var destinationAutocomplete = new google.maps.places.Autocomplete( destinationInput, {placeIdOnly: true}); this.setupClickListener('changemode-walking', 'WALKING'); this.setupClickListener('changemode-transit', 'TRANSIT'); this.setupClickListener('changemode-driving', 'DRIVING'); this.setupPlaceChangedListener(originAutocomplete, 'ORIG'); this.setupPlaceChangedListener(destinationAutocomplete, 'DEST'); this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput); this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput); this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector); } AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) { var radioButton = document.getElementById(id); var me = this; radioButton.addEventListener('click', function() { me.travelMode = mode; me.route(); }); }; AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) { var me = this; autocomplete.bindTo('bounds', this.map); autocomplete.addListener('place_changed', function() { var place = autocomplete.getPlace(); if (!place.place_id) { window.alert("Por favor selecciona una opción de la lista."); return; } if (mode === 'ORIG') { me.originPlaceId = place.place_id; } else { me.destinationPlaceId = place.place_id; } me.route(); }); }; AutocompleteDirectionsHandler.prototype.route = function() { if (!this.originPlaceId || !this.destinationPlaceId) { return; } var me = this; this.directionsService.route({ origin: {'placeId': this.originPlaceId}, destination: {'placeId': this.destinationPlaceId}, travelMode: this.travelMode }, function(response, status) { if (status === 'OK') { me.directionsDisplay.setDirections(response); } else { window.alert('La dirección es errónea ' + status); } }); }; </script> <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJMVLdHeYL5j4F_YiWsriobIiOkClKYSg&libraries=places&callback=initMap" async defer></script> -->
                
<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" class="viajeAdd" name="viajeAdd" method="POST" enctype="application_x-www-form-urlencoded">
            <h3>Agrega un viaje</h3><br>
            <label for="descc">Agrega una descripción breve</label><br>
                <textarea name="descc" id="descc" maxlength="255" placeholder="Agrega una descripción" ></textarea><br><br>
            <label for="dia">Agrega la fecha y hora de tu cita:</label><br>
            <div class="viajFil" style="margin:0;">
                <label for="dia">Dia</label><br>
                <input type="text" name="dia" id="dia" pattern="[0-9]{2}" maxlength="2" placeholder="DD" style="width:45px;" />
            </div>
            <div class="viajFil">
                <label for="mes">Mes</label><br>
                <input type="text" name="mes" id="mes" pattern="[0-9]{2}" maxlength="2" placeholder="MM" style="width:45px;" />
            </div>
            <div class="viajFil">
                <label for="anio">Año</label><br>
                <input type="text" name="anio" id="anio" pattern="[0-9]{4}" maxlength="4" placeholder="AAAA" style="width:60px;" />
            </div>
            <div class="viajFil">
                <label for="hora">Hora</label><br>
                <input type="text" name="hora" id="hora" pattern="[0-9]{2}" maxlength="2" placeholder="HH" style="width:45px;" />
            </div>
            <div class="viajFil">
                <label for="min">Minuto</label><br>
                <input type="text" name="min" id="min" pattern="[0-9]{2}" maxlength="2" placeholder="MN" style="width:45px;" />
            </div>
            <div class="viajFil">
                <label for="time">AM/PM</label><br>
                <select name="time" id="time">
                    <option value="am">AM</option>
                    <option value="pm">PM</option>
                </select>
            </div><br><br><br><br>
                <label for="origin-input">Ingresa tu dirección en el mapa:</label>
            <br>
                <input id="origin-input" name="origin-input" class="controls" type="text" placeholder="Lugar de recogida...">
                <input id="destination-input" name="destination-input" class="controls" type="text" placeholder="Lugar de tu cita...">
                <div style="display:none;" id="mode-selector" class="controls">
                  <input type="radio" name="type" id="changemode-walking">
                  <label for="changemode-walking">Walking</label>
                  <input type="radio" name="type" id="changemode-transit">
                  <label for="changemode-transit">Transit</label>
                  <input type="radio" name="type" id="changemode-driving" checked="checked">
                  <label for="changemode-driving">Conducir</label>
                </div>
            <button type="reset" style="background:#7e7e7e;border-bottom:2px solid #545454;" onclick="this.form.reset()">Reiniciar</button>
            <button type="submit" id="nwCard" value="nwCard" style="background:#22D3F5;border-bottom:2px solid #008DA8;" onclick="return niuCard(this.form, this.form.descc, this.form.dia, this.form.mes, this.form.anio, this.form.hora, this.form.min);">Enviar</button>
        <button class="nwCard" onclick="return niuCard(this.form, this.form.descc, this.form.dia, this.form.mes, this.form.anio, this.form.hora, this.form.min);">dffd</button>
    </form>
    
   
  <form method="post" class="viajeAdd">
            <h3>Agrega un viaje</h3>
            <label for="descripcion">Agrega una descripción breve</label>
            <textarea name="descripcion" id="descripcion" maxlength="255" placeholder="Agrega una descripción" required style="max-width:100%;width:100%;min-height:80px"></textarea><br>
            <p>Agrega la fecha de tu cita</p>
            <div class="viajFil">
                <label for="dia">Dia</label><br><input type="text" id="dia" name="dia" pattern="[0-9]{2}" maxlength="2" placeholder="MM" required style="width:45px;">
            </div>
            <div class="viajFil">
                <label for="mes">Mes</label><br><input type="text" id="mes" name="mes" pattern="[0-9]{2}" maxlength="2" placeholder="MM" required style="width:45px;">
            </div>
            <div class="viajFil">
                <label for="anio">Año</label><br><input type="text" id="anio" name="anio" pattern="[0-9]{4}" maxlength="4" placeholder="AAAA" required style="width:60px;">
            </div>
            <div class="viajFil">
                <label for="hora">Hora</label><br><input type="text" id="hora" name="hora" pattern="[0-9]{2}" maxlength="2" placeholder="HH" required style="width:45px;">
            </div>
            <div class="viajFil">
                <label for="minuto">Minuto</label><br><input type="text" id="minuto" name="minuto" pattern="[0-9]{2}" maxlength="2" placeholder="MN" required style="width:45px;">
            </div>
            <div class="viajFil">
                <label for="horario">AM/PM</label><br>
                <select name="horario" id="horario">
                    <option value="am">AM</option>
                    <option value="pm">PM</option>
                </select>
            </div><br><br><br>
            <button type="reset" style="color:#008DA8;width:100px;" id="delete" value="Reset" onclick="this.form.reset()">Reiniciar</button>
            <button type="submit" style="background:#22D3F5;border-bottom:2px solid #008DA8;" id="send_card" value="send_card" onclick="card()">Enviar</button>
        </form>