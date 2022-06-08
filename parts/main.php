<?php 




$kimsin = $_SESSION["username"];

$sorguGiris = $baglanti->prepare("SELECT * FROM uyeler WHERE kAdi='$kimsin'");
$sorguGiris->execute();
$sonuc = $sorguGiris->get_result();
$cikti = $sonuc->fetch_array();




$querykoltuk="SELECT * FROM koltuklar";
$resultkoltuk = mysqli_query($baglanti, $querykoltuk);
while($row=mysqli_fetch_assoc($resultkoltuk)) {
    $Koltuklar[$row['koltukSira']] = $row;
}



        $isim = $cikti["isim"];
        $soyisim = $cikti["soyisim"];
        $bakiye= $cikti["bakiye"];
        $uyeTipi = $cikti["uyeTipi"];

        $doluKoltuk = "#E30613";
        $bosKoltuk= "#009640";

        echo "
        <div class='secmeEkrani'>
        <form action='parts/odeme.php' method='post'>
        
        ";

        


        for ($satir=1; $satir < 8; $satir++) { 
            echo "<section>";
            for ($sutun=1; $sutun < 4; $sutun++) { 

                if ($sutun=="1") {
                    $sutunAdi = "A";
                }
                if ($sutun=="2") {
                    $sutunAdi = "B";
                }
                if ($sutun=="3") {
                    $sutunAdi = "C";
                }
                $satirUret = $sutunAdi.$satir;

               
                if ($Koltuklar["$satirUret"]["durum"]==NULL) {
                    echo '<input name="koltuklar[]" type="checkbox" value="'.$satirUret.'">
                <label>'.$satirUret.'<img width="20px" src="https://cdn-icons-png.flaticon.com/512/1196/1196446.png"></label>';
                }else {
                    echo '<input name="koltuklar[]" type="checkbox" value="'.$satirUret.'" disabled>
                <label>'.$satirUret.'<img width="20px" src="https://cdn-icons-png.flaticon.com/512/1196/1196446.png"></label>';
                }
               

                

            }
            
            echo "</section>";
        }
        echo "<p style='color:red;font-family: samsung_sharp_sansregular;'>Lütfen sadece 1 adet koltuk seçiniz.</p>";














       


            
    echo '<button type="submit" class="btn btn-success btn-block mb-4" style="background-color: #000000 !important;
    border-color: #02b322 !important;">OTURUMU BAŞLAT</button>';


   
        echo '</form><a href="parts/oturumukapat.php"><button class="btn btn-danger btn-block mb-4" style="
        background-color: #000000 !important;
        border-color: #ff0000 !important;">OTURUMU KAPAT</button></a></div>';











        echo "

        <div class='bakiye'>
        <div class='row'>
        <div class='col-5'>Hoşgeldin,<br/>$isim</div>
        <div class='col-5'>Bakiyen:$bakiye<span>TL</span><br/>Üye Tipi:$uyeTipi</div>
        <div class='col-2'><a href='http://localhost/parts/parayukle.php'><img src='https://www.svgrepo.com/show/20572/money.svg'></a></div>
        </div>
        </div>
        
        ";
        
        
        
        
        
       


        
  

        


 $sorguGiris->close();
 $baglanti->close();
       
?>