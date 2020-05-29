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
        			<a class="nav-link" href="#">CONTACT</a>
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

<div class="container-fluid">
	<h1 id="Prod-header"style="color: black; text-align: center; font-size: 58px;">PRODUCTS</h1>
</div>

<div class="container">

	<div class="row" id="product-tab">
		<div class="col-md">
			<ul class="list-group">
  				<li class="list-group-item list-group-item-dark list-group-item-action">Cras justo odio</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">Dapibus ac facilisis in</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">Morbi leo risus</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">Porta ac consectetur ac</li>
  				<li class="list-group-item list-group-item-dark list-group-item-action">Vestibulum at eros</li>
			</ul>
		</div>
	</div>

		<!-- Product View -->

		<div class="col-lg" id="row1">
			Product 1.
		</div>
		<div class="col-lg" id="row1">
			Product 2.
		</div>
		<div class="col-lg" id="row1">
			Product 3.
		</div>
		<!-- Row 2 -->
<!-- 	<div class="row" id="row2">
		<div class="col">
			Product 5.
		</div>
		<div class="col">
			Product 6.
		</div>
		<div class="col">
			Product 7.
		</div>
	</div> -->
</div>

</body>
</html>
