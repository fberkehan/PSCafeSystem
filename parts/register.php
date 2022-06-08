
<?php 

include "header.php";
session_start();

 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
     
     $isim=$_POST['isim'];
     $soyisim=$_POST['soyisim'];
     $kAdi=$_POST['kAdi'];
     $eposta=$_POST['email'];
     $telNo=$_POST['telNo'];
     $tcNo=$_POST['tcNo'];
     $pass=$_POST['pass'];
     
    $sqlkayt = "INSERT INTO `uyeler` (`id`, `isim`, `soyisim`, `email`, `telefon`, `kAdi`, `sifre`, `tcKimlik`, `bakiye`, `uyeTipi`, `durum`) VALUES (NULL, '$isim', '$soyisim', '$eposta', '$telNo', '$kAdi', '$pass', '$tcNo', '0', 'Normal', ' ');";
    $sonuckayt=mysqli_query(@$baglanti,$sqlkayt);
    

    header("Location: http://localhost/"); 
    

}
?>



<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST" class="regApp">
<img width="100%" src="https://wallpapercave.com/wp/wp7137170.jpg">
<h1 class="baslik">ÖDEPLAY'e Hoşgeldiniz!</h1>
<h4 class="baslik" style="font-family:samsung_sharp_sansregular !important;">Tanışma Vakti!</h4>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input name="isim" type="text" id="form3Example1" class="form-control inputColor" required/>
        <label class="form-label" for="form3Example1">İsminiz</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input name="soyisim" type="text" id="form3Example2" class="form-control inputColor" required />
        <label class="form-label" for="form3Example2">Soyisminiz</label>
      </div>
    </div>
  </div>

  <div class="form-outline mb-4">
    <input name="kAdi" type="text" id="form3Example3" class="form-control inputColor" required />
    <label class="form-label" for="form3Example3">Kullanıcı Adı</label>
  </div>

  <div class="form-outline mb-4">
    <input name="email" type="email" id="form3Example3" class="form-control inputColor" required/>
    <label class="form-label" for="form3Example3">E-Posta Adresiniz</label>
  </div>

  <div class="form-outline mb-4">
    <input name="telNo" type="number" id="form3Example3" class="form-control inputColor" required/>
    <label class="form-label" for="form3Example3">Telefon Numaranız</label>
  </div>

  <div class="form-outline mb-4">
    <input name="tcNo" type="number" id="form3Example3" class="form-control inputColor" required/>
    <label class="form-label" for="form3Example3">T.C. Numaranız</label>
  </div>

  <div class="form-outline mb-4">
    <input name="pass" type="password" id="form3Example4" class="form-control inputColor" required/>
    <label class="form-label" for="form3Example4">Şifre Belirleyin</label>
  </div>


  <button type="submit" class="btn btn-danger btn-block mb-4" style="    width: 40vw;
    height: 6vh;    background-color: blue !important;
    border-color: blue !important;">KAYIT OL</button>

</form>
