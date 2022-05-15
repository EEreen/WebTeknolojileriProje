<html>
<body>

Ad: <?php echo $_POST["Ad"]; ?><br> 
Soyad: <?php echo $_POST["Soyad"]; ?><br>
Email: <?php echo $_POST["Eposta"]; ?><br>
Cinsiyet:<?php
echo $_POST['cinsiyet']; ?><br>
Doğum tarihi: <?php 
$new_date = date('Y-m-d', strtotime($_POST['dtarihi']));
echo $new_date;
?> <br>

<?php

$Ulke = filter_input(INPUT_POST, 'Ulke');

?>

Ülke:<?php if ($Ulke) : ?>
     <span style="Ulke:<?php echo $Ulke ?>"><?php echo $Ulke ?></span>
    <?php else : ?>
    <p></p>
<?php endif ?> <br>

Üniversite:<?php

if (isset($_POST['Universite'])){
    $cinsiyet=$_POST['Universite']; 
 }else{
     echo 'yanlis';
 }
?><br>

Bilinen yabancı diller  :<?php
if(isset($_POST['gonder'])){

    if(!empty($_POST['dil'])) {

        foreach($_POST['dil'] as $value){
            echo "  /".$value;
        }
    }
}
?><br>

Bilinen bir programlama dili:
<?php

$programlamaDilleri = filter_input(INPUT_POST, 'programlamaDilleri');

?>
<?php if ($programlamaDilleri) : ?>
    <span style="programlamaDilleri:<?php echo $programlamaDilleri ?>"><?php echo $programlamaDilleri ?></span>
<?php else : ?>
    <p></p>
<?php endif ?> <br>

Açıklama: <?php 
if (isset($_POST['yorum'])) {
    echo htmlentities($_POST['yorum']);
}
?><br>
<?php
echo "<a href=Iletisim.html>Siteye geri dön.</a>";
?>

</body>
</html>    