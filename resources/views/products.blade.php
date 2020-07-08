<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'Drop Shop x Travis Scott'])
<body>
@include('template/navbar')


  <!-- PRODUCTS Heading-->
<div class="container-fluid text-center">

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
    <nav class="navbar navbar-expand-sm sticky-top" role="navigation" id="products-navbar">

       <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#products-bar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="products-bar">
            <ul class="navbar-nav" id="navbarItems-tab">
                  <li class="nav-item ml-auto dropdown">
                    <a class="nav-link dropdown-toggle mr-auto" href="#" id="athleteDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ATHLETES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="athleteDrop">
                      <a class="dropdown-item mx-auto" href="{{ route('products', ['collab_name' => 'kobe']) }}">KOBE BRYANT</a>
                      <a class="dropdown-item mx-auto" href="{{ route('products', ['collab_name' => 'ray-allen']) }}">RAY ALLEN
                      </a>
                    </div>
                  </li>
                  <li class="nav-item ml-auto dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="celebDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CELEBRITIES
                    </a>
                    <div class="dropdown-menu justify-content-center" aria-labelledby="celebDrop">
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'travis-scott']) }}">TRAVIS SCOTT
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'asap-rocky']) }}">A$AP ROCKY
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'yeezy']) }}">YEEZY
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'rihanna']) }}">RIHANNA
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'pharrell']) }}">PHARRELL
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'drake']) }}">DRAKE
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'kendrick-lamar']) }}">KENDRICK LAMAR
                      </a>
                    </div>
                  </li>
                  <li class="nav-item ml-auto dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="designDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DESIGNERS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="designDrop">
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'alex-wang']) }}">ALEXANDER WANG
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'just-don']) }}">JUST DON
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'fear-of-god']) }}">FEAR OF GOD</a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'off-white']) }}">OFF-WHITE
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'supreme']) }}">SUPREME
                      </a>
                    </div>
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
        </figcaption>
        </figure>
      </div>
      @endforeach
    </div>
  </div>

@include('template/footer')

</body>
</html>