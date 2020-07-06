<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'DropShop Products'])

<body>

@include('template/navbar')


  <!-- PRODUCTS Heading--> 
<div class="container-fluid text-center">
<!-- <h1 class="img-responsive" id="Prod-header"style="color: black; text-align: center; font-size: 70px;">PRODUCTS</h1> -->


<div class="dsbanner text-center">
  <img src="{{ url('img/dropshopbanner.jpg') }}" id="ds-banner" class="img-fluid">
</div>

<div class="row text-center">
  <div class="col">
  <img src="{{ url('img/logobanner.jpg') }}" id="logo-banner" class="img-fluid">
  </div>
</div>

</div>


<section>
  
  <div class="container-fluid justify-content-center" id="container">

    <!-- PRODUCTS NAV BAR -->
    <nav class="navbar navbar-expand-md navbar-light sticky-top" role="navigation" id="products-navbar">

      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#products-bar" aria-controls="products-navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="products-bar">
      <ul class="navbar-nav" id="navbarItems-tab">
        <li class="nav-item ml-auto">
          <a class="nav-link" href="{{ route('products', ['collab_name' => 'travis-scott']) }}">TRAVIS SCOTT</a>
        </li>
        <li class="nav-item ml-auto">
          <a class="nav-link" href="#">DRAKE</a>
        </li>
        <li class="nav-item ml-auto">
          <a class="nav-link" href="#">KANYE</a>
        </li>
        <li class="nav-item ml-auto">
          <a class="nav-link" href="#">A$AP ROCKY</a>
        </li>
        <li class="nav-item ml-auto">
          <a class="nav-link" href="#">KOBE BRYANT</a>
        </li>
        <li class="nav-item ml-auto">
          <a class="nav-link" href="#">OFF-WHITE</a>
        </li>
        <li class="nav-item ml-auto">
          <a class="nav-link" href="#">SUPREME</a>
        </li>
      </ul>
      </div>
    </nav>

    <!-- FIRST ROW OF SHOES -->
    <div class="row text-center product-leftAK" id="products1">
      
      <div class="col-md-4 d-flex justify-content-center">
            <figure class="figure">
            <img src="{{ url('img/nike97ud.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
            <figcaption style="text-decoration: underline; font-size: 17px;">{{$TestShoe->brandName}}{{$TestShoe->productName}}</figcaption>
            </figure>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/jdior.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">JORDAN 1 RETRO HIGH X DIOR</figcaption>
        </figure>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/j1unc.jpg') }}" class="img-fluid z-depth-5 rounded" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">JORDAN 1 RETRO HIGH X OFF-WHITE "UNC"</figcaption>
        </figure>
      </div>
     
    </div>

    <!-- SECOND ROW OF SHOES -->
    <div class="row text-center product-rightAK" id="products2">
     
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/ts4.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">TRAVIS SCOTT x JORDAN "CACTUS JACK 4"</figcaption>
        </figure>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/yeezybr.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">ADIDAS x YEEZY "YEEZY BOOST 350 V2 BLACK RED"</figcaption>
        </figure>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/supnike.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">SUPREME x NIKE "AIR MAX 98'"</figcaption>
        </figure>
      </div>
      
    </div>


</div>

</section>


@include('template/footer')

<script>
  window.sr = ScrollReveal();
  sr.reveal('.product-leftAK', {

      duration: 3500,
      origin: 'left',
      distance:'300px',
      viewFactor: 0.3


  });
  sr.reveal('.product-rightAK', {

      duration: 3500,
      origin: 'right',
      distance: '300px',
      viewFactor: 0.3


  });
   sr.reveal('.product-left1AK', {

      duration: 3500,
      origin: 'top',
      distance: '300px',
      viewFactor: 0.3


  });

</script>
</body>


</html>
