<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=graffien_goom;charset=utf8", "graffien_goom", "firat934");
} catch ( PDOException $e ){
     print $e->getMessage();
}




?>