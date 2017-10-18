<!DOCTYPE html>
<html>
  <head>
    <style>
      html,body{
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
      }
       #map {
        height: 100%;
        width: 50%;
        /*background-color: grey;*/
       }
    </style>
  </head>
  <body>

    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 17.8806018, lng: 101.4711614};
        // 17.8806018,101.4711614,7z
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: uluru
        });
        /*
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
        */
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Q08GZVHA3-W9eZstsk3dgZRUrCoqBqU&callback=initMap">
    </script>
  </body>
</html>