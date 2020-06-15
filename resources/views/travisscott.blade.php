<!DOCTYPE hmtm>
<html lang="em">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Drop Shop</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- CSS -->

	<link href="{{ url('css/dropshop.css') }}" rel="stylesheet" type="text/css">

  <style type="text/css">
    h1 {
      padding: 100px 0px;
    }
    h4 {
      color: green;
    }
    #size:hover {
      border-color: black!important;
      cursor: pointer;
    }
    #logo {
      opacity: 0.8;
    }
    #logo:hover {
      opacity: 1.0;
    }
    figcaption {
      text-decoration: underline;
      font-size: 18px;
      cursor: pointer;
    }
    figcaption:hover {
      color: red;
    }
    #logo-banner {
      padding-top: 50px;
    }
    #products-navbar {
      padding-top: ;
    }
    #social {
      opacity: 0.5;
    }
    #social:hover {
      opacity: 1.0;
    }
  </style>

</head>
<body>
	<header>

		<nav class="navbar navbar-expand-md bg-light navbar-light" role="navigation">
      

    <div class="navbar-header">
       <a class="navbar-brand" href="{{ route('drop-shop') }}"><img src="{{ url('img/DSlogo.jpg') }}" class="img-responsive logo"></a>
    </div>


    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav" id="navbarItems">

            <!-- User icon button -->
              <li>
                  <a href="#" class=" nav-link btn btn-info btn-lg btn-light" id="User-icon">
                  <span class="glyphicon glyphicon-user"></span> 
                  </a>
              </li>
            <li class="nav-item ml-auto">
              <a class="nav-link" href="{{ route('products') }}">PRODUCTS</a>
            </li>
            <li class="nav-item ml-auto">
              <a class="nav-link" href="{{ route('calendar') }}">CALENDAR</a>
            </li>
            <li class="nav-item ml-auto">
              <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
            </li>
        </ul>
      </div>    
    </nav>

              <!-- LOGO BANNER -->

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
	</header>
  <section>
    <h1 class="text-center" style="font-size: 70px;">
      TRAVIS SCOTT x NIKE
    </h1>
    <div class="container-fluid justify-content-center">

              <!-- FIRST ROW -->

      <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
          <!-- MODAL TRIGGER -->
          <figure class="figure">
            <img src="{{ url('img/MochaHigh.jpg') }}" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#mochaHighModal" class="img-fluid justify-content-center" id="size">
            <figcaption class="figure-caption text-center p-3"data-toggle="modal" data-target="#mochaHighModal">
              JORDAN 1 RETRO HIGH x TRAVIS SCOTT "MOCHA"
            </figcaption>
            <figcaption class="figure-caption text-center p-3">
              <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#mochaHighModal">
              Compare prices and sizes
              </button>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <figure class="figure">
            <img src="{{ url('img/mochaLow.jpg') }}" class="figure-img img-fluid rounded" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#mochaLowModal" id="size">
            <figcaption class="figure-caption text-center p-3"data-toggle="modal" data-target="#mochaLowModal">JORDAN 1 RETRO LOW x TRAVIS SCOTT "MOCHA"
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
            <img src="{{ url('img/ts4.jpg') }}" class="figure-img img-fluid rounded" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#ts4Modal" id="size">
            <figcaption class="figure-caption text-center p-3"data-toggle="modal" data-target="#ts4Modal">JORDAN 4 RETRO x TRAVIS SCOTT "CACTUS JACK "
            </figcaption>
            <figcaption class="figure-caption text-center p-3">
              <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#ts4Modal">
              Compare prices and sizes
              </button>
            </figcaption>
          </figure>
        </div>
      </div>
              <!-- SECOND ROW -->
      <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
          <!-- MODAL TRIGGER -->
          <figure class="figure">
            <img src="{{ url('img/retroOlive.jpg') }}" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#oliveModal" class="figure-img img-fluid rounded" id="size">
            <figcaption class="figure-caption text-center p-3"data-toggle="modal" data-target="#oliveModal">
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
            <img src="{{ url('img/afSail.jpg') }}" class="figure-img img-fluid rounded" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#afSailModal" id="size">
            <figcaption class="figure-caption text-center p-3"data-toggle="modal" data-target="#afSailModal">NIKE AF1 LOW x TRAVIS SCOTT "SAIL"
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
            <img src="{{ url('img/ts270.jpg') }}" class="figure-img img-fluid rounded" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#ts270Modal" id="size">
            <figcaption class="figure-caption text-center p-3"data-toggle="modal" data-target="#ts270Modal">NIKE AIR MAX 270 x TRAVIS SCOTT "CACTUS TRAILS"
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
              <!-- MOCHA HIGH MODAL -->
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



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	
</body>
<footer class="footer">
  <div class="panel-footer" align="center">
    <span class="text-muted" align="center" style="font-size: 14px;">&copy;Drop Shop Project 2020
    </span><br>
    <div class="container-fluid justify-content-center">
      <div class="row">
        <div class="col d-flex justify-content-center">
          <a href="mailto:dropshop4935@gmail.com">
            <span style="font-size:20px; color: black;" class="glyphicon glyphicon-envelope" id="social"></span>
          </a>
        </div>
        <div class="col d-flex justify-content-center">
          <a href="https://instagram.com/dropshop4935?igshid=1ci1k571w1da5">
          <img src="{{ url('img/gramFoot.png') }}" height="20" width="20" class="img-fluid" id="social">
          </a>
        </div>
        <div class="col d-flex justify-content-center">
          <a href="https://twitter.com/DropShop4935">
          <img src="{{ url('img/twtFoot.png') }}" height="20" width="20" class="img-fluid" id="social">
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

</html>