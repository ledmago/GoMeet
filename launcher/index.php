<?php include("header.php"); ?>
<p class="baslik">Yakınmda</p><hr style="margin: 0px;padding: 0;margin-top: 17px;border-top: 2px solid rgb(202, 153, 11);">
<div id="rowlar">
<div id="circle" class="daire"><div id="gosterge">999+</div><div class="daireyazi" style="color: #D0351C;">Kişiler</div></div>
<div id="circle2" class="daire"><div id="gosterge">10</div><div class="daireyazi" style="color: #49D72E;">Arkadaşlar</div></div>
<div id="circle3" class="daire"><div id="gosterge">50</div><div class="daireyazi" style="color: #B121B0;">Etkinlikler</div></div>
<div id="circle4" class="daire"><div id="gosterge">5</div><div class="daireyazi" style="color: #2C56B3;">Davet Edilen</div></div>
</div>


<p class="baslik2" style="color: purple;">Sohbet</p><hr style="margin: 0px;padding: 0;margin-top: 17px;border-top: 2px solid purple;    margin-bottom: 11px;">

<div id="mesajblok">
<div id="mesajprofil" style="background-color:rgb(255, 193, 7)"><img class="profilicon" src="img/icon1.png"></div>
<div id="mesajicerik">
<h3>Mesaj Başlığı</h3>
<p><span>Fırat</span> : Kes La </p>
</div>
</div><!--Mesaj Blok -->

<div id="mesajblok">
<div id="mesajprofil" style="background-color:rgb(255, 193, 7)"><img class="profilicon" src="img/icon1.png"></div>
<div id="mesajicerik">
<h3>Mesaj Başlığı</h3>
<p><span>Fırat</span> : Kes La </p>
</div>
</div><!--Mesaj Blok -->

<div id="mesajblok">
<div id="mesajprofil" style="background-color:rgb(255, 193, 7)"><img class="profilicon" src="img/icon1.png"></div>
<div id="mesajicerik">
<h3>Mesaj Başlığı</h3>
<p><span>Fırat</span> : Kes La </p>
</div>
</div><!--Mesaj Blok -->






</div><!-- Content Container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/circle-progress.js"></script> 
	<script>
    $('#circle').circleProgress({
        value: 1,
        size: 50,
		lineCap: 'round',
        fill: {
            gradient: ['#D0C31C', '#D02E1C']
        }
   });

   $('.circle2').circleProgress({
        value: 1,
        size: 50,
		lineCap: 'round',
        fill: {
            gradient: ['#D0C31C', '#D02E1C']
        }
   });
   
	$('#circle2').circleProgress({
        value: 1,
        size: 50,
		lineCap: 'round',
        fill: {
            gradient: ['#2195F2', '#4AD828']
        }
   });
   	$('#circle3').circleProgress({
        value: 1,
        size: 50,
		lineCap: 'round',
        fill: {
            gradient: ['#7321F2', '#F2216D']
        }
   });
   	$('#circle4').circleProgress({
        value: 1,
        size: 50,
		lineCap: 'round',
        fill: {
            gradient: ['#B7B428', '#2853B7']
        }
   });
	
</script>
<?php include("footer.php"); ?>