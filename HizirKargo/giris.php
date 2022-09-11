<?php

include ("baglanti.php");


if(isset($_POST["kayit"])){
  $ad=   $_POST['uyead']  ;

  $soyad=  $_POST['uyesoyad'] ;

  $mail= $_POST['mail'];

  $sifre= $_POST['yeniuyesifre'];

  $tel= $_POST['tel'];

  $sqlQuery = "INSERT INTO uyeler (ad, soyad, mail, sifre, telefon) VALUES ('$ad', '$soyad', '$mail','$sifre','$tel')";
        
  $ekle=mysqli_query($baglanti,$sqlQuery);
}


?>

<?php

include ("baglanti.php");


ob_start();
session_start();
if(isset($_POST["uyegiris"])){ 
$mail = $_POST['mail'];
$sifre = $_POST['sifre'];
 
$sqlQuery ="select * from uyeler where mail='$mail' and sifre='$sifre' ";

$kontrol=mysqli_query($baglanti,$sqlQuery);
 
if(mysqli_num_rows($kontrol)>0)  {
    
    header("Location:kampanya.html");
}
else {
  header("Location:giris.php");
}
 
ob_end_flush();

}
?>

<?php

include ("baglanti.php");


ob_start();
if(isset($_POST["calisangiris"])){ 
$kadi = $_POST['calisanad'];
$sifre = $_POST['calisansifre'];
 
$sqlQuery ="select * from calisanlar where kadi='$kadi' and sifre='$sifre' ";

$kontrol=mysqli_query($baglanti,$sqlQuery);
 
if(mysqli_num_rows($kontrol)>0)  {
    
    header("Location:calisan.php");
}
else {
  header("Location:giris.php");
}
 
ob_end_flush();

}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/sitelogosu.jpg" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: url(img/giris.jpg);

  background: url(img/giris.jpg) no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid rgb(0, 0, 0);
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #3e4877;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  text-align:center;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.bord {
  align-items: center;
  width: 300px;
  height: 250px;
}
.container {
  padding: 16px;
}

.devam {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.card {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.card-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 25%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  .devam {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body >
<div class="bord">
    <h2><font color="white">Hızır Kargo Giriş Ekranı</font></h2>
    <center><button onclick="document.getElementById('uye').style.display='block'" style="width:auto;">ÜYE GİRİŞ</button></center><br>
    <center><button onclick="document.getElementById('calisan').style.display='block'" style="width:auto;">ÇALIŞAN GİRİŞ</button></center>
</div>

<div id="uye" class="card" >
  
  <form class="card-content animate" action="giris.php" method="post">

    <div class="container">
      <center><label for="ad"><b>Mailiniz Giriniz</b></label></center>
      <input type="text" placeholder="Mailiniz Giriniz" name="mail" required>

      <center><label for="sifre"><b>Şifre</b></label></center>
      <input type="password" placeholder="Şifrenizi Giriniz" name="sifre" required>
        
      <button name="uyegiris" type="submit">Giriş</button>
      <button onclick="document.getElementById('uyeol').style.display='block'" >Üye Ol</button>
    </div>

    <div class="container" style="background-color:#2f3552">
      <button type="button" onclick="document.getElementById('uye').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="devam"><a  onclick="window.location.href = 'anasayfa.php';">Üye Olmadan Devam Et</a></span>
    </div>
  </form>
</div>

<div id="calisan" class="card">
  
    <form class="card-content animate" action="giris.php" method="post">
  
      <div class="container">
        <center><label for="calisanad"><b>Kullanıcı Adı</b></label></center>
        <input type="text" placeholder="Kullanıcı Adınızı Giriniz" name="calisanad" required>
  
        <center><label for="calisansifre"><b>Şifre</b></label></center>
        <input type="password" placeholder="Şifrenizi Giriniz" name="calisansifre" required>
          
        <button name="calisangiris" type="submit">Giriş</button>
        
      </div>
  
      <div class="container" style="background-color:#2f3552">
        <button type="button" onclick="document.getElementById('calisan').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
</div>

<div id="uyeol" class="card">
  
  <form class="card-content animate" action="giris.php" method="post">

    <div class="container">
      <center><label for="uyead"><b>Ad</b></label></center>
      <input type="text" placeholder="Adınızı Giriniz" name="uyead" required>
      <center><label for="uyesoyad"><b>Soyad</b></label></center>
      <input type="text" placeholder="Soyadınızı Giriniz" name="uyesoyad" required>
      <center><label for="mail"><b>Mail</b></label></center>
      <input type="text" placeholder="Mailiniz Giriniz" name="mail" required>
      <center><label for="yeniuyesifre"><b>Şifre</b></label></center>
      <input type="password" placeholder="Belirlediğiniz Bir Şifre Giriniz" name="yeniuyesifre" required>
      <center><label for="tel"><b>Telefon</b></label></center>
      <input type="text" placeholder="Telefon Numaranızı Giriniz" name="tel" required>
        
      <button name="kayit" type="submit">Kayıt Ol</button>
      
    </div>

    <div class="container" style="background-color:#2f3552">
      <button type="button" onclick="document.getElementById('uyeol').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>

var card = document.getElementById('uye');

window.onclick = function(event) {
    if (event.target == card) {
        card.style.display = "none";
    }
}
</script>

</body>
</html>
