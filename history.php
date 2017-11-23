<?php
include 'include/include_head.php';
?>
<!DOCTYPE html>
<html>
<head>

  <style>
   /*    html,body{
         height: 100%;
         width: 100%;
         margin: 0;
         padding: 0;
       }*/
        #map {
         height: 85%;
         width: 100%;
         /*background-color: grey;*/
        }
/*.map-icon-label .map-icon {
  font-size: 24px;
  color: red;
  line-height: 48px;
  text-align: center;
  white-space: nowrap;
}*/
  </style>
  <title></title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12" id="map"></div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        2 of 3
        <span class="map-icon map-icon-embassy"></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quia, aperiam aut tempora distinctio repudiandae adipisci facilis, et in natus fugiat nam, molestias nihil maxime ut rerum recusandae iusto nostrum.</p>

      </div>
    </div>
  </div>
  <script src="./js/locations.json"></script>
  <script>
            var htmlText = '';

            for ( var key in datalocation ) {
                htmlText += '<div class="div-conatiner">';
                htmlText += '<p class="p-name"> id: ' + datalocation[key].id_location + '</p>';
                htmlText += '<p class="p-loc"> สถานที่: ' + datalocation[key].name + '</p>';
                htmlText += '<p class="p-desc"> จังหวัด: ' + datalocation[key].province + '</p>';
                htmlText += '<p class="p-created"> lat: ' + datalocation[key].lat + '</p>';
                htmlText += '<p class="p-uname"> lng: ' + datalocation[key].lng + '</p>';
                htmlText += '</div>';
            }

            $('body').append(htmlText);
  </script>

  <script>

$.getJSON("/js/locations.json", function(json1) {
    $.each(json1, function(key, data) {
        var latLng = new google.maps.LatLng(data.lat, data.lng);
        // Creating a marker and putting it on the map
        var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            title: data.title
        });
    });
});



       function initMap() {
         var uluru = {lat: 16.833942, lng: 100.262228 };
         // var uluru = {lat: 16.789298, lng: 101.050892};
         // 17.8806018,101.4711614,7z
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 7,
           center: uluru
         });
          // var iconBase = './images/flag.png';
         var marker = new google.maps.Marker({
           position: uluru,
           map: map,
           // icon: iconBase
         });

       }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Q08GZVHA3-W9eZstsk3dgZRUrCoqBqU&callback=initMap">
  </script>
</body>
</html>