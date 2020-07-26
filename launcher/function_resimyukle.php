<?php
include("header.php");
if(isset($_POST))
{
	if ($_FILES["resim"]["size"]<1024*1024*6){//Dosya boyutu 1Mb tan az olsun
			$dosya_adi=$_FILES["resim"]["name"];
			//Dosyaya yeni bir isim oluşturuluyor
			$uret=array("as","rt","ty","yu","fg");
			$uzanti=substr($dosya_adi,-4,4);
			$sayi_tut=$_SESSION["kadi"];
			$yeni_ad="avatarlar/".$sayi_tut.$uzanti;
			//Dosya yeni adıyla dosyalar klasörüne kaydedilecek
			if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
				include("../giris/ayar.php");
				$kadi_sad = $_SESSION["kadi"];
				$query = $db->prepare("UPDATE uyeler SET
avatar = :avatarisim
WHERE kadi = :sessionyaz");
$update = $query->execute(array(
     "avatarisim" => $yeni_ad,
     "sessionyaz" => $kadi_sad
));
				
				echo '<meta http-equiv="refresh" content="0;URL=avatarguncelle.php">';
			}else{
			echo "Yüklenemedi";
			}
		}
	}else{			
		echo 'Dosya boyutu 1 Mb ı geçemez!';
	}


?>