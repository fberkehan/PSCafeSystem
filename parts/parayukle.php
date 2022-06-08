<?php 
include("header.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  session_start();
  $kimsin = $_SESSION["username"];
     
    

  $parayuklesorgusu = $baglanti->prepare("SELECT * FROM uyeler WHERE kAdi='$kimsin'");
    $parayuklesorgusu->execute();
    $sonucparayukleme = $parayuklesorgusu->get_result();
    $ciktiparayukleme = $sonucparayukleme->fetch_array();
    $uyeBakiye=$ciktiparayukleme["bakiye"];




    $bakiyeYukle=$uyeBakiye+$_POST['bakiye'];
     

    $sqlParayukle = "UPDATE `uyeler` SET `bakiye` = '$bakiyeYukle' WHERE kAdi='$kimsin'";
    $sonucpyukle=mysqli_query(@$baglanti,$sqlParayukle);
    

    header("Location: http://localhost/"); 
    

}

    echo "<div class='secmeEkrani'>";

    echo '<img width="100px" src="https://www.svgrepo.com/show/20572/money.svg">
    
    
    <br><br>

    <h1>Bakiye Yükle</h1>

    <form action="'.$_SERVER['PHP_SELF'].'" method="POST">
    <div class="form-outline">
        <input name="bakiye" type="number" id="form3Example1" class="form-control inputColor"/>
        <label class="form-label" for="form3Example1">Ne kadar yüklemek istiyorsunuz?</label>
      </div>
    
      
      <button type="submit" class="btn btn-dark btn-block mb-4" style="background-color: blue !important;
    border-color: blue !important;">Bakiye Ekle</button>
    </form>
    
    
    
    ';


    echo "</div>";















?>