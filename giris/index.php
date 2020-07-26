<?php
session_start();
if(isset($_SESSION["kadi"]))
{
	
	header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<h1>GOOMeet</h1>
		
		<form id="girisform" class="form" method="get" action="girisyap.php">
			<?php
		if($_GET["hata"] != "")
		{
			echo '<button id="hatamesaj" style="position:fixed;top:0;width:100%;left:0">'.$_GET["hata"].'</button>';
			echo '<script>$("#hatamesaj").fadeIn();</script><script>setTimeout(function(){$("#hatamesaj").fadeOut();}, 2000);</script>';
		}
		?>
			<input type="text" id="kntrl1" name="kadi" placeholder="Kullanıcı Adı">
			<input type="password" id="kntrl2" name="sifre" placeholder="Şifre">
			<button type="submit" name="girisyap" id="login-button">Giriş Yap</button>
			<button type="button" style="margin-top:5px" onclick="window.location = 'kayit.php'">Kayıt ol</button>
		</form>
	</div>
	<?php
	if(isset($_POST["girisyap"]))
	{
	echo "<script>alert('sa')</script>";
	}
	?>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
