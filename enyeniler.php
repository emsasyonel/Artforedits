<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
    <title>En Yeniler</title>
  </head>
<body>
<div class="container">
      <div class="slide-container active">
        <div class="slide">
          <div class="content">
            <h3>Karakterini Seç</h3>
            <p>İnsta açıklamarı.</p>
            <a href="#" class="btn">Videoyu İzle</a>
          </div>
          <video src="./en yeniler video/0718(1).mp4" muted autoplay loop></video>
        </div>
      </div>
      <div class="slide-container">
        <div class="slide">
          <div class="content">
            <h3>Barbie</h3>
            <p>İnsta açıklamaları.</p>
            <a href="#" class="btn">Videoyu İzle</a>
          </div>
          <video src="./en yeniler video/0406(3).mp4" muted autoplay loop></video>
        </div>
      </div>
      <div class="slide-container">
        <div class="slide">
          <div class="content">
            <h3>Eden Hazard</h3>
            <p>İnsta açıklamaları.</p>
            <a href="#" class="btn">Videoyu İzle</a>
          </div>
          <video src="./en yeniler video/Sequence 01.mp4" muted autoplay loop></video>
        </div>
      </div>
      <div id="next" onclick="next()"> > </div>
      <div id="prev" onclick="prev()"> < </div>
</div>
<script>
  let slides = document.querySelectorAll('.slide-container');
  let index = 0;
  function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
  }
  function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
  }
</script>
</body>
</html>