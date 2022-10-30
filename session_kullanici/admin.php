<?php

 

include("setting.php");

session_start();


if(!isset($_SESSION["login"])){

 

echo "Bu sayfayı görüntüleme yetkiniz yoktur.";

 

}else{

 

echo "Admin sayfası<br>";

echo "<a href=\"index.php\">Çıkış Yap</a>";

 

}

 

?>