<?php
include '../include/include_head.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
</head>
<body>

</body>

<script src="locations.json"></script>
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
</html>

