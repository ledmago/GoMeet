<?php
session_start();
if(!isset($_SESSION["kadi"]))
{
	header("Location: giris/index.php");
}
?>
<html>
<head>
<meta charset='utf-8'> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<style>
body{
background:#dd4b39;
background:#2FC1BC;
margin:0;
padding:0;
font-family: 'Roboto Condensed', sans-serif;
color:#FFF;
overflow:hidden
}
.resim{
    max-width: 50%;
	    margin-top: 20px;
		margin-bottom:5px;
    
}
.orta{
height:37%;

}
.alt{
    height: 8%;
    background: rgba(30, 105, 102, 0.44);
    position: absolute;
    width: 100%;
    bottom: 0;
}
.baslik{

font-size:20px;
font-weight:700;
padding-top:5px;
width:100%;
text-align:center;
}
.yazi{

    font-size: 16px;
    font-weight: 400;
    padding-top: 10px;
    padding-left: 10px;
    padding-right: 10px;
    margin-left: auto;
    margin-right: auto;
}
.devam
{
font-family: 'Oswald', sans-serif;
font-weight:300;
    height:100%;
	text-align:right;
	padding-right:10px;
	cursor:pointer
	
}
.devam2
{
font-family: 'Oswald', sans-serif;
font-weight:300;
    height:100%;
	text-align:right;
	padding-right:10px;
	cursor:pointer
	
}
#sahne2{
display:none;
}
#yuklenme
{
    position: fixed;
	background-color:rgba(183, 41, 41, 0.85);
    width: 100%;
    height: 100%;
    top: 0;
display:none;
}
#yuklenme img
{
    margin-left: auto;
    margin-right: auto;
    display: block;
	margin-top: 10%;
	width:50%;
	max-width: 300px;
}
</style>
</head>
<body>
<div id="sahne1">
<center><img src="img/position.png" class="resim"></center>
<div class="orta">
<div class="baslik">Hoşgeldiniz</div>
<span class="yazi1" style=" font-size: 16px;
    font-weight: 400;
    padding-top: 10px;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
    display: block;
	    padding-left: 20px;
		text-align:center;
"
>Giriş Yapabilmeniz İçin GPS (Konum Belirleme) Açık Olması Gerekmektedir.</span>


</div>
<div class="alt">

<div class="devam2">ANLADIM ></div>
</div><!-- ALT BİTTİ -->

</div> <!-- SAHNE 1 -->










<div id="yuklenme">
<img src="img/loading2.gif">
<div class="baslik">Yükleniyor</div>
<div class="yazi" style="text-align:center">Yüklenmesi Biraz Zaman Alabilir</div>
</div>


<script>$(".devam").css("line-height",$(".devam").height()+"px");$(".devam2").css("line-height",$(".devam").height()+"px")</script>
<script>


$( ".devam2" ).click(function() {
 

         


 

 window.location.href='launcher.php';
});



</script>

</body>
</html>