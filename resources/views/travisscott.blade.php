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
  </style>

</head>
<body>
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
  <section>
    <h1 class="text-center" style="font-size: 60px;">
      TRAVIS SCOTT x NIKE
    </h1>
    <div class="container-fluid justify-content-center">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <!-- MODAL TRIGGER -->
          <figure class="figure">
            <img src="{{ url('img/MochaHigh.jpg') }}" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#testModal" class="figure-img img-fluid rounded">
            <figcaption class="figure-caption text-center" style="text-decoration: underline; font-size: 14px;">
              JORDAN 1 RETRO HIGH x TRAVIS SCOTT "MOCHA"
            </figcaption>
            <figcaption class="figure-caption text-center">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#testModal">
              Compare prices and sizes
              </button>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- The Modal -->
  <div class="modal" id="testModal">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-center">Size & Price Chart</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h3>Available Sizes from StockX:</h3>
        <p>
          <span style="font-size: 120px;">&#9744;<br></span>
          Price #1:<br>
          Price #2:<br>
        </p>
        <h3>Available Sizes from Goat:</h3>
        <p>
          <span style="font-size: 120px;">&#9744;<br></span>
          Price #1:<br>
          Price #2:<br>
        </p>
        <h3>Available Sizes from FlightClub:</h3>
        <p>
          <span style="font-size: 120px;">&#9744;<br></span>
          Price #1:<br>
          Price #2:<br>
        </p>
      </div>

      <!-- Modal footer -->
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
    <span class="text-muted" align="center" style="font-size: 14px;">Derived From The Community, For The Community.</span>
  </div>
</footer>

</html>