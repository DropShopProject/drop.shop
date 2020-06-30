<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'Drop Shop x Travis Scott'])
<body>
@include('template/navbar')


  <!-- PRODUCTS Heading-->
<div class="container-fluid">
<h1 class="img-responsive text-uppercase" id="Prod-header"style="color: black; text-align: center; font-size: 70px;">{{$shoes[0]->collab_name}} x {{$shoes[0]->brandName}}</h1>
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
                    <a class="nav-link" href="#">TRAVIS SCOTT</a>
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
      @foreach ($shoes as $shoe)
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url($shoe->imgFilePath) }}" class="img-fluid" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#{{$shoe->modalName}}" id="size">
        <figcaption style="text-decoration: underline; font-size: 17px;" data-toggle="modal" data-target="#{{$shoe->modalName}}">
          {{$shoe->productName}} X {{$shoe->collab_name}}
        </figcaption>
        <figcaption class="figure-caption text-center p-3">
          <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#{{$shoe->modalName}}">
          Compare prices and sizes
          </button>
        </figcaption>
        </figure>
      </div>
      @endforeach
    </div>
  </div>


</section>
  @foreach ($shoes as $shoe)
  <div class="modal" id="{{$shoe->modalName}}">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">

              <!-- MOCHA HIGH MODAL HEADER -->
      <div class="modal-header">
        <h3 class="modal-title text-center">Lowest Prices Available:</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

              <!-- MOCHA HIGH MODAL BODY -->
      <div class="modal-body">
        <div class="container">
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
@endforeach

@include('template/footer')

</body>
</html>
