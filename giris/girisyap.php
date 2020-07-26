<?php
session_start();
if($_GET["kadi"] == "" || $_GET["sifre"] == "")
{
	header("Location: index.php?hata=Kullanıcı Adı Veya Şifre Boş Olamaz");
}
else
{


 include("ayar.php");
			 $kadi = $_GET["kadi"];
			  $sifre = $_GET["sifre"];
			 
			 // query
		$result = $db->prepare("SELECT * FROM uyeler WHERE kadi= :hjhjhjh AND sifre= :asas");
		$result->bindParam(':hjhjhjh', $kadi);
		$result->bindParam(':asas', $sifre);
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_NUM);
		if($rows > 0) {
			$_SESSION["kadi"] = $kadi;
			header("Location: ../index.php");
		
		}
		else
		{
		 header("Location: index.php?hata=Kullanıcı Adı Veya Şifre Yanlış");
		}

}

?>