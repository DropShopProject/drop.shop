<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'Drop Shop x Travis Scott'])
<body>
@include('template/navbar')


  <!-- PRODUCTS Heading--> 
<div class="container-fluid">
<h1 class="img-responsive" id="Prod-header"style="color: black; text-align: center; font-size: 70px;">TRAVIS SCOTT x NIKE</h1>
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
    <div class="row text-center" id="products1">
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/MochaHigh.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#mochaHighModal" id="size">
        <figcaption style="text-decoration: underline; font-size: 17px;" data-toggle="modal" data-target="#mochaHighModal">
          JORDAN 1 RETRO HIGH x TRAVIS SCOTT "MOCHA"
        </figcaption>
        <figcaption class="figure-caption text-center p-3">
          <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#mochaHighModal">
          Compare prices and sizes
          </button>
        </figcaption>
        </figure>
        <p>
        </p>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/mochaLow.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#mochaLowModal" id="size">
        <figcaption style="text-decoration: underline; font-size: 17px;" data-toggle="modal" data-target="#mochaLowModal">
        JORDAN 1 RETRO LOW x TRAVIS SCOTT "MOCHA"
        </figcaption>
        <figcaption class="figure-caption text-center p-3">
          <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#mochaLowModal">
          Compare prices and sizes
          </button>
        </figcaption>
        </figure>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/ts4c.jpg') }}" class="img-fluid z-depth-5 rounded" class="img-fluid" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#ts4Modal" id="size">
        <figcaption style="text-decoration: underline; font-size: 17px;" data-toggle="modal" data-target="#ts4Modal">JORDAN 4 RETRO x TRAVIS SCOTT "CACTUS JACK"
        </figcaption>
        <figcaption class="figure-caption text-center p-3">
          <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#ts4Modal">
          Compare prices and sizes
          </button>
        </figcaption>
        </figure>
      </div>
    </div>

    <!-- SECOND ROW OF SHOES -->
    <div class="row text-center" id="products2">
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/retroOlive.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#oliveModal" id="size">
        <figcaption style="text-decoration: underline; font-size: 17px;" data-toggle="modal" data-target="#oliveModal">
        JORDAN 6 RETRO x TRAVIS SCOTT "OLIVE"
        </figcaption>
        <figcaption class="figure-caption text-center p-3">
          <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#oliveModal">
          Compare prices and sizes
          </button>
        </figcaption>
        </figure>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/afSail.jpg') }}" class="img-fluid" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#afSailModal" id="size">
        <figcaption style="text-decoration: underline; font-size: 17px;" data-toggle="modal" data-target="#afSailModal">
        ADIDAS x YEEZY "YEEZY BOOST 350 V2 BLACK RED"
        </figcaption>
        <figcaption class="figure-caption text-center p-3">
          <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#afSailModal">
          Compare prices and sizes
          </button>
        </figcaption>
        </figure>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url('img/ts270.jpg') }}" class="img-fluid z-depth-5 rounded" class="img-fluid" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#ts270Modal" id="size">
        <figcaption style="text-decoration: underline; font-size: 17px;" data-toggle="modal" data-target="#ts270Modal">
        NIKE AIR MAX 270 x TRAVIS SCOTT "CACTUS TRAILS"
        </figcaption>
        <figcaption class="figure-caption text-center p-3">
          <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#ts270Modal">
            Compare prices and sizes
          </button>
        </figcaption>
        </figure>
      </div>
    </div>











  </div>


</section>

              <!-- MODALS BEGIN -->
<div class="modal" id="mochaHighModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">

              <!-- MOCHA HIGH MODAL HEADER -->
      <div class="modal-header">
        <h3 class="modal-title text-center">Sizes & Prices</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

              <!-- MOCHA HIGH MODAL BODY -->
      <div class="modal-body">
        <h3 class="pb-3 text-center">Size Availability Chart:</h3>
        <div class="container">
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6</span><br>
              <a href="https://www.flightclub.com/air-jordan-1-high-og-ts-sp-sail-black-dark-mocha-806920" target="_blank">
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://stockx.com/air-jordan-1-retro-high-travis-scott" target="_blank">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://www.goat.com/sneakers/travis-scott-x-air-jordan-1-retro-high-og-cd4487-100" target="_blank">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
              </a>
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 13</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <h3 class="p-3 text-center">FlightClub Prices Starting At:</h3>
          <a href="https://www.flightclub.com/air-jordan-1-high-og-ts-sp-sail-black-dark-mocha-806920" target="_blank">
          <h4 class="text-center">&dollar;1300</h4>
          </a>
          <h3 class="p-3 text-center">StockX Prices Starting At:</h3>
          <a href="https://stockx.com/air-jordan-1-retro-high-travis-scott" target="_blank">
          <h4 class="text-center">&dollar;1090</h4>
          </a>
          <h3 class="p-3 text-center">Goat Prices Starting At:</h3>
          <a href="https://www.goat.com/sneakers/travis-scott-x-air-jordan-1-retro-high-og-cd4487-100" target="_blank">
          <h4 class="text-center">&dollar;1090</h4>
          </a>
        </div>
      </div>

      <!-- MODAL FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- MOCHA LOW MODAL -->
  <div class="modal" id="mochaLowModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">

              <!-- MOCHA LOW MODAL HEADER -->
      <div class="modal-header">
        <h3 class="modal-title text-center">Sizes & Prices</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

              <!-- MOCHA LOW MODAL BODY -->
      <div class="modal-body">
        <h3 class="pb-3 text-center">Size Availability Chart:</h3>
        <div class="container">
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6</span><br>
              <a href="https://www.flightclub.com/air-jordan-1-low-og-sp-t-black-sail-dark-mocha-146236" target="_blank">
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://stockx.com/air-jordan-1-retro-low-travis-scott" target="_blank">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://www.goat.com/sneakers/travis-scott-x-air-jordan-1-low-mocha-cq4277-001" target="_blank">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
              </a>
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 13</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <h3 class="p-3 text-center">FlightClub Prices Starting At:</h3>
          <a href="https://www.flightclub.com/air-jordan-1-low-og-sp-t-black-sail-dark-mocha-146236" target="_blank">
          <h4 class="text-center">&dollar;905</h4>
          </a>
          <h3 class="p-3 text-center">StockX Prices Starting At:</h3>
          <a href="https://stockx.com/air-jordan-1-retro-low-travis-scott" target="_blank">
          <h4 class="text-center">&dollar;653</h4>
          </a>
          <h3 class="p-3 text-center">Goat Prices Starting At:</h3>
          <a href="https://www.goat.com/sneakers/travis-scott-x-air-jordan-1-low-mocha-cq4277-001" target="_blank">
          <h4 class="text-center">&dollar;700</h4>
          </a>
        </div>
      </div>

      <!-- MODAL FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
              <!-- TS4 MODAL -->
  <div class="modal" id="ts4Modal">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">

              <!-- TS4 MODAL HEADER -->
      <div class="modal-header">
        <h3 class="modal-title text-center">Sizes & Prices</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

              <!-- TS4 MODAL BODY -->
      <div class="modal-body">
        <h3 class="pb-3 text-center">Size Availability Chart:</h3>
        <div class="container">
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6</span><br>
              <a href="https://www.flightclub.com/air-jordan-4-retro-university-blue-black-803976" target="_blank">
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://stockx.com/air-jordan-4-retro-travis-scott-cactus-jack" target="_blank">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://www.goat.com/sneakers/travis-scott-x-air-jordan-4-retro-cactus-jack-308497-406" target="_blank">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
              </a>
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 13</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <h3 class="p-3 text-center">FlightClub Prices Starting At:</h3>
          <a href="https://www.flightclub.com/air-jordan-4-retro-university-blue-black-803976" target="_blank">
          <h4 class="text-center">&dollar;1125</h4>
          </a>
          <h3 class="p-3 text-center">StockX Prices Starting At:</h3>
          <a href="https://stockx.com/air-jordan-4-retro-travis-scott-cactus-jack" target="_blank">
          <h4 class="text-center">&dollar;850</h4>
          </a>
          <h3 class="p-3 text-center">Goat Prices Starting At:</h3>
          <a href="https://www.goat.com/sneakers/travis-scott-x-air-jordan-4-retro-cactus-jack-308497-406" target="_blank">
          <h4 class="text-center">&dollar;395</h4>
          </a>
        </div>
      </div>

      <!-- MODAL FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- OLIVE MODAL -->
  <div class="modal" id="oliveModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">

              <!-- OLIVE MODAL HEADER -->
      <div class="modal-header">
        <h3 class="modal-title text-center">Sizes & Prices</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

              <!-- OLIVE MODAL BODY -->
      <div class="modal-body">
        <h3 class="pb-3 text-center">Size Availability Chart:</h3>
        <div class="container">
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6</span><br>
              <a href="https://www.flightclub.com/air-jordan-6-retro-sp-medium-olive-infrared-black-148799" target="_blank">
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://stockx.com/air-jordan-6-retro-travis-scott" target="_blank">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://www.goat.com/sneakers/travis-scott-x-air-jordan-6-retro-medium-olive-cn1084-200" target="_blank">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
              </a>
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 13</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <h3 class="p-3 text-center">FlightClub Prices Starting At:</h3>
          <a href="https://www.flightclub.com/air-jordan-6-retro-sp-medium-olive-infrared-black-148799" target="_blank">
          <h4 class="text-center">&dollar;695</h4>
          </a>
          <h3 class="p-3 text-center">StockX Prices Starting At:</h3>
          <a href="https://stockx.com/air-jordan-6-retro-travis-scott" target="_blank">
          <h4 class="text-center">&dollar;590</h4>
          </a>
          <h3 class="p-3 text-center">Goat Prices Starting At:</h3>
          <a href="https://www.goat.com/sneakers/travis-scott-x-air-jordan-6-retro-medium-olive-cn1084-200" target="_blank">
          <h4 class="text-center">&dollar;560</h4>
          </a>
        </div>
      </div>

      <!-- MODAL FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
              <!-- AFSAIL MODAL -->
  <div class="modal" id="afSailModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">

              <!-- AFSAIL MODAL HEADER -->
      <div class="modal-header">
        <h3 class="modal-title text-center">Sizes & Prices</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

              <!-- AFSAIL MODAL BODY -->
      <div class="modal-body">
        <h3 class="pb-3 text-center">Size Availability Chart:</h3>
        <div class="container">
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6</span><br>
              <a href="https://www.flightclub.com/air-force-1-low-travis-scott-sail-gum-light-brown-sail-804551" target="_blank">
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://stockx.com/nike-air-force-1-low-travis-scott-sail" target="_blank">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://www.goat.com/sneakers/travis-scott-x-air-force-1-sail-aq4211-101" target="_blank">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
              </a>
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 13</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <h3 class="p-3 text-center">FlightClub Prices Starting At:</h3>
          <a href="https://www.flightclub.com/air-force-1-low-travis-scott-sail-gum-light-brown-sail-804551" target="_blank">
          <h4 class="text-center">&dollar;1250</h4>
          </a>
          <h3 class="p-3 text-center">StockX Prices Starting At:</h3>
          <a href="https://stockx.com/nike-air-force-1-low-travis-scott-sail" target="_blank">
          <h4 class="text-center">&dollar;900</h4>
          </a>
          <h3 class="p-3 text-center">Goat Prices Starting At:</h3>
          <a href="https://www.goat.com/sneakers/travis-scott-x-air-force-1-sail-aq4211-101" target="_blank">
          <h4 class="text-center">&dollar;410</h4>
          </a>
        </div>
      </div>

      <!-- MODAL FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
              <!-- TS270 MODAL -->
  <div class="modal" id="ts270Modal">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">

              <!-- TS270 MODAL HEADER -->
      <div class="modal-header">
        <h3 class="modal-title text-center">Sizes & Prices</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

              <!-- TS270 MODAL BODY -->
      <div class="modal-body">
        <h3 class="pb-3 text-center">Size Availability Chart:</h3>
        <div class="container">
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6</span><br>
              <a href="https://www.flightclub.com/travis-scott-x-air-max-270-react-eng-ps-cactus-trails-ts-am270-ps" target="_blank">
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://stockx.com/nike-air-max-270-react-travis-scott" target="_blank">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              </a>
              <a href="https://www.goat.com/sneakers/travis-scott-x-air-max-270-react-ct2864-200" target="_blank">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
              </a>
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 6.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 7.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 8.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 9.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 10.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <div class="row">
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 11.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 12.5</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
            <div class="col border rounded text-center text-nowrap m-1" id="size">
              <span style="font-size: 20px;">US 13</span><br>
              <img src="{{ url('img/fcLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/stockxLogo.jpg') }}" height="14" width="20" class="" id="logo">
              <img src="{{ url('img/goatLogo.png') }}" height="14" width="20" class="" id="logo">
            </div>
          </div>
          <h3 class="p-3 text-center">FlightClub Prices Starting At:</h3>
          <a href="https://www.flightclub.com/travis-scott-x-air-max-270-react-eng-ps-cactus-trails-ts-am270-ps" target="_blank">
          <h4 class="text-center">&dollar;N/A</h4>
          </a>
          <h3 class="p-3 text-center">StockX Prices Starting At:</h3>
          <a href="https://stockx.com/nike-air-max-270-react-travis-scott" target="_blank">
          <h4 class="text-center">&dollar;384</h4>
          </a>
          <h3 class="p-3 text-center">Goat Prices Starting At:</h3>
          <a href="https://www.goat.com/sneakers/travis-scott-x-air-max-270-react-ct2864-200" target="_blank">
          <h4 class="text-center">&dollar;500</h4>
          </a>
        </div>
      </div>

      <!-- MODAL FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>






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
