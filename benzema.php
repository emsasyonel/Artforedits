<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Benzi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .img1{
            
            margin-left: 100px;
            border: 1px solid white;
            box-shadow: 5px 5px 3px gray;
            display: flex;
            align-items: center;
        }
        .image{
            width: 50%;
            max-width: 300px;
            object-fit: cover;
        }
        .text{
            width: 50%;
            margin-left: 100px;
        }
        .text::first-letter{
            font-size: 25px;
        }
        .row1{
          width: 50%;
          margin-top: 25px;
          margin-left: 489.5px;
        }
        .carousel-inner{
          height: 800px;
          object-fit: cover;
          align-items: center;
        }
        .carousel-inner img {
            image-rendering: auto;  /* Varsayılan değer */
            /* veya */
            image-rendering: crisp-edges;  /* Piksel tabanlı görseller için */
            object-fit: cover;
        }


    </style>
</head>
  <body>
<!-- navbar başlangıç -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img style="width: 45px; border:2px solid black;border-radius:50%;" src="./logo/333462182_616888286949714_8037899921914414019_n.jpg" alt="">
    <a class="navbar-brand" href="#">Artforedits</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Videolar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Görseller</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<hr>
<!-- navbar bitiş -->


        <!-- tanıtım başlangiç -->
    <h2 style = "text-align:center;margin-bottom:20px;font-size: 150%; font-family: 'Lucida Handwriting',cursive;">Karim Benzema</h2>
    <hr>
    <div class="img1">
        <img class="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Karim_Benzema_2021.jpg/220px-Karim_Benzema_2021.jpg" alt="">
        <p class="text">Karim Mostafa Benzema (telaffuzu /bɛnˈzeɪmə/; d. 19 Aralık 1987; Lyon, Fransa), Cezayir asıllı Fransız millî futbolcudur. Suudi Profesyonel Ligi takımlarından El-İttihad'da forma giymektedir. Tüm zamanların en iyi forvetlerinden biri olarak kabul edilen Benzema, gol atma yeteneğinin yanı sıra teknik becerileri, vizyonu ve sahadaki çok yönlülüğüyle tanınan yaratıcı bir forvettir. Real Madrid'in tüm zamanlardaki en golcü ikinci futbolcusu ve en çok asist yapan futbolcusudur. Benzema, Real Madrid ile dört La Liga, üç Copa del Rey ve beş UEFA Şampiyonlar Ligi şampiyonluğu dahil olmak üzere 24 kupa kazanmıştır.Cezayirli bir ailenin çocuğu olarak Lyon'da dünyaya gelen Benzema, kariyerine 2005 yılında doğduğu şehrin kulübü Olympique Lyonnais'de başladı ve üç Ligue 1 şampiyonluğu kazanmasına katkıda bulundu. 2008 yılında Ligue 1 Yılın Oyuncusu seçildi ve Yılın Takımı'nda yer alarak ligi gol kralı olarak tamamladı ve dördüncü lig şampiyonluğunu ve ilk Coupe de France'ını kazandı. 2009 yılında Benzema, 35 milyon Euro değerinde bir anlaşmayla Real Madrid'e katılarak o zamanki Fransız futbol rekoru transferine konu oldu. İlk sezonunda kendini kabul ettirmekte zorlandıktan sonra, sonunda kulüpte istikrarlı bir gol atma oranı yakaladı ve özellikle Cristiano Ronaldo ve Gareth Bale ile birlikte - BBC olarak adlandırılan - 2014'ten 2018'e kadar dört Şampiyonlar Ligi zaferinin ayrılmaz bir parçası olan üçlünün bir parçası oldu.</p>
    </div>
        <!-- tanıtım bitiş -->


<!-- carousel başlangıç -->
<div class="row1">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://wallpaperswide.com/download/karim_benzema_4k-wallpaper-3840x2160.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images6.alphacoders.com/120/1200067.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images5.alphacoders.com/117/1178292.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<hr>
<br>
<br>

<!-- carousel bitiş -->

<footer>
        <div class="footer-top">
            <div class="container">
                <div class="footer-day-time">
                    <div class="row">
                        <div class="col-md-8">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        
                        <h4>Hakkımızda</h4>
                        <p>Biz, iki lise arkadaşı, Emre Bayram Saat(emsasyonel) ve Yunus Bitken(isot) bu sayfayı kurduk. İlk baştaki amacımız kendi aramızda zevkine yaptığımız videoları paylaşmak ve onları orada bir nebze depolamak olduğu için çok önem vermedik. Sonrasında gelen yoğun ilgi sebebiyle bu sayfayı kurmaya karar verdik. Artık her yerdeyiz ve size iyi videolar yapmak için uğraşıyoruz. Lütfen bizi takip edin.</p>

                    </div>

                    <div class="col-md-4">
                        <h4>İletişim</h4>
                        <ul class="address1">
                            <li><i class="fa fa-map-marker"></i>Tekke Mahallesi Toki Konutları D-7 Blok Kat 3 Daire 8</li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:#"></a></li>
                            <li><i class="fa-regular fa-phone" aria-hidden="true"></i> <a href="tel:12 34 56 78 90">+09 0546 556 3080</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h4>Bizi Takip Et</h4>
                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/profile.php?viewas=100000686899395&id=100084181925951"><img style="width: 30px;" src="./icon/images (1).png" alt=""></a></li>
                            <li><a href="https://www.instagram.com/artforedits/"><img style="width: 30px;" src="./icon/3621464.png" alt=""></a></li>
                            <li><a href="https://twitter.com/emsasyonel"><img style="width: 30px;" src="./icon/free-twitter-logo-icon-2429-thumb.png" alt=""></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        </p>
                    </div>
                    <div class="col-sm-7">
                        <ul>
                            <li><a href="#">Anasayfa</a></li>
                            <li><a href="#">Videolar</a></li>
                            <li><a href="#">Görseller</a></li>
                            <li><a href="#">İletişim</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>















        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>