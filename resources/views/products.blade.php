<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'Drop Shop Products'])
<body>
@include('template/navbar')


	<!-- PRODUCTS Heading--> 
<div class="container-fluid">
<h1 class="img-responsive" id="Prod-header"style="color: black; text-align: center; font-size: 70px;">PRODUCTS</h1>
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
        <img src="{{ url('img/supremelogo.jpg') }}" class="img-fluid" class="animation flipInX">
      </div>
      </div>
      <div class="col">
      <div id="logo-banner">
        <img src="{{ url('img/offwhitelogo.jpg') }}" class="img-fluid"  class="animation flipInX">
      </div>
      </div>
</div>
</div>


<section>
  
  <div class="container-fluid justify-content-center">

    <!-- PRODUCTS NAV BAR -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" role="navigation" id="products-navbar">

       <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#products-bar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="products-bar">
            <ul class="navbar-nav" id="navbarItems-tab">
                  <li class="nav-item ml-auto">
                    <a class="nav-link" href="{{ route('travisscott') }}">TRAVIS SCOTT</a>
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
                    <a class="nav-link" href="#">RAY ALLEN</a>
                  </li>
                  <li class="nav-item ml-auto">
                    <a class="nav-link" href="#">KOBE BRYANT</a>
                  </li>
                  <li class="nav-item ml-auto">
                    <a class="nav-link" href="#">KENDRICK LAMAR</a>
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
    <div class="row text-center" id="products1">
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/nike97ud.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">{{$TestShoe->brandName}}{{$TestShoe->productName}}"</figcaption>
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
    <div class="row text-center" id="products2">
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
        <img src="{{ url('img/supnike.jpg') }}" class="img-fluid z-depth-5 rounded" class="img-fluid" style="width: 275px; height: 200px;">
        <figcaption style="text-decoration: underline; font-size: 17px;">SUPREME x NIKE "AIR MAX 98'"</figcaption>
        </figure>
      </div>
    </div>











  </div>


</section>








</body>
<!-- Footer -->
<footer class="page-footer">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul>
      <li>
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
</html>
