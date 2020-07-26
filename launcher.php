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
  var infoWindow = new google.maps.InfoWindow({map: map});

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

init = "dolu";
	var kadiyaz = '<?php echo $_SESSION["kadi"]; ?>';
	 $.get("konumyaz.php",{"kor1":position.coords.latitude,"kor2":position.coords.longitude,"kadi":kadiyaz},function(veri){}); // Bitti

      infoWindow.setPosition(pos);
      infoWindow.setContent('Konumunuz Algılandı');
	  window.location = '<?php if(isset($_GET["do"])){if($_GET["do"] == "newkayit"){echo "launcher/avatarguncelle.php";}else{echo "launcher/index.php";}}else{echo "launcher/index.php";}?>';
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
	window.location = '<?php if(isset($_GET["do"])){if($_GET["do"] == "newkayit"){echo "error.php?do=newkayit";}else{echo "error.php";}}else{echo "error.php";}?>';	
	}
  
}, 5000);


}
setTimeout(function(){
	if(init == "bos")
	{
	window.location = '<?php if(isset($_GET["do"])){if($_GET["do"] == "newkayit"){echo "error.php?do=newkayit";}else{echo "error.php";}}else{echo "error.php";}?>';	
	}
  
}, 10000);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKvo0-rlrpHvtQjfFAl6zJa652AGqKEH0&signed_in=true&callback=initMap"
        async defer>
    </script>
	<div id="yuklenme" style="
	position:fixed;
	z-index:99999;
    opacity: 1;
    background-color: #C1AF2F;
	width:100%;
	height:100%;
	top:0;
	"
	>
	<div class="orta">
	<img src="img/loading.gif" style="
	    margin-top: -210px;
    margin-bottom: -180px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    width: 100%;
	max-width:350px;
	">
<span class="yazi1" style=" font-size: 16px;
    font-weight: 400;
    padding-top: 10px;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
    display: block;
	    padding-left: 20px;
		text-align:center;
			color:#FFF;
			font-family:Oswald;
"
>Konumunuz Alınıyor.<br>Lütfen Bekleyin</span>


</div>
	
	</div>
	<style>
	.orta{
height:37%;

}
.baslik{

font-size:20px;
font-weight:700;
padding-top:5px;
width:100%;
text-align:center;
color:#FFF;
}
.yazi{

    font-size: 16px;
    font-weight: 400;
    padding-top: 10px;
    padding-left: 10px;
    padding-right: 10px;
    margin-left: auto;
    margin-right: auto;
	color:#FFF;
}
	
	</style>
  </body>
</html>