<?php 
include "header.php"; 
session_start();
    $kimsin = $_SESSION["username"];

    $odemesorgusu = $baglanti->prepare("SELECT * FROM uyeler WHERE kAdi='$kimsin'");
    $odemesorgusu->execute();
    $sonucodeme = $odemesorgusu->get_result();
    $ciktiodeme = $sonucodeme->fetch_array();

    
    $onayliOdeme=$_POST['onayliOdeme'];
    $onayliKoltuk=$_POST['onayliKoltuk'];
    $uyeBakiye=$ciktiodeme["bakiye"];

     echo "<div class='secmeEkrani'>";

     if ($uyeBakiye>$onayliOdeme) {
        $kalanBakiye = $uyeBakiye-$onayliOdeme;
        $sqlOdemes = "UPDATE `uyeler` SET `bakiye` = '$kalanBakiye', `durum` = '$onayliKoltuk' WHERE kAdi='$kimsin'";
        $sonuc2=mysqli_query(@$baglanti,$sqlOdemes);

        $sqlKoltukDoldur = "UPDATE `koltuklar` SET `durum` = 'DOLU' WHERE koltukSira='$onayliKoltuk'";
        $sonucKoltukDoldur=mysqli_query(@$baglanti,$sqlKoltukDoldur);


        echo "ÖDEME ALINMIŞTIR!<br>";
        echo "<br><br><br>";

        echo "Kullanıcı: $kimsin";

        echo "<br><br><br>";
        
        echo "Koltuk(lar) Hazır: $onayliKoltuk<br>";
        echo "<br><br>";
        echo "Yeni Bakiyeniz: $kalanBakiye TL<br>";
        echo "<br><br><br>";
        echo "Sayaç Başladı:<br>";
        
        date_default_timezone_set("Europe/Istanbul");
        
        echo "BAŞLANGIÇ:";
        echo date('H:i:s');
        echo "<br>";
        echo "BİTİŞ:";
        echo date('H:i:s', time() + 3600);
    

        echo "<br><br><br>";


        echo '
        <form action="oturumukapat.php" method="POST">

        <input name="onayliKoltuk" type="hidden" value="'.$onayliKoltuk.'">
        
        <button type="submit" class="btn btn-danger btn-block mb-4" style="
        background-color: #000000 !important;
        border-color: #ff0000 !important;">OTURUMU KAPAT</button></form>';
        
     }else {
         echo "Yeterli Bakiyeniz Yok,<br> Lütfen Bakiye Yükleyin.<br>";
         echo ' <a href="http://localhost/parts/parayukle.php"><button class="btn btn-danger btn-block mb-4" style="
         background-color: #000000 !important;
         border-color: #ff0000 !important;">Bakiye Yükle</button></form></a>';
     }

     echo "</div>";

?>