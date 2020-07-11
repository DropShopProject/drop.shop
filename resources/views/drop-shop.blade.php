<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'DropShop Home'])


<body>

	<!-- Navbar -->

@include('template/navbar')
<div class="container-fluid text-center">

<div class="dsbanner text-center">
  <img src="{{ url('img/dropshopbanner.jpg') }}" id="ds-banner" class="img-fluid">
</div>

</div>

	<!-- Slideshow -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 10</div>
    <img src="/img/t5.jpg" style="width:100%">
    <div class="text">Travis x Jordan</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">1 / 10</div>
    <img src="/img/t5.jpg" style="width:100%">
    <div class="text">Travis x Jordan</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 10</div>
    <img src="/img/tc.jpg" style="width:100%">
    <div class="text">Tyler the Creator x Converse</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">2 / 10</div>
    <img src="/img/tc.jpg" style="width:100%">
    <div class="text">Tyler the Creator x Converse</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">8 / 10</div>
    <img src="/img/tj.jpg" style="width:100%">
    <div class="text">Travis x Jordan 7's</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">8 / 10</div>
    <img src="/img/tj.jpg" style="width:100%">
    <div class="text">Travis x Jordan 7's</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 10</div>
    <img src="/img/puma.jpg" style="width:100%">
    <div class="text">Puma x GunnerStahl</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">4 / 10</div>
    <img src="/img/puma.jpg" style="width:100%">
    <div class="text">Puma x GunnerStahl</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 10</div>
    <img src="/img/russell.jpg" style="width:100%">
    <div class="text">Westbrook x Jordan</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">5 / 10</div>
    <img src="/img/russell.jpg" style="width:100%">
    <div class="text">Westbrook x Jordan</div>
  </div>

   <div class="mySlides fade">    
    <div class="numbertext">6 / 10</div>
    <img src="/img/j1.jpg" style="width:100%">
    <div class="text">Travis x Jordan 1's</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">6 / 10</div>
    <img src="/img/j1.jpg" style="width:100%">
    <div class="text">Travis x Jordan 1's</div>
  </div>


  <div class="mySlides fade">
    <div class="numbertext">7 / 10</div>
    <img src="/img/ferg.jpg" style="width:100%">
    <div class="text">A$AP Ferg x Jordan</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">7 / 10</div>
    <img src="/img/ferg.jpg" style="width:100%">
    <div class="text">A$AP Ferg x Jordan</div>
  </div>

 <div class="mySlides fade">
    <div class="numbertext">8 / 10</div>
    <img src="/img/ferg1.jpg" style="width:100%">
    <div class="text">A$AP Ferg x Nike</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">8 / 10</div>
    <img src="/img/ferg1.jpg" style="width:100%">
    <div class="text">A$AP Ferg x Nike</div>
  </div>

<div class="mySlides fade">
    <div class="numbertext">9 / 10</div>
    <img src="/img/tscott2.jpg" style="width:100%">
    <div class="text">Travis x Nike</div>
  </div>

<div class="mySlides fade-out">
    <div class="numbertext">9 / 10</div>
    <img src="/img/tscott2.jpg" style="width:100%">
    <div class="text">Travis x Nike</div>
  </div>

 <div class="mySlides fade">
    <div class="numbertext">10 / 10</div>
    <img src="/img/tscott3.jpg" style="width:100%">
    <div class="text">Travis x Dior x Jordan</div>
  </div>

   <div class="mySlides fade-out">
    <div class="numbertext">10 / 10</div>
    <img src="/img/tscott3.jpg" style="width:100%">
    <div class="text">Travis x Dior x Jordan</div>
  </div>


  <!-- Next and previous buttons -->
  <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
 -->
</div>
<!-- <br> -->

<!-- The dots/circles -->
<!-- <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
  <span class="dot" onclick="currentSlide(10)"></span>
</div> -->

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>

<div class="container-fluid">
  <h2 style="color: black; font-size: 50px;">ABOUT US</h2><br>
  <p style="color: black; font-size: 25px;">We strive to provide the SneakerHead community with a streamline hub that consists of product availability, price comparisons, and release information.</p>

</div>


@include('template/footer')
</body>

</html>