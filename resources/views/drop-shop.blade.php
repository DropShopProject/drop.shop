<!DOCTYPE html>
<html lang="em">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Drop Shop</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  
	<!-- CSS -->

	<link href="{{ url('css/dropshop.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

	<!-- Navbar -->

	<header>
		<nav class="navbar navbar-expand-md bg-light navbar-light">
			

		<div class="navbar-header">
			 <a class="navbar-brand" href="{{ route('drop-shop') }}"><img src="{{ url('img/DSlogo.jpg') }}" class="img-responsive logo"></a>
		</div>


 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>

	 	<div class="collapse navbar-collapse justify-content-center" id="navbarItems">
    		<ul class="navbar-nav navbar-center" id="navbarItems">
      			<!-- <li class="nav-item">
        			<a class="nav-link" href="#">Home</a>
      			</li> -->
      			<li class="nav-item">
        			<a class="nav-link" href="{{ route('products') }}">PRODUCTS</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="{{ route('calendar') }}">CALENDAR</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
      			</li>

            <!-- User icon button -->
            <li>
              <a href="#" class="btn btn-info btn-lg btn-light" id="User-icon">
              <span class="glyphicon glyphicon-user"></span> 
              </a>
           </li>

    		</ul>
        
  
  	</div>


		
		</nav>

	</header>

	<!-- Slideshow -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 10</div>
    <img src="/img/j1.jpg" style="width:100%">
    <div class="text">Travis x Jordan 1's</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">1 / 10</div>
    <img src="/img/j1.jpg" style="width:100%">
    <div class="text">Travis x Jordan 1's</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 10</div>
    <img src="/img/ferg.jpg" style="width:100%">
    <div class="text">A$AP Ferg x Jordan</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">2 / 10</div>
    <img src="/img/ferg.jpg" style="width:100%">
    <div class="text">A$AP Ferg x Jordan</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 10</div>
    <img src="/img/ferg1.jpg" style="width:100%">
    <div class="text">A$AP Ferg x Nike</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">3 / 10</div>
    <img src="/img/ferg1.jpg" style="width:100%">
    <div class="text">A$AP Ferg x Nike</div>
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
    <img src="/img/t5.jpg" style="width:100%">
    <div class="text">Travis x Jordan</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">6 / 10</div>
    <img src="/img/t5.jpg" style="width:100%">
    <div class="text">Travis x Jordan</div>
  </div>

<div class="mySlides fade">
    <div class="numbertext">7 / 10</div>
    <img src="/img/tc.jpg" style="width:100%">
    <div class="text">Tyler the Creator x Converse</div>
  </div>

  <div class="mySlides fade-out">
    <div class="numbertext">7 / 10</div>
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
  <p style="color: black; font-size: 25px;">We strive to provide the SneakerHead community with a streamline hub that consists of product availability, price comaprisons, and release information.</p>

</div>

</body>
<footer class="footer">
  <div class="panel-footer" align="center">
    <span class="text-muted" align="center" style="font-size: 14px;">Derived From The Community, For The Community.</span>
  </div>
</footer>
</html>