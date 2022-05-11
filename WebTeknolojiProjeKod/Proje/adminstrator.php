<?php
include("bilgiIcerigi.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "HOŞ GELDİNİZ B211210024<br><br>";
echo "<a href=logout.php>Siteye geri dön.</a>";
}
?>