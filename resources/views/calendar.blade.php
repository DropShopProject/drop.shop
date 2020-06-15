<!DOCTYPE html>
<html lang="em">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Drop Shop  - Products</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  
  <!-- CSS -->

  <link href="{{ url('css/dropshop.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
  <header>

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-md bg-light navbar-light" role="navigation">


        <div class="navbar-header">
             <a class="navbar-brand" href="{{ route('drop-shop') }}"><img src="{{ url('img/DSlogo.jpg') }}" class="img-responsive logo"></a>
        </div>


         <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

         <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            <ul class="navbar-nav" id="navbarItems">

                  <li class="nav-item ml-auto">
                    <a class="nav-link" href="{{ route('products') }}">PRODUCTS</a>
                  </li>
                  <li class="nav-item ml-auto">
                    <a class="nav-link" href="{{ route('calendar') }}">CALENDAR</a>
                  </li>
                  <li class="nav-item ml-auto">
                    <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                  </li>
            <!-- User icon button -->
              <li>
                  <a href="#" class=" nav-link btn btn-info btn-lg btn-light" id="User-icon">
                  <span class="glyphicon glyphicon-user"></span> 
                  </a>
              </li>
            </ul>
      </div>
        </nav>
  </header>

  <!-- CALENDAR Heading--> 
<div class="container-fluid">
<h1 class="img-responsive" id="Prod-header"style="color: black; text-align: center; font-size: 70px;">CALENDAR</h1>
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

  <!--SHOES -->
  <section>
    <div class="row text-center">
      <div class="col-md-4 d-fledx justify-content-center">
      </div>
    </div>

  </section>>







</body>


<footer class="footer">
  <div class="panel-footer" align="center">
    <span class="text-muted" align="center" style="font-size: 14px;">Derived From The Community, For The Community.</span>
  </div>
</footer>




</html>