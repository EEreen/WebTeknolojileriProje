<?php
include("bilgiIcerigi.php");
session_start();
ob_start();
if(($_POST["KullaniciAdi"]==$user) and ($_POST["Sifre"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:adminstrator.php");
}else{
echo "KULLANICI ADINI VEYA ŞİFREYİ YANLIŞ GİRDİNİZ.<br><br>";
echo "Login sayfasına yönlendiriliyorsunuz...";
header("Refresh: 2; url=login.html");
}
ob_end_flush();
?>