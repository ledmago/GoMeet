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
    <style>
	.alinmis{
		color:red;
		 background-image: url("css/caution7.png");
    background-repeat: no-repeat;
    background-position-x: right;
    background-position-y: center;
    background-size: 22px 22px;
    background-origin: content-box;
		
	}
	.alabilir
	{
		color:green;
		 background-image: url("css/checked21.png");
    background-repeat: no-repeat;
    background-position-x: right;
    background-position-y: center;
    background-size: 22px 22px;
    background-origin: content-box;
	}
	.sec{
		    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: 0;
    border: 1px solid rgba(255, 255, 255, 0.4);
    background-color: rgba(255, 255, 255, 0.2);
    width: 250px;
    border-radius: 3px;
    padding: 10px 15px;
    margin: 0 auto 10px auto;
    display: block;
    text-align: center;
    font-size: 18px;
    color: white;
    -webkit-transition-duration: 0.25s;
    transition-duration: 0.25s;
    font-weight: 300;
	}
	.sec2{
    -webkit-appearance: none;
    -moz-appearance: none;
    outline: 0;
    background-color: rgba(255, 255, 255, 0.2);
    text-align: center;
    font-size: 18px;
    color: white;
    -webkit-transition-duration: 0.25s;
    transition-duration: 0.25s;
    font-weight: 300;
    padding: 3px 7px 4px 14px;
    border: 0px;
	}
	.sec2 option{
		    color: #52CBA4;
	}
	</style>
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<h1>Kayıt Ol</h1>
		
		<form class="form" method="post">
			<?php
		if($_GET["hata"] != "")
		{
			echo '<button id="hatamesaj" style="position:fixed;top:0;width:100%;left:0">'.$_GET["hata"].'</button>';
			echo '<script>$("#hatamesaj").fadeIn();</script><script>setTimeout(function(){$("#hatamesaj").fadeOut();}, 2000);</script>';
		}
		?>
		
		
			<input type="text" id="kadi" name="kadi" placeholder="Kullanıcı Adı" required>
			<input type="password"  name="sifre" placeholder="Şifre" required>
			<input type="text" name="isim" placeholder="İsim Soyisim" required>
			<div class="sec">
			
			    <div style="float: left;font-weight: 300;">Cinsiyet</div>
			
			
			<select name="cinsiyet" class="sec2" required>
			<option value="Erkek">Erkek</option>
			<option value="Bayan">Bayan</option>
			</option>
			</select>
			</div>
			<input type="submit" name="girisyap" value="Kayıt Ol">
		</form>
	</div>
	<?php
	if(isset($_POST["girisyap"]))
	{
		
		$kadi = $_POST["kadi"];
		$sifre = $_POST["sifre"];
		$cinsiyet = $_POST["cinsiyet"];
		$isim = $_POST["isim"];
		if($cinsiyet == "Erkek")
		{
			$rastgele = rand(1,3);
		}
		else{
			$rastgele = rand(4,6);
		}
		$avatar = "img/default_avatar/".$rastgele.".png";
		
	if($kadi != "" && $sifre != "" && $cinsiyet != "")
	{											
												include("ayar.php");
												$query = $db->prepare("INSERT INTO uyeler SET
												kadi = ?,
												sifre = ?,
												cinsiyet = ?,
												isim = ?,
												avatar = ?");
												$insert = $query->execute(array(
													$kadi,$sifre,$cinsiyet,$isim,$avatar
												));
												if ( $insert ){
													
													
													$_SESSION["kadi"] = $kadi;
													echo '<meta http-equiv="refresh" content="0;URL=../launcher.php?do=newkayit">';
												   
												}
												
	}
	
	
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

    
    <script>

	function alinmis()
	{
		$("#kadi").removeClass("alabilir");
		$("#kadi").addClass("alinmis");
		
		   
	}
	function alabilir()
	{
		$("#kadi").removeClass("alinmis");
		$("#kadi").addClass("alabilir");  
	}
	
	$( "#kadi" ).change(function() {
  
						  $.get("kadikontrol.php",{"kadi":$("#kadi").val()},function(veri){
								 if(veri == "No")
								 {
									 alabilir();
								 }
								 else if(veri == "NOPE")
								 {
									 uygundegil();
								 }
								 else
								 {
									 alinmis();
								 }
									
								 }) // Eğer Düzenlediyse
  
  
});

	
	
	
	</script>
    
  </body>
</html>
