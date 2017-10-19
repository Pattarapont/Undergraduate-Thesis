<?php
define("JSON_CONSTANT_FILE", file_get_contents("include/locations.json"));

function getLocation($key) {
	$nameloca     = name;
	$provinceloca = province;
	$latloca      = lat;
	$lngloca      = lng;
	$json_string  = json_decode(JSON_FILE, true);

	return $json_string[$key][$nameloca][$provinceloca][$latloca][$lngloca];
}
// echo getLocation($key);

?>