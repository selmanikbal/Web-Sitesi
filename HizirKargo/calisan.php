<?php

include ("baglanti.php");


if(isset($_POST["calisanekle"])){
  $ad=   $_POST['ad']  ;

  $soyad=  $_POST['soyad'] ;

  $kadi= $_POST['kadi'];

  $sifre= $_POST['sifre'];

  $tel= $_POST['telefon'];

  $mail= $_POST['mail'];

  $yas= $_POST['yas'];



  $sqlQuery = "INSERT INTO calisanlar (ad, soyad, kadi, sifre, telefon, mail, yas) VALUES ('$ad', '$soyad', '$kadi','$sifre','$tel','$mail','$yas')";
        
  $ekle=mysqli_query($baglanti,$sqlQuery);
}


?>

<?php

include ("baglanti.php");


if(isset($_POST["ekle"])){
  $ad=   $_POST['ad']  ;

  $soyad=  $_POST['soyad'] ;

  $cikis= $_POST['cikis'];

  $gsehir= $_POST['gsehir'];

  $gilce= $_POST['gilce'];

  $gmah= $_POST['gmah'];

  $gsokak= $_POST['gsokak'];

  $gdaire= $_POST['gdaire'];

  $kargono= $_POST['kargono'];

  $tel= $_POST['tel'];

  $csube= $_POST['csube'];

  $desi= $_POST['desi'];

  $ad1=   $_POST['ad1']  ;

  $soyad1=  $_POST['soyad1'] ;

  $tahteslim= $_POST['tahteslim'];

  $asehir= $_POST['asehir'];

  $ailce= $_POST['ailce'];

  $amah= $_POST['amah'];

  $asokak= $_POST['asokak'];

  $adaire= $_POST['adaire'];

  $kargono1= $_POST['kargono1'];

  $vsube= $_POST['vsube'];

  $tel1= $_POST['tel1'];

  $sqlQuery = "INSERT INTO gonderen (ad, soyad, cikistarihi, gonderenSehir, gonderenilce, gonderenMah, gonderensokak, gonderendaire, kargono, gonderentel, gonderenSube, desi)
   VALUES ('$ad', '$soyad', '$cikis','$gsehir','$gilce','$gmah','$gsokak','$gdaire','$kargono','$tel','$csube', '$desi')";
        
  $ekle=mysqli_query($baglanti,$sqlQuery);

  $sqlQuery1 = "INSERT INTO alan (ad, soyad, tahteslim, aliciSehir, aliciilce, aliciMah, aliciSokak, alicidaire, kargono, varisSube, alicitel)
   VALUES ('$ad1', '$soyad1', '$tahteslim','$asehir','$ailce','$amah','$asokak','$adaire','$kargono1','$vsube','$tel1')";
        
  $ekle1=mysqli_query($baglanti,$sqlQuery1);

  $sqlQuery2 = "INSERT INTO kargo (kargono, gonderenAd, aliciAd, cikis, varis, desi)
   VALUES ('$kargono', '$ad', '$ad1','$cikis','$tahteslim','$desi')";
        
  $ekle2=mysqli_query($baglanti,$sqlQuery2);
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HIZIR KARGO</title>
    <link rel="stylesheet" href="font/css/butun.css" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="goruntu/goruntu.css">
    <link rel="stylesheet" href="css/hizir1.css" />
    <link rel="stylesheet" href="css/hizir3.css" />
    
    <link rel="shortcut icon" href="img/sitelogosu.jpg" type="image/x-icon" />


</head>
<body>
    <!-- Hero section -->
    <section id="anaekran" style="background-color: #222;
  background-image: url(img/arkaplan3.jpg);min-height:100vh;
  background-repeat: no-repeat;
  height: 100vh;
  position: relative;"  class="text-white tm-font-big tm-parallax">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">
            <div class="container">
                <div class="tm-next">
                    <img src="img/ana-sayfa.jpg" width="100" height="71" alt="Web Sitesi Logosu" />
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" onclick="window.location.href = 'anasayfa.php';"><font color="black">Ana Sayfa</font></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#uye">??yeler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#kargo">Kargolar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#calisan">??al????anlar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#kargoekle">Kargo Ekle</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="text-center tm-hero-text-container">
            <div class="tm-hero-text-container-inner">
                <h2 class="tm-hero-title">HIZIR KARGO</h2>
            </div>
        </div>
    </section>



    <section id="uye" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-iletisim">

            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">??yeler</h2>
                <p class="mb-5">
                    A??a????daki tabloda ??yelerin bilgileri mevcuttur. 
                </p>
            </div>

            
            <table style"width: 450px" border=5 style="border:5px solid black;margin-left:auto;margin-right:auto;">
    <tr>
        <td><font color = FF0000>id</font></td>
        <td><font color = FF0000>Ad</font></td>
        <td ><font color = FF0000>Soyad</font></td>
        <td><font color = FF0000>Mail</font></td>
        <td><font color = FF0000>Telefon No</font></td>
    </tr>
    <?php 
   include ("baglanti.php");

      
                //Bir mySQL sorgusu ile t??m ??yeler tablosunu bir de??i??kene at??yoruz.
                
                $sql = "SELECT * from uyeler";
                $result = $baglanti->query($sql);
                

                //Bu de??i??ken i??erisine ??ekilen tabloyu bir d??ng?? ile b isimli dizi i??erisine ??ekiyoruz.
                while ($b=$result->fetch_assoc()){
                     
                    //Dizi i??erisine giriyoruz ve Tablo i??erisinden ??ekilecek olan t??m s??tunlar?? tek tek de??i??ken ierisine at??yoruz.
                    $id = $b['id'];
                    $ad = $b['ad'];
                    $soyad = $b['soyad'];
                    $mail = $b['mail'];
                    $tel = $b['telefon'];
                     
                    //Tablonun ikinci sat??r??na denk gelen bu alanda gerekli yerlere bu de??i??kenleri giriyoruz. 
                    echo "<tr>
                    <td>$id</td>
                    <td>$ad</td>
                    <td>$soyad</td>
                    <td>$mail</td>
                    <td>$tel</td>
                </tr>";
                     
                } 
                
                 
   ?>
                 
</table><br>
            </div>

        </div>
     </section>    

    

    <section id="kargo" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-iletisim">
        <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">Kargolar</h2>
                <p class="mb-5">
                    A??a????daki tabloda kargolar??n bilgileri mevcuttur. 
                </p>
            </div>

        <table style"width: 450px" border=5 style="border:5px solid black;margin-left:auto;margin-right:auto;">
    <tr>
        <td><font color = FF0000>id</font></td>
        <td><font color = FF0000>Kargo No</font></td>
        <td ><font color = FF0000>Gonderen Ki??i</font></td>
        <td><font color = FF0000>Al??c?? Ki??i</font></td>
        <td><font color = FF0000>????k???? Tarihi</font></td>
        <td><font color = FF0000>Tahmini Teslim Tarihi</font></td>
        <td><font color = FF0000>Desi</font></td>
    </tr>
    <?php 
   include ("baglanti.php");

      
                //Bir mySQL sorgusu ile t??m ??yeler tablosunu bir de??i??kene at??yoruz.
                
                $sql = "SELECT * from kargo";
                $result = $baglanti->query($sql);
                

                //Bu de??i??ken i??erisine ??ekilen tabloyu bir d??ng?? ile b isimli dizi i??erisine ??ekiyoruz.
                while ($b=$result->fetch_assoc()){
                     
                    //Dizi i??erisine giriyoruz ve Tablo i??erisinden ??ekilecek olan t??m s??tunlar?? tek tek de??i??ken ierisine at??yoruz.
                    $id = $b['id'];
                    $kargono = $b['kargono'];
                    $gonderen = $b['gonderenAd'];
                    $alici = $b['aliciAd'];
                    $cikis = $b['cikis'];
                    $varis = $b['varis'];
                    $desi = $b['desi'];
                     
                    //Tablonun ikinci sat??r??na denk gelen bu alanda gerekli yerlere bu de??i??kenleri giriyoruz. 
                    echo "<tr>
                    <td>$id</td>
                    <td>$kargono</td>
                    <td>$gonderen</td>
                    <td>$alici</td>
                    <td>$cikis</td>
                    <td>$varis</td>
                    <td>$desi</td>
                </tr>";
                     
                } 
                
                 
   ?>
                 
</table><br>
        </div>

    </section>
    <section id="bizimle??al????" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-iletisim">
        <div class="text-center col-12">
                <p class="mb-5">
                    Aramak ??stedi??iniz kargonun numars??n?? a??a????daki kutuya yaz??p kargonun bilgilerini ????renebilirsiniz.
                </p>
            </div>

        <div class="col-sm-12 col-md-6">
                <form action="calisan.php" method="post">
                    <input id="arama" name="arama" type="serch" placeholder="Aramak ??stedi??ni Kargo Numaras??n?? Giriniz" class="tm-input" required />
                    <button type="submit" name="g??nder" class="btn tm-btn-submit">G??nder</button>
                </form>
        
         </div>
    <table style"width: 450px" border=5 style="border:5px solid black;margin-left:auto;margin-right:auto;">
    
    <?php 
       include ("baglanti.php");
       
       if(isset($_POST["g??nder"])){
                $ara=$_POST['arama'];
                $sql = "select * from kargo where kargono= '$ara'";
                $result = $baglanti->query($sql);
                
                
                if ($result->num_rows > 0) {
                
                while ($b=$result->fetch_assoc()){
                     
                   
                  $id = $b['id'];
                  $kargono = $b['kargono'];
                  $gonderen = $b['gonderenAd'];
                  $alici = $b['aliciAd'];
                  $cikis = $b['cikis'];
                  $varis = $b['varis'];
                  $desi = $b['desi'];
                     
                    //Tablonun ikinci sat??r??na denk gelen bu alanda gerekli yerlere bu de??i??kenleri giriyoruz. 
                    echo "<tr><td><font color = FF0000>id</font></td>
                    <td><font color = FF0000>Kargo No</font></td>
                    <td ><font color = FF0000>Gonderen Ki??i</font></td>
                    <td><font color = FF0000>Al??c?? Ki??i</font></td>
                    <td><font color = FF0000>????k???? Tarihi</font></td>
                    <td><font color = FF0000>Tahmini Teslim Tarihi</font></td>
                    <td><font color = FF0000>Desi</font></td></tr>";
                    
                    
                    
                    echo "<tr>
                    <td>$id</td>
                    <td>$kargono</td>
                    <td>$gonderen</td>
                    <td>$alici</td>
                    <td>$cikis</td>
                    <td>$varis</td>
                    <td>$desi</td>
                </tr>";
                     
                } 
                }else {
            echo "0 results";
            
        }
    }
                
                 
   ?>
                 
</table><br>

        </div>
    

    </section>

    <section id="kargoekle" class="tm-section-pad-top tm-parallax-2">

<div class="container tm-container-iletisim">

    <div class="text-center col-12">
        <h2 class="tm-section-title mb-4">Kargo Ekleme Formu</h2>
        <p class="mb-5">
            Eklemek istedi??niz kargonun g??nderen ve al??c?? bilgilerini l??tfen doldurun.
        </p><br>
    </div>

    <div class="col-sm-12 col-md-6">
        <form action="calisan.php" method="post">
            <input id="ad" name="ad" type="text" placeholder="Gonderen Ad??" class="tm-input" required />
            <input id="soyad" name="soyad" type="text" placeholder="Gonderen Soyad??" class="tm-input" required />
            <input id="cikis" name="cikis" type="date" placeholder="????k???? Tarihi" class="tm-input" required />
            <input id="gsehir" name="gsehir" type="text" placeholder="Gonderen ??ehir" class="tm-input" required />
            <input id="gilce" name="gilce" type="text" placeholder="Gonderen ??l??e" class="tm-input" required />
            <input id="gmah" name="gmah" type="text" placeholder="Mahalle" class="tm-input" required />
            <input id="gsokak" name="gsokak" type="text" placeholder="Gonderen Sokak" class="tm-input" required />
            <input id="gdaire" name="gdaire" type="text" placeholder="Gonderen Daire" class="tm-input" required />
            <input id="kargono" name="kargono" type="text" placeholder="Kargo NO" class="tm-input" required />
            <input id="tel" name="tel" type="text" placeholder="G??nderen Telefon" class="tm-input" required />
            <input id="csube" name="csube" type="text" placeholder="????k???? ??ubesi" class="tm-input" required />
            <input id="desi" name="desi" type="text" placeholder="Desi" class="tm-input" required />
            <input id="ad" name="ad1" type="text" placeholder="Al??c?? Ad??" class="tm-input" required />
            <input id="soyad" name="soyad1" type="text" placeholder="Al??c?? Soyad??" class="tm-input" required />
            <input id="tahteslim" name="tahteslim" type="date" placeholder="Tahmini Var????" class="tm-input" required />
            <input id="asehir" name="asehir" type="text" placeholder="Al??c?? ??ehir" class="tm-input" required />
            <input id="ailce" name="ailce" type="text" placeholder="Al??c?? ??l??e" class="tm-input" required />
            <input id="amah" name="amah" type="text" placeholder="Al??c?? Mahalle" class="tm-input" required />
            <input id="asokak" name="asokak" type="text" placeholder="Al??c?? Sokak" class="tm-input" required />
            <input id="adaire" name="adaire" type="text" placeholder="Al??c?? Daire" class="tm-input" required />
            <input id="kargono1" name="kargono1" type="text" placeholder="Kargo NO" class="tm-input" required />
            <input id="vsube" name="vsube" type="text" placeholder="Var???? ??ubesi" class="tm-input" required />
            <input id="tel1" name="tel1" type="text" placeholder="Al??c?? Telefon" class="tm-input" required />
            <button type="G??nder" name="ekle" class="btn tm-btn-submit">G??nder</button>
        </form>
    </div>

</div>

</section>




    <section id="calisan" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-iletisim">

            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">??al????an Ekleme Formu</h2>
                <p class="mb-5">
                    Eklemek istedi??niz ??al????an??n bilgilerini l??tfen doldurun.
                </p><br>
            </div>

            <div class="col-sm-12 col-md-6">
                <form action="calisan.php" method="post">
                    <input id="ad" name="ad" type="text" placeholder="Ad??n??z" class="tm-input" required />
                    <input id="soyad" name="soyad" type="text" placeholder="Soyad??n??z" class="tm-input" required />
                    <input id="kadi" name="kadi" type="text" placeholder="Kullan??c?? Ad??n?? Giriniz" class="tm-input" required />
                    <input id="sifre" name="sifre" type="text" placeholder="Belirledi??iniz ??ifreyi giriniz" class="tm-input" required />
                    <input id="telefon" name="telefon" type="text" placeholder="Telefon Numar??n??z Giriniz" class="tm-input" required />
                    <input id="mail" name="mail" type="email" placeholder="Mail Adresiniz" class="tm-input" required />
                    <input id="yas" name="yas" type="text" placeholder="Ya?? Giriniz" class="tm-input" required />
                    <button type="G??nder" name="calisanekle" class="btn tm-btn-submit">G??nder</button>
                </form>
            </div>

        </div>

    </section>


    <section id="kurye??a????r" class="tm-section-pad-top tm-parallax-2">
    <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">??al????anlar</h2>
                <p class="mb-5">
                    A??a????daki tabloda ??al????anlar??n bilgileri mevcuttur. 
                </p>
            </div>

<div class="container tm-container-iletisim">
<table style"width: 450px" border=5 style="border:5px solid black;margin-left:auto;margin-right:auto;">
<tr>
<td><font color = FF0000>id</font></td>
<td><font color = FF0000>Ad</font></td>
<td><font color = FF0000>Soyad</font></td>
<td><font color = FF0000>Kullan??c?? Ad??</font></td>
<td><font color = FF0000>Telefon No</font></td>
<td><font color = FF0000>Mail</font></td>
<td><font color = FF0000>Ya??</font></td>
</tr>
<?php 
include ("baglanti.php");


        //Bir mySQL sorgusu ile t??m ??yeler tablosunu bir de??i??kene at??yoruz.
        
        $sql = "SELECT * from calisanlar";
        $result = $baglanti->query($sql);
        

        //Bu de??i??ken i??erisine ??ekilen tabloyu bir d??ng?? ile b isimli dizi i??erisine ??ekiyoruz.
        while ($b=$result->fetch_assoc()){
             
            //Dizi i??erisine giriyoruz ve Tablo i??erisinden ??ekilecek olan t??m s??tunlar?? tek tek de??i??ken ierisine at??yoruz.
            $id = $b['id'];
            $ad = $b['ad'];
            $soyad = $b['soyad'];
            $kadi = $b['kadi'];
            $tel = $b['telefon'];
            $mail = $b['mail'];
            $yas = $b['yas'];
             
            //Tablonun ikinci sat??r??na denk gelen bu alanda gerekli yerlere bu de??i??kenleri giriyoruz. 
            echo "<tr>
            <td>$id</td>
            <td>$ad</td>
            <td>$soyad</td>
            <td>$kadi</td>
            <td>$tel</td>
            <td>$mail</td>
            <td>$yas</td>
        </tr>";
             
        } 
        
         
?>
         
</table><br>
</div>

</section>


    

    

    

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="goruntu/jquery.goruntu.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/hizir1.js"></script>
    <script>

      function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
          _offset = 400;
        }
        if(windowHeight > 680) {
          _offset = 300
        }
        if(windowHeight > 830) {
          _offset = 210;
        }

        return _offset;
      }

      function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
          bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
      }

      // Parallax function
      // Adapted based on https://codepen.io/roborich/pen/wpAsm
      var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
          setParallaxPosition($doc, multiplier, $object);
        } else {
          $(window).scroll(function(){
            setParallaxPosition($doc, multiplier, $object);
          });
        }
      };

      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});

        $(window).scroll(function(){
          if($(window).width() > 768) {
            var firstTop = $object.offset().top,
                pos = $(window).scrollTop(),
                yPos = Math.round((multiplier * (firstTop - pos)) - 186);

            var bg_css = 'center ' + yPos + 'px';

            $object.css({"background-position" : bg_css });
          } else {
            $object.css({"background-position" : "center" });
          }
        });
      };

      $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#iletisim"), 0.80);

        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });

        // Close mobile menu after click
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show');
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav({
          'easing': 'easeInOutExpo',
          'speed': 600
        });

        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 600, 'easeInOutExpo', function(){
              window.location.hash = hash;
            });
          } // End if
        });

        // Pop up

      });
    </script>
</body>
</html>
