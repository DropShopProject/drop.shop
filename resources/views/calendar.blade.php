<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'Drop Shop Calendar'])
<body>

@include('template/navbar')

  <!-- CALENDAR Heading--> 
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

    <!-- FIRST ROW AUGUST -->
    <h2 class="img-responsive" class="augustHeader" style="color: black; text-align: center; font-size: 40px; padding-bottom: 30px;">AUGUST<h2>

    <div class="row text-center product-leftAK" id="products1" id="august">


      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/AJ12INDIGO.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">AIR JORDAN 12 "INDIGO"</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$190 - AUGUST</figcaption>
        </figure>
      </div>

       <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/ADIDAS700V3ARZ.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">ADIDAS x YEEZY 700 V3 "ARZARETH"</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$200 - AUGUST</figcaption>
        </figure>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/OFFWHITEJ4BLACK.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">OFF-WHITE x AIR JORDAN 4 BLACK</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$200 - AUGUST</figcaption>
        </figure>
      </div>

    </div> 

    <!-- SECOND ROW AUGUST --> 

    <div class="row text-center product-left1AK" id="products1" id="august">

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/KITHNIKE.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">KITH x NIKE AIR FORCE 1</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$120 - AUGUST</figcaption>
        </figure>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/NIKEFOGRAID.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">NIKE x FOG RAID "FRIENDS & FAMILY"</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$190 - AUGUST</figcaption>
        </figure>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/SUPNIKEAIR.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">SUPREME x NIKE AIR MAX PLUS</figcaption>
        <figcaption style="text-decoration: underline; font-size: 17px;">$TBD - AUGUST</figcaption>
        </figure>
      </div>


    </div>



</div>

</section>
@include('template/footer')


<script>
  window.sr = ScrollReveal();
  sr.reveal('.product-leftAK', {

      duration: 2500,
      origin: 'left',
      distance:'300px'


  });
  sr.reveal('.product-rightAK', {

      duration: 2500,
      origin: 'right',
      distance: '300px',
      viewFactor: 0.4


  });
   sr.reveal('.product-left1AK', {

      duration: 2500,
      origin: 'top',
      distance: '300px',
      viewFactor: 0.4


  });
    sr.reveal('.augustHeader', {

      duration: 2500,
      origin: 'top',
      distance: '300px',
      viewFactor: 0.3


  });  
    sr.reveal('.julyHeader', {

      duration: 2500,
      origin: 'top',
      distance: '300px',
      viewFactor: 0.3


  });   
 

</script>
</body>




</html>