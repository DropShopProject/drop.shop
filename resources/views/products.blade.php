<!DOCTYPE html>
<html lang="em">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Drop Shop  - Products</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  
	<!-- CSS -->

	<link href="{{ url('css/dropshop.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<header>

		<!-- NAV BAR -->
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

	<!-- PRODUCTS Heading--> 
<div class="container-fluid">
	<h1 id="Prod-header"style="color: black; text-align: center; font-size: 58px;">PRODUCTS</h1>
</div>


<div class="container-fluid" id="products-container">

		<!-- Product tab -->

	<div class="row" id="product-tab">
		<div class="col-md">
			<ul class="list-group" style="max-width: 150px;">
  				<li class="list-group-item list-group-item-dark list-group-item-action">Travis Scott</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">Drake</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">Kanye</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">A$AP ROCKY</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">Ray Allen</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">Kobe Bryant</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">Kobe Bryant</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">Kobe Bryant</li>
			</ul>
		</div>
	</div>

		<!-- Product View -->

<div id="product-view">
		<div class="col-md-4" id="row1"><img src="{{ url('img/j1unc.jpg') }}" style="width: 275px; height: 200px;"><br>
			<p style="text-decoration: underline;">Jordan 1 Retro High x Off-White "UNC"</p>
		</div>
		<div class="col-md-4" id="row2"><img src="{{ url('img/yeezybr.jpg') }}" style="width: 275px; height: 200px;"><br>
			<p style="text-decoration: underline;">Adidas x Yeezy "Yeezy Boost 350 V2 Black Red"</p>
		</div>
		<div class="col-md-4" id="row3"><img src="{{ url('img/supnike.jpg') }}" style="width: 325px; height: 200px;"><br>
			<p style="text-decoration: underline;">Supreme x Nike "Air Force 1"</p>
		</div>
		<div class="col-md-4" id="row4"><img src="{{ url('img/nike97ud.jpg') }}" style="width: 325px; height: 200px;"><br>
			<p style="text-decoration: underline;">Nike x UNDFTD "Air Max 97"</p>
		</div>
		<div class="col-md-4" id="row5"><img src="{{ url('img/jdior.jpg') }}" style="width: 300px; height: 200px;"><br>
			<p style="text-decoration: underline;">Jordan 1 x Dior </p>
		</div>
		<div class="col-md-4" id="row6"><img src="{{ url('img/ts4.jpg') }}" style="width: 325px; height: 200px;"><br>
			<p style="text-decoration: underline;">Travis Scott x Jordan "Cactus Jack 4"</p>
		</div>
</div>





</div>


</body>
</html>
