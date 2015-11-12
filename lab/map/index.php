<!DOCTYPE:html>
<html>
<head>
<meta http-equiv="refresh" content="1">
  <title>Mapping</title>
  <style type="text/css">
  #mapie{background:red;}
  </style>
</head>
<body>

<div id="map"></div>
<div id="mapie"></div>
<!--
<?php
$jsondata=file_get_contents('http://maps.google.com/maps/api/geocode/json?address=house+16+road+7+Baridhara+Dhaka+Bangladesh&sensor=false&#8217');

$output= json_decode($jsondata);

$lat = $output->results[0]->geometry->location->lat;
$long = $output->results[0]->geometry->location->lng;
?>

<div class="teste">
<?php echo $lat . '<br/>' . $long;?>
	
</div>
-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
/*
$(function(){

$.ajax({
    url: "geo.php",
    type: 'POST',
    success:function(data) {
        $('.teste').html(data);
    }
});

setInterval(function(){
    $.ajax({
        url: "geo.php",
        type: 'POST',
        success:function(data) {
            $('.teste').html(data);
        }
    });
}, 100);
*/

</script>
<script type="text/javascript">
$(document).ready(function() {
		
	//setInterval(function(){
    navigator.geolocation.getCurrentPosition(onPositionUpdate);
	//},500);
});


function onPositionUpdate(position) {
	//setInterval(function(){
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;
    $('#map').html(lat+'<br/>'+lon);

    tempX = event.clientX + (document.documentElement.scrollLeft || document.body.scrollLeft);
    tempY = event.clientY + (document.documentElement.scrollTop || document.body.scrollTop);
    $('#mapie').html(tempX+'<br/>'+tempY);
	
    //},500);
}
</script>
</body>
</html>