<?php

$kadi = $_GET["kadi"];
if($kadi == "")
{
	echo "No";
}
else{


						include("ayar.php");
						$stmt = $db->prepare('SELECT * FROM uyeler WHERE kadi=?');
						$stmt->bindParam(1, $kadi, PDO::PARAM_INT);
						$stmt->execute();
						$row = $stmt->fetch(PDO::FETCH_ASSOC);

						if( ! $row)
						{
							echo "No";
						}
						else
						{
							echo "ok";
						}
	
}


?>