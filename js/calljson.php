<?php
include '../include/include_head.php';
define("JSON_FILE", file_get_contents("../include/locations.json"));
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

<script src="locations.js"></script>
<script>
  var htmlText = '';

            for ( var key in datalocation ) {
                htmlText += '<div class="div-conatiner">';
                htmlText += '<p class="p-name"> Name: ' + datalocation[key].name + '</p>';
                htmlText += '<p class="p-loc"> Location: ' + datalocation[key].province + '</p>';
                htmlText += '<p class="p-desc"> Description: ' + datalocation[key].lat + '</p>';
                htmlText += '<p class="p-created"> Created by: ' + datalocation[key].lng + '</p>';
                // htmlText += '<p class="p-uname"> Username: ' + datalocation[key].users_name + '</p>';
                htmlText += '</div>';
            }

            $('body').append(htmlText);
</script>
</html>

