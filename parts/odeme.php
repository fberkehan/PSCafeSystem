<?php 
error_reporting(0);
include("header.php");



    echo "<div class='secmeEkrani'>";

        if(isset($_POST["koltuklar"])) {
            $koltuklar = $_POST['koltuklar'];
         
            echo 'Seçtiğiniz Koltuklar: <br/>';
         
            foreach($koltuklar as $koltuk) {
                echo ' * ' . $koltuk . ' <br/>';
            }
            



            $koltukVeri = implode(",",$koltuklar);
        echo "ödemeniz gereken miktar:<br/>";
        $fiyat = count($koltuklar)*20;
        echo "<h1>$fiyat TL</h1>";


        echo '
        <form action=odemeal.php method="POST" >

        <input name="onayliKoltuk" type="hidden" value="'.$koltukVeri.'">
        <input name="onayliOdeme" type="hidden" value="'.$fiyat.'">

        <button type="submit" class="btn btn-success btn-block mb-4" style="background-color: #000000 !important;border-color: #02b322 !important;">Ödeme Yap</button>
        </form>
        <br>';

    echo ' * Ödeme yapıldıktan sonra sistem saatte 1 kez ödeme alacaktır.<br/>';
    echo ' * Dilediğiniz oyunu oynayabilirsiniz.<br/>';
    echo ' * Aynı oturumda 5 saatten fazla kalamazsınız.<br/>';
    echo ' * Otomatik ödemeler Kupon Kodları için geçerli değildir.<br/>';

    echo "</div>";

    
        } else {
            echo 'Hiç koltuk seçmediniz.<br/>Ana sayfaya yönlendiriliyorsunuz...';
            header("Refresh: 2; url=http://localhost/");

        }
        
        


?>