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


</body>
</html>
