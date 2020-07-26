<?php
session_start();
if(!isset($_SESSION["kadi"]))
{
	header("Location: ../giris/index.php");
}
else
{					
uyekontrol();
}// isset Son

function uyekontrol()
{
	include("../giris/ayar.php");
					$id = $_SESSION["kadi"];
				$query2 = $db->query("SELECT * FROM uyeler WHERE kadi = '{$id}'")->fetch(PDO::FETCH_ASSOC);
				if (!$query2)
				{
					header("Location: ../giris/cikis.php");
				}
}

function uye_veri_cek($stun)
{
$session_kadi = $_SESSION["kadi"];
include("../giris/ayar.php");
$query = $db->query("SELECT * FROM uyeler WHERE kadi = '{$session_kadi}'")->fetch(PDO::FETCH_ASSOC);
return $query[$stun];
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/genel.css">
<link href='https://fonts.googleapis.com/css?family=Exo:600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="content-containter">
  <nav id="navbars" class="navbar navbar-default navbar-fixed-top"> 

    <div>
<img src="img/been.png" class="logo">

<div id="counter-sag">
<div id="menu-icon" onclick="window.location = 'index.php'"><center><i class="fa fa-home iconlar"></i></center><div class="menu-yazi"><a>Launcher</a></div></div>
<div id="menu-icon" onclick="window.location = 'harita.php'"><center><i class="fa fa-map iconlar" style="font-size: 22px;margin-top: 6px;"></i></center><div class="menu-yazi"><a>Harita</a></div></div>
<div id="menu-icon" onclick="window.location = 'ara.php'"><center><i class="fa fa-search iconlar"></i></center><div class="menu-yazi"><a>Ara</a></div></div>
<div id="menu-icon" onclick="window.location = 'digermenu.php'"><center><i class="fa fa-ellipsis-h iconlar"></i></center><div class="menu-yazi"><a>Daha</a></div></div>

</div><!-- Counter Sað -->
	
    </div>

</nav>