<?php
session_start();
if(!isset($_SESSION["kadi"]))
{
	header("Location: ../giris/index.php");
}
else
{
	$kor1 = $_GET["kor1"];
	$kor2 = $_GET["kor2"];
	$kadi = $_GET["kadi"];
	if($kor1 != "" && $kor2 != "")
	{
		include("giris/ayar.php");
					$query = $db->prepare("UPDATE uyeler SET
			kor1 = :yaz_kor1,
			kor2 = :yaz_kor2
			WHERE kadi = :yaz_kadi");
			$update = $query->execute(array(
				 "yaz_kor1" => $kor1,
				 "yaz_kor2" => $kor2,
				 "yaz_kadi" => $kadi
			));
		
	}
	
}



?>