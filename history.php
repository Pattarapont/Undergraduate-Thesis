<?php
include "include/db_connect.php";
include 'include/include_head.php';
include "menu.php";
// สงวนสิทธิ์เฉพาะสมาชิก
/*
session_start();
 */
if (!isSignin()) {
	header("location: singin.php");
	die();
}

$idUser = $_SESSION['id_user'];

$conn_location = "SELECT * FROM transcript as ts
INNER JOIN location as lc on ts.id_location = lc.id_location
INNER JOIN province as pv on lc.id_province = pv.id_province
WHERE ts.id_user = '".$idUser."'";

$connect = $conn->query($conn_location);

if ($connect->num_rows > 0) {

	$location = array();

	while ($history = $connect->fetch_assoc()) {

		$location[] = $history['id_location'];

	}

}

$str = "";

foreach ($location as $value) {
	$str = $str.$value.",";

}

echo $str;

$location = $str;
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
 <script type="text/javascript">
      var idLocation = "<?php echo $location;?>";
   document.write(idLocation);
 </script>
 <title>ประวัติการท่องเที่ยว</title>
</head>
<body>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12" id="map"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <br>
          <h5>ประวัติการท่องเที่ยว</h5>
          <div class="card" style="width: 100%">
            <img alt="Card image cap" class="card-img-top" src="./images/watyai.jpg">
            <div class="card-body">
              <p><?php
echo $history['name_location']."<br>";
?> <small><?php
echo "จังหวัด"." ".$history['name_province'];
?></small></p>
              <hr>
              <p><?php
echo $history['memo_detail'];
?>
<small>

<?php echo "<br>".$history['date'];?>
              </small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    /*
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-33.863276, 151.207977),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
      */
    </script>

    <script src="./js/locations.json">
    </script>
    <script>

           function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 10,
              center: {lat: 16.744411, lng: 100.192972}
            });

            var infoWindow = new google.maps.InfoWindow;

            setMarkers(map);
          }

          function setMarkers(map) {
            var positionMarker = idLocation.split(",");
            // var positionMarker = idLocation;

            for(i = 0; i < positionMarker.length; i++){
              for(j = 0; j < datalocation.length; j++){
                if (datalocation[j].id_location == positionMarker[i]){
                  var marker = new google.maps.Marker({
                    position: {lat: datalocation[j].lat, lng: datalocation[j].lng},
                    map: map,
                  });
                }
              }
            }
          }


       </script>
       <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Q08GZVHA3-W9eZstsk3dgZRUrCoqBqU&callback=initMap">
       </script>
     </body>
     </html>