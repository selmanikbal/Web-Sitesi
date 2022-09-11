
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
<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: url(img/kargotakip.jpg);

}
,input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid rgb(0, 0, 0);
  box-sizing: border-box;
}
</style>    

</head>
<body>
 <section id="bizimleçalış" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-iletisim">
        <div class="text-center col-12">
                <p class="mb-5">
                <center><label for="ad"><b><h1>KARGO TAKİP</h1></b></label></center>
                </p>
            </div>

        <div class="col-sm-12 col-md-6">
                <form action="kargotakip.php" method="post">
                    <input id="arama" name="arama" type="text" placeholder="Kargo Takip No" class="tm-input" required />
                    <button type="submit" name="gönder" class="btn tm-btn-submit">Gönder</button>
                </form>
        
         </div>
         <table style"width: 450px" border=5 style="border:5px solid black;margin-left:auto;margin-right:auto;">
            
            <?php 
                include ("baglanti.php");

                if(isset($_POST["gönder"])){ 
                
                echo"<center><p><h1 style=\"color:white\">Gönderen Bilgileri</h1></p></center>";
 
                $kargono=$_POST['arama'];
                $sql = "select * from gonderen where kargono='$kargono'";
                $result = $baglanti->query($sql);
                
                
                if ($result->num_rows > 0) {
                
                while ($b=$result->fetch_assoc()){
                     
                   
                    $ad = $b['ad'];
                    $soyad = $b['soyad'];
                    $cikistarih = $b['cikistarihi'];
                    $gSehir = $b['gonderenSehir'];
                    $gilce = $b['gonderenilce'];
                    $gmah = $b['gonderenMah'];
                    $gSokak = $b['gonderensokak'];
                    $gdaire = $b['gonderendaire'];
                    $gtel = $b['gonderentel'];
                    $gsube = $b['gonderenSube'];
                     

                    echo"<tr>
                    <td><font color = white>Gönderen Ad</font></td>
                
                    <td><font color = white>Gönderen Soyad</font></td>
                
                    <td><font color = white>Çıkış Tarihi</font></td>
               
                    <td><font color = white>Çıkış Şehir</font></td>
                
                    <td><font color = white>Çıkış İlçe</font></td>
               
                    <td><font color = white>Çıkış Mahalle</font></td>
               
                    <td><font color = white>Çıkış Sokak</font></td>
               
                    <td><font color = white>Çıkış Daire</font></td>
               
                    <td><font color = white>Gönderici Telefon</font></td>
                
                    <td><font color = white>Çıkış Şube</font></td>
                  </tr>";
                    
                    echo 
                    
                    "<tr>
                <td><font color = white>$ad</font></td>
           
                <td><font color = white>$soyad</font></td>
            
                <td><font color = white>$cikistarih</font></td>
            
                <td><font color = white>$gSehir</font></td>
            
                <td><font color = white>$gilce </font></td>
            
                <td><font color = white>$gmah</font></td>
           
                <td><font color = white>$gSokak</font></td>
            
                <td><font color = white>$gdaire</font></td>
            
                <td><font color = white>$gtel</font></td>
          
                <td><font color = white>$gsube</font></td>
            </tr>";
                    
                     
                } 
                }else {
            echo "0 results";
            
        }
      }
                
                 
   ?>
          </table>




         <table style"width: 450px" border=5 style="border:5px solid black;margin-left:auto;margin-right:auto;">
            
            <?php 

            
                include ("baglanti.php");


                if(isset($_POST["gönder"])){ 
                    echo"<center><h1 style=\"color:white\">Alıcı Bilgileri</h1></center>";
 
                $kargono=$_POST['arama'];
                $sql = "select * from alan where kargono='$kargono'";
                $result = $baglanti->query($sql);
                
                
                if ($result->num_rows > 0) {
                
                while ($b=$result->fetch_assoc()){
                     
                   
                    $ad = $b['ad'];
                    $soyad = $b['soyad'];
                    $tahteslim = $b['tahteslim'];
                    $aSehir = $b['aliciSehir'];
                    $ailce = $b['aliciilce'];
                    $amah = $b['aliciMah'];
                    $aSokak = $b['aliciSokak'];
                    $adaire = $b['alicidaire'];
                    $asube = $b['varisSube'];
                    $atel = $b['alicitel'];
                     

                    echo"<tr>
                    <td><font color = white>Gönderen Ad</font></td>
                
                    <td><font color = white>Gönderen Soyad</font></td>
                
                    <td><font color = white>Çıkış Tarihi</font></td>
               
                    <td><font color = white>Çıkış Şehir</font></td>
                
                    <td><font color = white>Çıkış İlçe</font></td>
               
                    <td><font color = white>Çıkış Mahalle</font></td>
               
                    <td><font color = white>Çıkış Sokak</font></td>
               
                    <td><font color = white>Çıkış Daire</font></td>
               
                    <td><font color = white>Gönderici Telefon</font></td>
                
                    <td><font color = white>Çıkış Şube</font></td>
                  </tr>";
                    
                    echo 
                    
                    "<tr>
                <td><font color = white>$ad</font></td>
           
                <td><font color = white>$soyad</font></td>
            
                <td><font color = white>$tahteslim</font></td>
            
                <td><font color = white>$aSehir</font></td>
            
                <td><font color = white>$ailce </font></td>
            
                <td><font color = white>$amah</font></td>
           
                <td><font color = white>$aSokak</font></td>
            
                <td><font color = white>$adaire</font></td>
          
                <td><font color = white>$asube</font></td>
            
                <td><font color = white>$atel</font></td>
            </tr>";
                    
                     
                } 
                }else {
            echo "0 results";
            
        }
      }
                
                 
   ?>
          </table>





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
