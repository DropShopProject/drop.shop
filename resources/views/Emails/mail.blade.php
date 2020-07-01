<!DOCTYPE html>

<style>
	#container {
  width: 50vw;
}
#ig1 {
  width: 33%!important;
}
.navbar-brand{
	margin: 0;
	padding: 0; 
}

.glyphicon-user{
	font-size: 1.45em;
 
}

.logo{
	height: 120px;
	padding-right: 15px;
	padding-left: 5px;
}

.navbar-nav.navbar-center { 
    position: absolute; 
    left: 50%; 
    transform: translatex(-50%);
   /* font-family: Poppins;*/
    font-family: nimbus-sans, sans-serif;
    background-color:  #e5d5b4; 
} 

#navbarItems > li {
	padding-left: 75px;
	padding-right: 75px;
	font-size: 1.9em;
}

/*#navbarItems{
  padding-right: 40px;
}*/


#User-icon{
	float: right;
	padding-bottom: 9px;

}
.glyphicon glyphicon-user{
  background-color:  #e5d5b4;
}
.nav-item > li {
	/*font-size: 2.4em !important;*/
}

.nav a{
	/*font-size: 1.4em !important;*/
}

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
  padding-top: 80px;
}

/* Hide the images by default */
.mySlides {
  display: none;
}


/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade-in;
  -webkit-animation-duration: 0.1s;
  animation-name: fade-in;
  animation-duration: 5s;
}

.fade-out{
	-webkit-animation-name: fade-out;
	-webkit-animation-duration: 0.1s;
	animation-name: fade-out;
	animation-duration: 5s;
}

@-webkit-keyframes fade-in {
  from {opacity: .000001}
  to {opacity: .95}
}

@-webkit-keyframes fade-out {
  from {opacity: .95}
  to {opacity: 0}
}

@keyframes fade-in {
  from {opacity: .000001}
  to {opacity: .95}
}

h2{
	text-align: center;
	padding-top: 120px;
	font-family: nimbus-sans, sans-serif;
	font-weight: 400;
}

p{
	text-align: center;
	padding-top: 80px;
	font-family: nimbus-sans, sans-serif;
  color: #e9782f;
}

h1{
	padding-top: 50px;
  color: #e9782f;
}

body {
  padding-bottom:120px;
}

#logo-banner{
  padding-top: 20px;
}

.footer{
  padding-top:  120px;
}
#Prod-header{
  text-align: center;
}
#navbarItems-tab > li{
  padding-left: 50px;
  padding-right: 50px;
  font-size: 1.5em;
}
.caption{
  display: block;
}
#products1{
   padding-top: 90px;
  padding-bottom: 80px;
}
#products2{
   padding-top: 90px;
  padding-bottom: 80px;
}
#products-navbar{
  background-color:  #e5d5b4;
}

.social-wrapper {
  text-align: center;
}
.social-wrapper ul li {
  display: inline;
  margin: 0 5px;
}
.twitter-logo:hover
.insta-logo:hover
.gmail-logo:hover{
  opacity: 1.0;
  filter: alpha(opacity=100);
}
.footer-nav span {
  text-align: center;
}
#unstyled > li{
  padding-right: 60px;
  padding-left: 60px;
}
#size:hover {
  border-color: black!important;
  cursor: pointer;
}
figcaption:hover {
  color: red;
  cursor: pointer;
}
#logo {
  opacity: 0.8;
}
#logo:hover {
  opacity: 1.0;
}
h4 {
  color: green;
}

.julyHeader{
  padding-top: 20px;
  padding-bottom: -50px;
}

.augustHeader{
  padding-top: 20px;
  padding-bottom: -50px;
}
#shoe-image{
box-shadow: 3px 3px 4px #000000;
}


</style>


<html>

<div class="container-fluid">
<!-- <h1 class="img-responsive" id="Prod-header"style="color: black; text-align: center; font-size: 70px;">CALENDAR</h1> -->
<div class="row text-center" id="logo-banner">
  <div class="col">
      <div id="logo-banner">
        <img src="{{ url('img/nikelogo.jpg') }}" class="img-fluid" class="animation flipInX">
      </div>
      </div>
      <div class="col">
      <div id="logo-banner">
        <img src="{{ url('img/adidaslogo.jpg') }}" class="img-fluid" class="animation flipInX">
      </div>
      </div>
      <div class="col">
      <div id="logo-banner">
        <img src="{{ url('img/jordanlogo.jpg') }}" class="img-fluid" class="animation flipInX">
      </div>
      </div>
      <div class="col">
      <div id="logo-banner">
        <img src="{{ url('img/CJ.jpg') }}" class="img-fluid" class="animation flipInX">
      </div>
      </div>
      <div class="col">
      <div id="logo-banner">
        <img src="{{ url('img/offwhitelogo.jpg') }}" class="img-fluid"  class="animation flipInX">
      </div>
      </div>
</div>
</div>

<!-- <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#july">Section 1</a></li>
          <li><a href="#section2">Section 2</a></li>
          <li><a href="#section3">Section 3</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
 -->
   <section>

  <div class="container-fluid justify-content-center">

    <!-- PRODUCTS NAV BAR -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top" role="navigation" id="products-navbar">

      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#products-bar" aria-controls="products-navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="products-bar">
      <ul class="navbar-nav" id="navbarItems-tab">
        <li>
          <a class="nav-link" href="#july">JULY</a>
        </li>
        <li>
          <a class="nav-link" href="#august">AUGUST</a>
        </li>
        <li>
          <a class="nav-link" href="#september">SEPTEMBER</a>
        </li>
      </ul>
      </div>
    </nav>


  <!-- JULY SHOES -->
    <h2 class="img-responsive" class="julyHeader" style="color: black; text-align: center; font-size: 40px; padding-bottom: 30px;">JULY<h2>

    <div class="row text-center product-leftAK" id="products1" id="july">


      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
          <img src="{{ url('img/offwhite-rubberduck.jpg') }}"  id="shoe-image"
          class="img-fluid" style="width: 275px; height: 200px;">
          <figcaption style="text-decoration: underline; font-size: 17px;">OFF-WHITE x NIKE AIR RUBBER DUNK (UNIVERSITY GOLD)</figcaption>
          <figcaption style="text-decoration: underline; font-size: 17px;">$189 - JULY 1ST</figcaption>
        </figure>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
          <img src="{{ url('img/NIKEALPHA.jpg') }}"
          id="shoe-image" class="img-fluid" style="width: 275px; height: 200px;">
          <figcaption style="text-decoration: underline; font-size: 17px;">NIKE AIR ZOOM ALPHAYFLY NEXT% "WATERMELON"</figcaption>
          <figcaption style="text-decoration: underline; font-size: 17px;">$250 - JULY 2ND</figcaption>
        </figure>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
          <img src="{{ url('img/ADIDASCGD.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
          <figcaption style="text-decoration: underline; font-size: 17px;">ADIDAS x CRAIG GREEN GRADDFA AKHA</figcaption>
          <figcaption style="text-decoration: underline; font-size: 17px;">$300 - JULY 2ND</figcaption>
        </figure>
      </div>

    </div>

    <!-- SECOND ROW JULY -->
  <div class="row text-center product-left1AK" id="products2" id="july">

   <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
          <img src="{{ url('img/ADIDASPW.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
          <figcaption style="text-decoration: underline; font-size: 17px;">ADIDAS x PHARRELL WILLIAMS SUPERSTAR</figcaption>
          <figcaption style="text-decoration: underline; font-size: 17px;">$140 - JULY 3RD</figcaption>
        </figure>
      </div>

   <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
          <img src="{{ url('img/NIKEKD13.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
          <figcaption style="text-decoration: underline; font-size: 17px;">NIKE x KD 13 "USA"</figcaption>
          <figcaption style="text-decoration: underline; font-size: 17px;">$150 - JULY 3RD</figcaption>
        </figure>
      </div>

       <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
          <img src="{{ url('img/NIKEPG4.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
          <figcaption style="text-decoration: underline; font-size: 17px;">NIKE x PG 4 "USA"</figcaption>
          <figcaption style="text-decoration: underline; font-size: 17px;">$110 - JULY 3RD</figcaption>
        </figure>
      </div>

    </div>

    <!-- THIRD ROW JULY -->
    <div class="row text-center product-rightAK" id="products1" id="july">

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
          <img src="{{ url('img/NIKEFOG1BL.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
          <figcaption style="text-decoration: underline; font-size: 17px;">NIKE x FOG 1 "TRIPLE BLACK"</figcaption>
          <figcaption style="text-decoration: underline; font-size: 17px;">$350 - JULY 4TH</figcaption>
        </figure>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/jdiorclndr.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">JORDAN 1 RETRO HIGH x DIOR</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$2,000 - JULY 7TH</figcaption>
        </figure>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/ADIDAS700BONE.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">ADIDAS x YEEZY 700 MNVN "BONE"</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$220 - JULY 11TH</figcaption>
        </figure>
      </div>

    </div>

    <!-- FOURTH ROW OF JULY -->
    <div class="row text-center product-left1AK" id="products1" id="july">

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/ADIDAS350ZYON.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">ADIDAS x YEEZY 350 V2 "ZYON"</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$220 - JULY 18TH</figcaption>
        </figure>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/JORDAN12GP.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">AIR JORDAN 12 "GARY PAYTON"</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$190 - JULY 18TH</figcaption>
        </figure>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/OFFWHITEJ4SP.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">OFF-WHITE x AIR JORDAN 4 SP WMNS</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$120 - JULY 25TH</figcaption>
        </figure>
      </div>

    </div>
</html>

