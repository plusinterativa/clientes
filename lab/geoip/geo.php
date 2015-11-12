<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();

// create a variable for the country code
$var_country_code = $geoplugin->countryCode;
$var_longitude = $geoplugin->longitude;
$var_latitude = $geoplugin->latitude;
// redirect based on country code:
/*if ($var_country_code == "BR") {
header('Location: http://www.tibia.com/');
}
else if ($var_country_code == "NL") {
header('Location: http://nl.wikipedia.org/');
}
else {
header('Location: http://en.wikipedia.org/');
}*/
?>
<h1> Pais:<?php echo $var_country_code;?></h1> 
<h1> Longitude:<?php echo $var_longitude;?></h1> 
<h1> Latitude:<?php echo $var_latitude;?></h1> 

