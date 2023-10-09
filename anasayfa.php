<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artforedits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      body{
        background-image: url(Wilson\ \(1\).png);
      }
      nav{
        display: flex;
        text-align: center;
        align-items: center;

        
      }
      #carouselExampleFade{
        display: flex;
        flex-direction: row;
        width: 50%;
        align-items: center;
      }
      .photo-container {
        background-color: white; /* Arka plan rengi beyaz */
        display: flex; /* Fotoğrafları yatay olarak dizmek için */
        justify-content: space-between; /* Fotoğrafları sağa yaslamak için */
        padding-left: 1px; /* Sol çizgiyle fotoğraf arasında boşluk olmaması için */
        flex-wrap: nowrap;
      }
      .photo-container img {
        display: block; 
        border: 1px solid black;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        object-fit: cover;
      }
      .photo-item {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .photo-item p{
        text-align: center;
        margin-top: 5px;
        font-weight: bolder;
      }
      #carouselExampleFade{
        align-items: center;
        left: 350px;
      }
      .carouselbaslik{
        letter-spacing: 2px;
        font-weight: bolder;
        font-size: 150%; font-family: 'Lucida Handwriting',cursive;
      }
      .encokizlenenler{
        font-size: 150%; font-family: 'Lucida Handwriting',cursive;
        font-weight: bolder;
      }.card-container{
        display: flex;
        justify-content: space-between;
      }
      .card{
        right: 20px;
        padding: 10px;
      }
      
    </style>
  </head>
  <body>
    <div class="container">
    <!-- NAVBAR BAŞLANGIÇ -->
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
    <!-- NAVBAR BİTİŞ -->
    <!-- PHOTO CONTAİNER BAŞLANGIÇ -->
<div class="navbar"></div>

<!-- Fotoğraflar İçin Konteyner -->
<div class="photo-container">
    <div  class="photo-item">
      <img src="./photo container img/indir.jpg" alt="">
      <a style="text-decoration: none; color:black;" href="cristiano.php"><p>Cristiano Ronaldo</p></a>
    </div>
    <div class="photo-item">
    <img src="./photo container img/indir (1).jpg" alt="">
    <a style="text-decoration: none; color:black;" href="lionelmessi.php"><p>Lionel Messi</p></a>
    </div>
    <div class="photo-item">
    <img src="./photo container img/indir (2).jpg" alt="">
    <a style="text-decoration: none; color:black;" href="neymar.php"><p>Neymar</p></a>
    </div>
    <div class="photo-item">
    <img src="./photo container img/indir (3).jpg" alt="">
    <a style="text-decoration: none; color:black;" href="lewandowski.php"><p>Robert Lewandowski</p></a>
    </div>
    <div class="photo-item">
    <img src="./photo container img/indir (4).jpg" alt="">
    <a style="text-decoration: none; color:black;" href="benzema.php"><p>Benzema</p></a>
    </div>
    <div class="photo-item">
    <img src="./photo container img/indir (5).jpg" alt="">
    <a style="text-decoration: none; color:black;" href="vini.php"><p>Vini Jr.</p></a>
    </div>
</div>
<hr>

    <!-- PHOTO CONTAİNER BİTİŞ -->
    <!-- CAROUSEL BAŞLIK -->
    <div class="carouselbaslik">
    <h2>En Yeniler</h2>
    </div>
    <hr>
    <!-- CAROUSEL BAŞLANGIÇ -->
    <div class="row">
        <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./carousel img/indir (6).jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./carousel img/indir (7).jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./carousel img/indir (8).jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>
    </div>
    <hr>
    <!-- CAROUSEL BİTİŞ -->
    <!-- EN ÇOK İZLENENLER -->
    <div class="encokizlenenler">
      <h2>En Çok İzlenenler</h2>
    </div>
    <div class="card-container">
    <div class="card" style="width: 18rem;">
  <img src="./en çok izlenenler/images (2).jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">El-Trio</h5>
    <p class="card-text">Messi Neymar ve Suarezli bir video kötü olabilir mi?. İzleyelim görelim :D.</p>
    <a href="#" class="btn btn-primary">Videoya Git</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="./en çok izlenenler/indir (8).jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">FiFa</h5>
    <p class="card-text">FiFa'nın yeni videosu yayınlandı. Şaka şaka sadece benim yaptığım basit bir reklam denemesi. Beğenmeyi unutmayın.</p>
    <a href="#" class="btn btn-primary">Videoya Git</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="./en çok izlenenler/indir (9).jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Andrés Iniesta</h5>
    <p class="card-text">Arda Turan için Messi Neymar Suarezden daha etkileyici olan bir isim. Bakalım neler yapmış.</p>
    <a href="#" class="btn btn-primary">Videoya Git</a>
  </div>
</div>
</div>
<!-- EN ÇOK İZLENENLER BİTİŞ -->
<hr>
<!-- EN ALT KISIM BAŞLANGIÇ -->

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

















    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>