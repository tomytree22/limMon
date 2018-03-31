<!-- Nombre Field -->
<div class="form-group col-sm-6">
  <div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control','rows'=>5]) !!}
  </div>

  <div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!!form::label('latitud','Latitud:')!!}
    {!!form::text('latitud',null,['class'=>'form-control','readonly'])!!}
  </div>
  <div class="form-group">
    {!!form::label('longitud','Longitud:')!!}
    {!!form::text('longitud',null,['class'=>'form-control','readonly'])!!}
  </div>

</div>

<div class="form-group col-sm-6">
  <div class="form-group">
    {!! Form::label('direccion', 'Marque su ubicacion en el mapa:') !!}
    <input id="searchTextField" class='form-control' placeholder="Buscar en Google Maps">
    <div id="results"></div>
    <div id="contenedor" style="position:relative;width:100%;height:377px;">
      <div id="map" style="width: 100%; height: 100%;"></div>
    </div>

  </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
  {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
  <a href="{!! route('sucursals.index') !!}" class="btn btn-default">Cancel</a>
</div>
@push('PilaScripts')
<script type="text/javascript">
  $(document).ready(function() {
    var map;
    var marker;

    function placeMarker(location) {
      if (marker) {
        marker.setPosition(location);
      } else {
        marker = new google.maps.Marker({
          position: location,
          map: map,
          draggable: true
        });
      }
    }

    function initialize() {
      var centerPosition = new google.maps.LatLng(19.3910038, -99.2836973);
      var options = {
        zoom: 6,
        center: centerPosition,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map($('#map')[0], options);
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            map.setCenter(pos);
            placeMarker(pos);
            map.setZoom(14);

          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

      var input = document.getElementById('searchTextField');
      var autocomplete = new google.maps.places.Autocomplete(input, {
        types: ["geocode"]
      });
      var geocoder = new google.maps.Geocoder;

      autocomplete.bindTo('bounds', map);
      var infowindow = new google.maps.InfoWindow();

      google.maps.event.addListener(autocomplete, 'place_changed', function(event) {
        infowindow.close();
        var place = autocomplete.getPlace();
        if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
        } else {
          map.setCenter(place.geometry.location);
          map.setZoom(17);
        }

      });
      google.maps.event.addListener(map, 'click', function(evt) {
        placeMarker(evt.latLng);
        $('#latitud').val(evt.latLng.lat().toFixed(6));
        $('#longitud').val(evt.latLng.lng().toFixed(6));
        geocodeLatLng(geocoder, map, infowindow);
      });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
  });
</script>
@endpush
