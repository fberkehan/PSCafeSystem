<?php 
error_reporting(0);
include "header.php"; 
session_start();


$kimsin = $_SESSION["username"];

if (isset($_POST['onayliKoltuk'])) {
    $onayliKoltuk=$_POST['onayliKoltuk'];
}
echo "$onayliKoltuk";


    $kapatmasorgusu = $baglanti->prepare("SELECT * FROM uyeler WHERE kAdi='$kimsin'");
    $kapatmasorgusu->execute();
    $sonuckapatma = $kapatmasorgusu->get_result();
    $ciktikapatma = $sonuckapatma->fetch_array();

    $sqlkapatici = "UPDATE `uyeler` SET `durum` = ' ' WHERE kAdi='$kimsin'";
    $sonuckapatici=mysqli_query(@$baglanti,$sqlkapatici);



    $sqlKoltukDoldur = "UPDATE `koltuklar` SET `durum` = '' WHERE koltukSira='$onayliKoltuk'";
    $sonucKoltukDoldur=mysqli_query(@$baglanti,$sqlKoltukDoldur);




    echo "<div class='secmeEkrani'>";
    echo "Koltuklar Boşaltıldı!<br> Bizi tercih ettiğiniz için Teşekkür ederiz!<br>Hesaptan çıkış yapılıyor...";

    echo "</div>";

    header("Refresh: 3; url=http://localhost/");


    session_destroy();














?>