<!--Katherine Hecht
    Home Page-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
    <title>Home</title>
  </head>
  <body>
  <?php include("header.php"); ?>
  <div class="row">
      <!-- Slideshow container -->
    <div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
        <img id="howitworkscol" src="images/howitworkscol.png" height=375px width=375px>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
        <img id="bottlecol" src="images/bottlecol.png" height=375px width=375px>
        <div class="text" color="white">step 1.</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img id="fillingcol" src="images/fillingcol.png" height=375px width=375px>
      <div class="text">step 2.</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img id="delivercol" src="images/delivercol.png" height=375px width=375px>
      <div class="text">step 3.</div>
    </div>
      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </div>
  <script type="text/javascript" src="slider.js"></script>
  <div class="row" background-image= url(images/newbackground.png)>
  </div>
  <?php include("footer.php"); ?>
  </body>
</html>
