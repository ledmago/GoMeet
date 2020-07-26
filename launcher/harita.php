<?php
session_start();
if(!isset($_SESSION["kadi"]))
{
	header("Location: giris/index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
	
var init = "bos";
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 16
  });
  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+
      '</div>'+
      '</div>';
	  
  var infoWindow = new google.maps.InfoWindow({map: map});
  var infowindow = new google.maps.InfoWindow({
    content: contentString,
    maxWidth: 200
  });

  
  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

init = "dolu";
	 	 console.log(position.coords.latitude + " " + position.coords.longitude); // Bitti
		 
		  var test2 = {lat: position.coords.latitude+0.0001,lng: position.coords.longitude+0.0001};
  var marker = new google.maps.Marker({
    position: test2,
    map: map,
    title: 'Uluru (Ayers Rock)'
	//, icon: 'images/beachflag.png';
  });
  
   var marker2 = new google.maps.Marker({
    position: pos,
    map: map,
    title: 'Uluru (Ayers Rock)'
	//, icon: 'images/beachflag.png';
  });
  
   marker2.addListener('click', function() {
    infowindow.open(map, marker2);
  });
		 
		 
      infoWindow.setPosition(pos);
      infoWindow.setContent('Siz');
	   map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	
	setTimeout(function(){
	if(init == "bos")
	{
	}
  
}, 5000);


}
setTimeout(function(){
	if(init == "bos")
	{
		}
  
}, 10000);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKvo0-rlrpHvtQjfFAl6zJa652AGqKEH0&signed_in=true&callback=initMap"
        async defer>
    </script>

  </body>
</html>