<?php
$jsondata=file_get_contents('http://maps.google.com/maps/api/geocode/json?address=house+16+road+7+Baridhara+Dhaka+Bangladesh&sensor=false&#8217');

$output= json_decode($jsondata);

$lat = $output->results[0]->geometry->location->lat;
$long = $output->results[0]->geometry->location->lng;

echo $lat . '<br/>' . $long;
?>