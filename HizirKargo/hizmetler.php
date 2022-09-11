<?php

include ("baglanti.php");


if(isset($_POST["kurye"])) {
  $ad=   $_POST['ad1']  ;

  $soyad=  $_POST['soyad1'] ;

  $adres=  $_POST['adres'];

  $telefon= $_POST['tel'];

  $sqlQuery = "INSERT INTO kurye (ad, soyad, adres, telefon) VALUES ('$ad', '$soyad', '$adres','$telefon')";
        
  $ekle=mysqli_query($baglanti,$sqlQuery);
    
}


?>

<?php

include ("baglanti.php");


if(isset($_POST["fiyat"])){
  $ad=   $_POST['ad']  ;

  $soyad=  $_POST['soyad'] ;

  $cikisyer= $_POST['cikisyer'];

  $varisyer= $_POST['varisyer'];

  $mail= $_POST['mail'];

  $sqlQuery = "INSERT INTO fiyatalma (ad, soyad, cikisyer, varisyer, mail) VALUES ('$ad', '$soyad', '$cikisyer','$varisyer','$mail')";
        
  $ekle=mysqli_query($baglanti,$sqlQuery);
}


?>

<?php

include ("baglanti.php");


if(isset($_POST["basvuru"])){
  $ad=   $_POST['ad2'] ;

  $soyad=  $_POST['soyad2'];

  $yas= $_POST['yas'];

  $ogrenim= $_POST['ogrenim'];

  $firma= $_POST['firma'];

  $mevki= $_POST['mevki'];

  $mail= $_POST['mail1'];

  $telefon= $_POST['tel1'];

  $sqlQuery = "INSERT INTO basvuru (ad, soyad, yas, ogrenim, firma, mevki, mail, telefon) VALUES ('$ad','$soyad','$ogrenim','$yas','$firma','$mevki',' $mail','$telefon')";
        
  $ekle=mysqli_query($baglanti,$sqlQuery);
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
    <link rel="stylesheet" href="css/hizir4.css" />
    
    <link rel="shortcut icon" href="img/sitelogosu.jpg" type="image/x-icon" />
</head>
<body>
    <!-- Hero section -->
    <section id="anaekran" style="background-color: #222;
  background-image: url(img/infinite-loop-011.jpg);
  background-repeat: no-repeat;min-height:100vh;
  height: 100vh;
  position: relative;" class="text-white tm-font-big tm-parallax">
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
                            <a class="nav-link tm-nav-link" href="#fiyatalma">Kargo Fiyat Alma</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#kuryeçağır">Kurye Çağırma</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#bizimleçalış">Bizimle Çalışmak İster Misiniz</a>
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

    <section id="fiyatalma" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-iletisim">

            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">Kargo Fiyat Alma Formu</h2>
                <p class="mb-5">
                    Hızır Kargo ile herşey mümkün Hızır Kargodan kargonuz için fiyat teklif almak için hemen formu doldurunuz.
                </p><br>
            </div>

            <div class="col-sm-12 col-md-6">
                <form action="hizmetler.php" method="post">
                    <input id="ad" name="ad" type="text" placeholder="Adınız" class="tm-input" required />
                    <input id="soyad" name="soyad" type="text" placeholder="Soyadınız" class="tm-input" required />
                    <input id="cikisyer" name="cikisyer" type="text" placeholder="Kargo Çıkış Yerini Giriniz" class="tm-input" required />
                    <input id="varisyer" name="varisyer" type="text" placeholder="Kargo Varış Yerini Giriniz" class="tm-input" required />
                    <input id="mail" name="mail" type="email" placeholder="Mail Adresiniz" class="tm-input" required />
                    <input class="btn tm-btn-submit" name="fiyat" type="submit" value="GÖNDER">
                </form>
            </div>

        </div>

    </section>
    <section id="kuryeçağır" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-iletisim">
            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">Kurye Çağırma Formu</h2>
                <p class="mb-5">
                    Hemen kurye çağırmak isterseniz formu doldurun sizinle iletişime geçelim.
                </p><br>
            </div>

            <div class="col-sm-12 col-md-6">
                <form action="hizmetler.php" method="post">
                    <input id="ad1" name="ad1" type="text" placeholder="Adınız" class="tm-input" required />
                    <input id="soyad1" name="soyad1" type="text" placeholder="Soyadınız" class="tm-input" required />
                    <input id="adres" name="adres" type="text" placeholder="Adresinizi Giriniz" class="tm-input" required />
                    <input id="tel" name="tel" type="text" placeholder="Telefon Numaranız" class="tm-input" required />
                    <button type="Gönder" name="kurye" class="btn tm-btn-submit">Gönder</button>
                </form>
            </div>

        </div>

    </section>
    <section id="bizimleçalış" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-iletisim">

            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">İş Başvuru Formu</h2>
                <p class="mb-5">
                    HızırKargo olarak aramıza katılmanızla her geçen gün güçlenerek büyüyoruz.HızırKargo olarak sizleri de aramızda görmek gücümüze güç katacağına inanıyoruz. Bizimle çalışmak için hemen aşağıdaki formu doldurun sizinle iletişime geçelim
                </p><br>
            </div>

            <div class="col-sm-12 col-md-6">
                <form action="hizmetler.php" method="post">
                    <input id="ad2" name="ad2" type="text" placeholder="Adınız" class="tm-input" required />
                    <input id="soyad2" name="soyad2" type="text" placeholder="Soyadınız" class="tm-input" required />
                    <input id="yas" name="yas" type="text" placeholder="Yaşınızı Giriniz" class="tm-input" required />
                    <input id="ogrenim" name="ogrenim" type="text" placeholder="Öğrenim Durumunuzu Giriniz" class="tm-input" required />
                    <input id="firma" name="firma" type="text" placeholder="Daha Önceden Çalıştığınız Firmalar" class="tm-input" required />
                    <input id="mevki" name="mevki" type="text" placeholder="Hangi Mevkide Çalışmak İstiyorsunuz" class="tm-input" required />
                    <input id="mail1" name="mail1" type="email" placeholder="Mail Adresiniz" class="tm-input" required />
                    <input id="tel1" name="tel1" type="text" placeholder="Telefon Numaranız" class="tm-input" required />
                    <button type="Gönder" name="basvuru" class="btn tm-btn-submit">Gönder</button>
                </form>
            </div>

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
