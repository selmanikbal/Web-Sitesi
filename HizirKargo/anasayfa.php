<?php

include ("baglanti.php");


if(isset($_POST["ileti"])){
  $ad=   $_POST['ad']  ;

  $soyad=  $_POST['soyad'] ;

  $mail= $_POST['mail'];

  $tel= $_POST['tel'];

  $ileti= $_POST['ileti'];

  $sqlQuery = "INSERT INTO iletisim (ad, soyad, mail, telefon, ileti) VALUES ('$ad','$soyad','$mail','$tel','$ileti')";
        
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
    <link rel="stylesheet" href="css/hizir.css" />
    <link rel="shortcut icon" href="img/sitelogosu.jpg" type="image/x-icon" />
</head>
<body>
    <!-- Hero section -->
    <section id="anaekran" class="text-white tm-font-big tm-parallax">
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
                            <a class="nav-link tm-nav-link" href="#anaekran">Hızır Kargo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" onclick="window.location.href = 'kargotakip.php';"><font color="black">Kargo Takip</font> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" onclick="window.location.href = 'hizmetler.php';"><font color="black">Hizmetlerimiz</font></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" onclick="window.location.href = 'kurumsal.html';"><font color="black">Kurumsal</font></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#iletisim">İletişim</a>
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

        <div class="tm-next tm-intro-next">
            <a href="#hakkimizda" class="text-center tm-down-arrow-link">
                <i class="fas fa-2x fa-arrow-down tm-down-arrow"></i>
            </a>
        </div>
    </section>

    <section id="hakkimizda" class="tm-section-pad-top">

        <div class="container">

            <div class="row tm-content-box">
                <!-- first row -->
                <div class="col-lg-12 col-xl-12">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4 tm-section-title">Hakkımızda</h2>
                        <p class="mb-4 tm-intro-text">
                            Kargo taşımacılığına dar bir çerçeveden bakıldığında doküman ya da paketlerin iki nokta arasında taşınması düşünülebilinse de, Hızır Kargo hizmetlerine başladığı ilk günden bu yana gerek gönderici gerekse alıcı arasında maksimum düzeyde memnuniyet oluşturma ve özel ihtiyaçların herhangi bir kısıtlama ile karşılaşılmadan meydana getirilmesi gayesini taşımaktadır. Misyonu gereği hem müşterileri hem de çalışanları ile mutluluk, huzur ve güven ilişkisi içerisinde bulunmayı ilke edinen firmamız, bu özelliklerini ilerleyen yıllar içerisinde de sabit tutarak Türkiye ve dünyanın lider taşımacılık firmaları arasında yer alma vizyonunu taşımaktadır.

                            <br><br>Hali hazırda son derece geniş olan dağıtım ağını genişleterek rakiplerinin ulaşmayı hayal dahi edemediği noktalara en kısa sürede paket ve belge gönderimi gerçekleştirmeyi amaçlayan Hızır Kargo, bunun yanı sıra standart hizmetlere ek olarak ihtiyaç duyulabilecek özel istekleri de karşılamaya gayret göstermektedir. Daima mevcut durumunun bir adım ilerisinde bulunmayı amaçlayan firmamız, değerli müşterilerinden gelen istek, eleştiri ve benzeri geri dönüşlere de birebir ya da dolaylı olarak en kısa sürede dönüş yapmayı amaçlamaktadır.

                            Hep bir adım ilerisini düşleyerek hep daha iyi ve ileriye

                            Yurt içi ve yurt dışı kargo taşımacılığı konusundaki geniş vizyonumuz ile birebir tanışmak ve hizmetlerimiz konusunda detaylı bilgi sahibi olmak için sizleri de yetkililerimiz ile iletişime geçmeye davet ediyoruz. Hızır Kargo olarak her gün daha profesyonel ve kaliteli hizmetleri sizler ile buluşturmanın gururu ve mutluluğu içerisindeyiz.
                        </p>
                    </div>
                </div>

            </div><!-- first row -->

            <div class="row tm-content-box">
                <!-- second row -->
                <div class="col-lg-1">
                    <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">Misyon Vizyon</h2>
                        <p class="mb-4 tm-intro-text">
                            Kurulduğu günden bu yana Türkiye’nin ve dünyanın dört bir yanına gerçekleştirdiği sayısız belge ve paket transferi ile birlikte kişilerin ve firmaların ihtiyaçlarına karşılık veren Hızırkargo, kendi çalışma alanında lider isim olma misyonuna sahiptir. Zamanın gerektirdiği en detaylı hizmetleri mümkün olabilecek en hızlı biçimde ve uygun fiyatlara sunma gayesinde bulunan firmamız, değerli müşterilerinden aldığı geri dönüş, tavsiye ve tebrikler ile birlikte de hali hazırdaki hizmet kalitesini daima bir adım öteye taşıma ve mevcut ya da potansiyel eksiklerini gidermek amacındadır.

                            <br>Yalnızca müşterileri ile değil aynı zamanda çalışanları ile de memnuniyet çerçevesi içerisinde yer alan firmamız, mutlu ve huzurlu çalışanları ile birlikte üst düzey hizmet kalitesine ve sorunsuz işlemlere ulaşmanın haklı gururunu yaşamaktadır.
                        </p>
                    </div>
                </div>

                <div class="col-lg-1">
                    <i class="fas fa-3x fa-users text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">Kalite Politikamız</h2>
                        <p class="mb-4 tm-intro-text">
                            HIZIR Kargo, müşteri beklentilerini karşılayarak taahhüt edilen zaman içerisinde teslimatlarını gerçekleştirmeyi, gelişen teknolojilerin kullanımında sektöründe her zaman müşterilerine kaliteli hizmet vermek hususunda lider olmayı hedeflemektedir.
                            Kargo olarak kaliteli, güvenli ve müşteri odaklı bir yaklaşım ile “Her zaman doğru, zamanında ve hızlı teslimat”

                            prensibini benimseyerek;

                            <br>• Müşteri memnuniyetini her zaman ön planda tutarak; gelen geri bildirimlerin ele alınması, incelenmesi, değerlendirilmesi ve analizinin yapılarak iş süreçlerinde gerekli iyileştirmelerin yapılması,

                            <br>• Sürekli iyileştirme yaklaşımı ile tüm süreçlerdeki verimliliğin ve kalitenin arttırılması,

                            <br>• HIZIR KARGO çalışanlarının, hizmet kalitesinin geliştirilmesi adına teknik ve kişisel gelişim yetkinliklerini artıracak eğitimlerin gerçekleştirilmesi,

                            <br>için çalışacağımızı taahhüt ederiz.
                        </p>

                    </div>
                </div>


            </div><!-- second row -->

        </div>

    </section>

    <section id="hizmetler" class="tm-section-pad-top tm-parallax-2">
        <div class="container tm-hizmetler-content">
            <div class="row">
                <div class="col-lg-12 tm-content-box">
                    <h2 class="text-white text-center mb-4 tm-section-title">Hizmetlerimiz</h2>
                    <div class="mx-auto tm-foto-container tm-foto-container-2">
                        <div class="tm-hizmetler-carousel">
                            <figure class="tm-hizmet-item">
                                <img src="img/aynı-gün.jpg" alt="Image" class="img-fluid mx-auto">
                                <blockquote><center><h4>Aynı Gün Teslimat</h4></center><br>Bugün özellikle havayolu kargo seçenekleri sayesinde yurt içine dahi aynı gün teslimat kargo göndermek mümkündür. Günümüzde özellikle ülkemizde giderek büyüyen bir sektör olan e-ticaret alanında "kargo hızı" ve "kargo kalitesi" neredeyse e-ticaret sitesinin marka değeri ve kalitesi üzerindeki en önemli unsurlardan bir tanesi haline gelmiştir.</blockquote>  
                            </figure>

                            <figure class="tm-hizmet-item">
                                <img src="img/ertesi-gün.jpg" alt="Image" class="img-fluid mx-auto">
                                <blockquote><center><h4>Ertesi Gün Teslimat</h4></center><br>Her gün sayısız müşterisinin Türkiye’nin dört bir yanına gerçekleştirdikleri gönderilerini güvenli ve ekonomik biçimde alıcılarına ulaştıran HIZIR KARGO, Ertesi Gün Teslimat  hizmeti altında boyut farkı göz etmeksizin en ufak belge ya da paketlerden en büyük kolilere kadar taşıma hizmeti sunmaktadır.</blockquote>   
                            </figure>

                            <figure class="tm-hizmet-item">
                                <img src="img/kapıda-ödeme.jpg" alt="Image" class="img-fluid mx-auto">
                                <blockquote><center><h4>Kapıda Ödeme</h4></center><br>HIZIR KARGO olarak yurtiçinde sağladığımız hizmetlerden bir tanesi de kapıda ödeme olarak da isimlendirilen tahsilâtlı kargo hizmetimizdir. Bu hizmetimizin temel mantığı, uzaktan alış veriş sisteminde yer alan satıcıların ve alıcıların işlerini kolaylaştırmaktır.</blockquote>   
                            </figure>

                            <figure class="tm-hizmet-item">
                                <img src="img/paketleme.jpg" alt="Image" class="img-fluid mx-auto">
                                <blockquote><center><h4>Paketleme Hizmetleri</h4></center><br>Gönderilerinizi güvenle paketlemek için farklı tip ve ebatlardaki ambalaj ürünlerimizi kullanabilirsiniz. Kargonuza en uygun ambalajı şubelerimizden temin edebilir ve paketlemesini gerçekleştirebilirsiniz.Geri dönüşümlü malzemeden üretilen Doğa Dostu Kolilerimiz 4 farklı ebatta sunulmaktadır.</blockquote>
                            </figure>

                            <figure class="tm-hizmet-item">
                                <img src="img/taşıma.jpg" alt="Image" class="img-fluid mx-auto">
                                <blockquote><center><h4>Güvenli Taşıma</h4></center><br>Taşıma Güvencesi, gönderinin maddi değerinin yüksek olması durumunda sunulan sigorta ile birlikte tarafların üst düzey rahatlık yaşamalarını sağlamaktadır.Maddi değeri 1.000 ilâ 10.000 Türk Lirası arasında bulunan gönderilerin belirtilmesi durumunda uygulanan Taşıma Güvencesi sigortası, meydana gelebilecek herhangi bir sorunda ürün bedelinin iade edilmesini mümkün kılmaktadır.</blockquote>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-bg-overlay"></div>
    </section>

    <section id="foto" class="tm-section-pad-top">
        <div class="container tm-container-foto">
            <div class="row">
                <div class="text-center col-12">
                    <h2 class="tm-text-primary tm-section-title mb-4">Fotoğraflar</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mx-auto tm-foto-container">
                        <div class="grid tm-foto">
                            <a href="img/foto1.jpeg">
                                <figure class="effect-honey tm-foto-item">
                                    <img src="img/foto1.jpeg" alt="foto 1" class="img-fluid">
                                </figure>
                            </a>
                            <a href="img/foto2.jpeg">
                                <figure class="effect-honey tm-foto-item">
                                    <img src="img/foto2.jpeg" alt="foto 2" class="img-fluid">
                                </figure>
                            </a>
                            <a href="img/foto3.jpeg">
                                <figure class="effect-honey tm-foto-item">
                                    <img src="img/foto3.jpeg" alt="Image 3" class="img-fluid">
                                </figure>
                            </a>
                            <a href="img/foto4.jpg">
                                <figure class="effect-honey tm-foto-item">
                                    <img src="img/foto4.jpg" alt="Image 4" class="img-fluid">
                                </figure>
                            </a>
                            <a href="img/foto5.jpg">
                                <figure class="effect-honey tm-foto-item">
                                    <img src="img/foto5.jpg" alt="Image 5" class="img-fluid">
                                </figure>
                            </a>
                            <a href="img/foto6.jpeg">
                                <figure class="effect-honey tm-foto-item">
                                    <img src="img/foto6.jpeg" alt="Image 6" class="img-fluid">
                                </figure>
                            </a>
                            <a href="img/foto7.jpeg">
                                <figure class="effect-honey tm-foto-item">
                                    <img src="img/foto7.jpeg" alt="Image 6" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="iletisim" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-iletisim">

            <div class="row">

                <div class="text-center col-12">
                    <h2 class="tm-section-title mb-4">İLETİŞİM FORMU</h2>
                    <p class="mb-5">
                        Aşağıdaki iletişim bilgilerini lütfen doldurun. Size en yakın zamanda ulaşacağız.
                    </p><br>
                </div>

                <div class="col-sm-12 col-md-6">
                    <form action="anasayfa.php" method="post">
                        <input id="ad" name="ad" type="text" placeholder="Adınız" class="tm-input" required />
                        <input id="soyad" name="soyad" type="text" placeholder="Soyadınız" class="tm-input" required />
                        <input id="mail" name="mail" type="email" placeholder="Mail Adresiniz" class="tm-input" required />
                        <input id="tel" name="tel" type="text" placeholder="Telefon Numaranız" class="tm-input" required />
                        <input id="ileti" name="ileti" type="text" placeholder="Hangi Konu Hakkında Yardımcı Olabiliriz?" class="tm-input" required />
                        <button type="Gönder" name="ileti" class="btn tm-btn-submit">Gönder</button>
                    </form>
                </div>

                <div class="col-sm-12 col-md-6">

                    <div class="iletisim-item">
                        <a rel="nofollow" href="mailto:istanbul@hızırkargo.com.tr" class="item-link">
                            <i class="far fa-2x fa-envelope mr-4"></i>
                            <span class="mb-0">istanbul@hızırkargo.com.tr</span>
                        </a>
                    </div>

                    <div class="iletisim-item">
                        <a rel="nofollow" href="https://www.google.com/maps/place/Umraniye,+Elmal%C4%B1kent,+34764+%C3%9Cmraniye%2F%C4%B0stanbul/@41.0333271,29.0838504,14z/data=!3m1!4b1!4m5!3m4!1s0x14cac8f76d1706ed:0xd630fb5e3d1e2cf8!8m2!3d41.033329!4d29.10136" class="item-link">
                            <i class="fas fa-2x fa-map-marker-alt mr-4"></i>
                            <span class="mb-0">Ana Merkezimiz</span>
                        </a>
                    </div>

                    <div class="iletisim-item">
                        <a rel="nofollow" class="item-link">
                            <i class="fas fa-2x fa-phone-square mr-4"></i>
                            <span class="mb-0">505-873-4591</span>
                        </a>
                    </div>

                    <div class="iletisim-item">&nbsp;</div>

                </div>


            </div><!-- row ending -->

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
        background_image_parallax_2($("#hizmetler"), 0.80);

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
        $('.tm-foto').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: { enabled: true }
        });

        $('.tm-hizmetler-carousel').slick({
          dots: true,
          prevArrow: false,
          nextArrow: false,
          infinite: false,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                  slidesToShow: 1
              }
            }
          ]
        });

        // Gallery
        $('.tm-foto').slick({
          dots: true,
          infinite: false,
          slidesToShow: 5,
          slidesToScroll: 2,
          responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
        });
      });
    </script>
</body>
</html>