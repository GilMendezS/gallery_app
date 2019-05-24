<div class="footer py-4">
    <div class="container-fluid">
      <div class="row">
       
        <div class="col-sm-12 col-md-6 offset-md-3">
            <div id="map" style="height:250px;width:100%;"></div>
        </div>
        <div class="col-sm-12 col-md-6 offset-md-3 mt-3">
            <p class="lead">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy; {{date('Y')}} - Todos los derechos reservados - GMS
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
        </div>
      </div>
      
    </div>
  </div>

  <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        var uluru = {lat: 16.7303688, lng:  -93.0920443};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
      }
          </script>
          <!--Load the API from the specified URL
          * The async attribute allows the browser to render the page while the API loads
          * The key parameter will contain your own API key (which is not needed for this tutorial)
          * The callback parameter executes the initMap() function
          -->
          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyoUqdo34NiVz1hI6UD6VZ67RrcblBqiI&callback=initMap">
          </script>