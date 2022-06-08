
<?php 
error_reporting(0);
include "header.php"; 
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

  $username=$_POST["kAdi"];
  $password=$_POST["pass"];
  

  $sql="SELECT * FROM uyeler WHERE kAdi='$username'AND sifre='$password'";
  $result=mysqli_query(@$baglanti,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

  if(mysqli_num_rows($result) == 1)
  {
  $_SESSION["username"] = $username; 
  header("location: http://localhost/");
  }else
  {

  }

  
  
 
  
}



?>

<div  class="loginApp">

<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">

<img style="position: relative;
    left: -2vw;
    width: 100%;" width="100%" src="https://cdn.dribbble.com/users/2161511/screenshots/12441068/controller2.gif">
<h1 class="baslik">Tekrar Hoşgeldiniz!</h1>
<br>

<h4 class="baslik" style="font-family:samsung_sharp_sansregular !important;">Oyun Başlasın!</h4>

<div class="form-outline mb-4">
    <input name="kAdi" type="text" id="form3Example3" class="form-control inputColor" />
    <label class="form-label" for="form3Example3">Kullanıcı Adı</label>
  </div>

 <div class="form-outline mb-4">
   <input name="pass" type="password" id="form3Example4" class="form-control inputColor" />
   <label class="form-label" for="form3Example4">Şifrenizi girin</label>
 </div>

 <label>Default Giriş Bilgileri:<br>Kullanıcı Adı: admin<br>Şifre: admin</label><br>

 <button type="submit" class="btn btn-success btn-block mb-4" style="background-color: #097340 !important;
    border-color: #097340 !important;">Giriş Yap</button>
    
    <p style="color:red;display:none;">Bir Problem Var!</p>
 

</form>

<a href="http://localhost/parts/register.php">
<button type="submit" class="btn btn-dark btn-block mb-4" style="
background-color: #253755  !important;
border-color: #253755  !important;">Hesap Aç</button>
</a>



  </div>
