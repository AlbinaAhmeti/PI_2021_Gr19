<!DOCTYPE hmtl>
<hmtl lang ="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-widith,
initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content ="ie=edge">

<title>My Google Map</title>
<style>
  #map{
    height:400px;
    width:100%;
  }
</style>
</head>
<body>
  <h1>Lokacioni im</h1>
<div id="map"></div>
<p>Kliko butonin per te pare lokacionin</p>

<button onclick="getLocation()">Kliko</button>

<p id="demo"></p>
  <script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}


    function initMap(){
    var  options={
      zoom:8,
      center:{lat:42.50618379,lng: 21.499145}
      

    }
    var map= new google.maps.Map(document.getElementById('map'),options);
//NEW MARKER 

var marker= new google.maps.Marker({
  position:{lat:42.667542,lng:21.166191},
  map: map
});



    }
  </script>

<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1cWkOcJeHWt8wfuTEuCUIVH0TmYmwlyQ&callback=initMap&libraries=&v=weekly"
     
      defer
    ></script>
</body>
</html>