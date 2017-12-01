<?php
include "include/db_connect.php";
include 'include/include_head.php';
include "menu.php";
// สงวนสิทธิ์เฉพาะสมาชิก

if (!isSignin()) {
	header("location: singin.php");
}

/*
if (isSignin() !== TRUE) {
header("location: singin.php");
}
 */

// รอเรียกใช้ secsion id_user
/*
$id_user       = $_SESSION['id_user'];
$conn_location = "SELECT * FROM transcript WHERE id_user = $id_user";
 */
$conn_location = "SELECT * FROM transcript WHERE id_user = 1";
$connect       = $conn->query($conn_location);
// $row           = $connect->fetch_assoc();
$id_location = "";
$count       = 0;
while ($row = $connect->fetch_assoc()) {
	// 	echo $row['id_location'], "<br>";
	if ($count == 0) {
		$id_location = $id_location.$row['id_location'];
	} else if ($count > 0) {
		$id_location = $id_location.",".$row['id_location'];
	}
	// $id_location = $id_location.$row['id_location'].",";
	$count = $count+1;
}

echo "Location is ", $id_location;
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
    var idLocation = "<?php echo $id_location;?>";
</script>
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
            var res = idLocation.split(",");
            //window.alert("array is " + alert(res[1]));
            for (i = 0; i < res.length; i++) {
              //alert(res[i])
              for ( var key in datalocation) {
              if( res[i] == datalocation[key].id_location)
              {
                var aaaa = datalocation[key].lat;
                var bbbb = datalocation[key].lng;
                // htmlText += '<div class="div-conatiner">';
                htmlText += '<p class="p-name"> id: ' + datalocation[key].id_location + '</p>';
                 htmlText += '<p class="p-loc"> สถานที่: ' + datalocation[key].name + '</p>';
                 htmlText += '<p class="p-desc"> จังหวัด: ' + datalocation[key].province + '</p>';
                 htmlText += '<p class="p-created"> lat: ' + datalocation[key].lat + '</p>';
                 htmlText += '<p class="p-uname"> lng: ' + datalocation[key].lng + '</p>';
                 htmlText += '</div>';
              }
              }
              $('body').append(htmlText);
            }
            /*
            for ( var key in datalocation) {
              if( res[key] == datalocation[key].id_location)
              {
                var aaaa = datalocation[key].lat;
                var bbbb = datalocation[key].lng;
                // htmlText += '<div class="div-conatiner">';
                htmlText += '<p class="p-name"> id: ' + datalocation[key].id_location + '</p>';
                // htmlText += '<p class="p-loc"> สถานที่: ' + datalocation[key].name + '</p>';
                // htmlText += '<p class="p-desc"> จังหวัด: ' + datalocation[key].province + '</p>';
                // htmlText += '<p class="p-created"> lat: ' + datalocation[key].lat + '</p>';
                // htmlText += '<p class="p-uname"> lng: ' + datalocation[key].lng + '</p>';
                // htmlText += '</div>';
              }
              }
              */

  </script>

  <script>
/*
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
*/

       function initMap() {
         var uluru = {lat: aaaa, lng: bbbb };
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