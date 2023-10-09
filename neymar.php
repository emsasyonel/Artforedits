<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ney10</title>
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
    <h2 style = "text-align:center;margin-bottom:20px;font-size: 150%; font-family: 'Lucida Handwriting',cursive;">Neymar</h2>
    <hr>
    <div class="img1">
        <img class="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Bra-Cos_%281%29.jpg/270px-Bra-Cos_%281%29.jpg" alt="">
        <p class="text">Neymar 2009 Campeonato Paulista'da Yılın Genç Futbolcusu ödülünün sahibi olmuştur.[5] 2011 ve 2012 yılında Güney Amerika'da Yılın Futbolcusu seçilmiştir.[6][7] 2011 yılında Santos - Flamengo maçının 26. dakikasında attığı gol, FIFA tarafından 2011 yılının en iyi golü seçilmiştir ve Neymar 2011 FIFA Puskás Ödülü'nün sahibi olmuştur.[8][9][10] 2013 yılında Millî takımıyla almış olduğu FIFA Konfederasyonlar Kupası turnuvasının sonunda Adidas Altın Top ödülüne layık görülmüştür.[11] Bu turnuvada çıktığı 5 maçta (412 dakika) 4 gol atmıştır[12] ve turnuvanın final maçında maçın adamı seçilmiştir.[11]Neymar, 5 Şubat 1992 yılında Brezilya'nın Mogi das Cruzes kentinde dünyaya gözlerini açtı.[13] 2003 yılında daha 11 yaşındayken Santos'ta futbol kariyerine başladı. 2009 yılında Santos ile profesyonel kariyerinin ilk maçına çıkmadan önce, kulübün altyapı takımıyla birçok maçta yer aldı.[13] Profesyonel kariyerinin ilk senesinde (2009) Campeonato Paulista'da Yılın Genç Futbolcusu ödülünün sahibi oldu ve o yıl Copa Libertadores'in alınmasında en çok payı olan oyunculardan biriydi.[5][13][14] İlk millî maçını daha 18 yaşındayken ABD'ye karşı oynadı ve takımının 2-0 kazandığı maçta bir de gol attı.[13][15][16] 2013-14 sezonu başlamadan önce 57 milyon avro karşılığında Barcelona'ya transfer oldu.[4][17] Sezon başlamadan önce yapılan 2013 Konfederasyon Kupası'nda 10 numarasını giydiği Brezilya millî takımı kupanın, Neymar ise 5 maçta attığı 4 gol[12] ile turnuvanın sonunda verilen Altın Top ödülünün sahibi oldu.</p>
    </div>
        <!-- tanıtım bitiş -->


<!-- carousel başlangıç -->
<div class="row1">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://hd.wallpaperswide.com/thumbs/neymar_jr__barcelona_brazil-t2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://w0.peakpx.com/wallpaper/404/618/HD-wallpaper-neymar-brazil-futbol-jr-marimar-neymar-jr-psg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://c4.wallpaperflare.com/wallpaper/399/970/365/neymar-soccer-clubs-fc-barcelona-wallpaper-preview.jpg" class="d-block w-100" alt="...">
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