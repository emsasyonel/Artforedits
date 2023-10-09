<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LW09</title>
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
    <h2 style = "text-align:center;margin-bottom:20px;font-size: 150%; font-family: 'Lucida Handwriting',cursive;">Robert Lewandowski</h2>
    <hr>
    <div class="img1">
        <img class="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/2019147183134_2019-05-27_Fussball_1.FC_Kaiserslautern_vs_FC_Bayern_M%C3%BCnchen_-_Sven_-_1D_X_MK_II_-_0228_-_B70I8527_%28cropped%29.jpg/220px-2019147183134_2019-05-27_Fussball_1.FC_Kaiserslautern_vs_FC_Bayern_M%C3%BCnchen_-_Sven_-_1D_X_MK_II_-_0228_-_B70I8527_%28cropped%29.jpg" alt="">
        <p class="text">Borussia Dortmund’un en önemli oyuncularından biri olan Robert Lewandowski, sarı siyahlı taraftarlar tarafından çok büyük tepkiyle karşılandığı bir karar verdi.Kulüple sözleşmesini uzatmayan oyuncu, Borussia Dortmund’un Bundesliga’daki en büyük rakibi olan Bayern Münih’e 2014 yazında bedelsiz olarak transfer oldu.İlk sezonunda Jupp Heynckess ile çalışan Robert Lewandowski, daha sonra Pep Guardiola’nın takımın başına gelmesiyle bambaşka bir futbol ekolünü, o ekolün en elit temsilcilerinin başında gelen İspanyol teknik direktörle öğrendi.Pep Guardiola da Barcelona günlerinin ardından başına geçtiği Bayern Münih’te, Robert Lewandowski’den çok etkilenmişti:“O tanıdığım en profesyonel futbolcu. Günün 24 saati doğru beslenmeyi, uyumayı ve antrenmanı düşünüyor. Her zaman en iyi durumda olmak için neye ihtiyacı olduğunu çok iyi biliyor.”Bayern Münih’te geçirdiği 7 sezonda 1’i UEFA Şampiyonlar Ligi olmak üzere toplam 22 kupa kazanan Polonyalı oyuncu, 375 maça çıkıp 344 gol atarak olağanüstü bir performans sergiledi.Hali hazırda En Hızlı Hat-Trick Yapan Oyuncu, En Kısa Sürede 4 Gol Atan Oyuncu, En Kısa Sürede 5 Gol Atan Oyuncu ve Oyuna Sonradan Girerek En Fazla Gol Atan Oyuncu gibi birçok rekoru elinde bulunduran Robert Lewandowski, Ballon d’Or ödülünü ise hiç kazanamadı.2019/20 sezonunda ödüle çok yaklaşmışken Ballon d’Or’un pandemiden dolayı verilmeyeceğini açıkladı. Bu kararın ardından dünya çapında 101 ülkeden 101 gazeteciyle bir oylama gerçekleştiren FourFourTwo, 2020 yılında dünyada yılın futbolcusu olarak Robert Lewandowski’yi belirledi.Bayern Münih’te kulüp tarihine geçen performanslar sergiledikten sonra 2022/23 sezonunda yeni bir meydan okuma aradığını söyleyen Polonyalı golcü, 45 milyon euro bonservis bedeli karşılığında Barcelona’ya transfer oldu.</p>
    </div>
        <!-- tanıtım bitiş -->


<!-- carousel başlangıç -->
<div class="row1">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/b19ee0b0-994e-4049-8482-f22ee6a446ad/dblp1kn-d566698a-29c8-4146-9d18-d7f4e95490db.jpg/v1/fill/w_1024,h_576,q_75,strp/robert_lewandowski_wallpaper_desktop_by_dianjay_dblp1kn-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTc2IiwicGF0aCI6IlwvZlwvYjE5ZWUwYjAtOTk0ZS00MDQ5LTg0ODItZjIyZWU2YTQ0NmFkXC9kYmxwMWtuLWQ1NjY2OThhLTI5YzgtNDE0Ni05ZDE4LWQ3ZjRlOTU0OTBkYi5qcGciLCJ3aWR0aCI6Ijw9MTAyNCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.EGQu5UraJH7qkRZe6-F6pmx2QIpNAuYk86ze26Dnc8M" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/originals/d1/8a/a1/d18aa1741a85d1dcc27e5bc19eae9810.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.wallpapersafari.com/46/43/y0rVEu.jpg" class="d-block w-100" alt="...">
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