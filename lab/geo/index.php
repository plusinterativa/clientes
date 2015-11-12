<!DOCTYPE:html>
<html>
<head>
  <title>Geolocation Example</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
</head>
<body>
<div id="map"></div>  
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
detectBrowser();
initGoogleMap();
getLocation();
// Detect support and request the current location.
function getLocation()
{
  if ( navigator.geolocation ) 
  { 
    navigator.geolocation.getCurrentPosition(handlePosition, handleError);
  }
  else
  {
    alert("Sorry, geolocation is not supported.");
  }
}
// Receives a successful geolocation response.
function handlePosition(pos)
{
  // Center the map on the current location
  latlng = new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude);
  map.setCenter(latlng);
  alert(latlng);
  
  // Drop a marker on the current location
  marker = new google.maps.Marker
  ({
    map: map,
    draggable: false,
    animation: google.maps.Animation.DROP,
    position: latlng
  });
}
// Receives and display geolocation request error.
function handleError(error)
{
  switch (error.code) 
  {
    case error.PERMISSION_DENIED:
      alert('Permission was denied');
      break;
    case error.POSITION_UNAVAILABLE:  
      alert('Position is currently unavailable.');
      break;
    case error.PERMISSION_DENIED_TIMEOUT:
      alert('User took to long to grant/deny permission.');
      break;
    case error.UNKNOWN_ERROR: 
      alert('An unknown error occurred.')
      break;
  }
}
// Initialize and display the google map in the element with id "map"
function initGoogleMap()
{
  options = 
  {
    zoom: 20,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("map"), options);
}
// Detect the current browser and display full screen for Android / iPhone
function detectBrowser() 
{
  var userAgent = navigator.userAgent;
  var mapDiv = document.getElementById("map");
  if (userAgent.indexOf('iPhone') != -1 || userAgent.indexOf('Android') != -1 ) 
  {
    mapDiv.style.width = '100%';
    mapDiv.style.height = '100%';
  } 
  else 
  {
    mapDiv.style.width = '600px';
    mapDiv.style.height = '800px';
  }
}
</script>
</body>
</html>