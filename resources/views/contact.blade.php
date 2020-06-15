<!DOCTYPE html>
<html lang="em">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Drop Shop  - Contact Us</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


	<!-- CSS -->

	<link href="{{ url('css/dropshop.css') }}" rel="stylesheet" type="text/css">

  <style type="text/css">
    #social {
      opacity: 0.8;
    }
    #social:hover {
      opacity: 1.0;
    }
    h1 {
      padding: 100px 0px;
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
	</header>
  <section>
    <h1 class="text-center" style="font-size: 60px;">CONTACT</h1>
    <div class="container-fluid justify-content-center">
      <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
          <a href="mailto:dropshop4935@gmail.com">
            <span style="font-size:200px;" class="glyphicon glyphicon-envelope"></span>
          </a>
          <a href="mailto:dropshop4935@gmail.com">
          </a>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <a href="https://instagram.com/dropshop4935?igshid=1ci1k571w1da5">
          <img src="{{ url('img/ig-logo.png') }}" height="200" width="200" class="img-fluid" id="social">
          </a>
          <a href="https://instagram.com/dropshop4935?igshid=1ci1k571w1da5">
          </a>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <a href="https://twitter.com/DropShop4935">
          <img src="{{ url('img/twitter-logo.png') }}" height="200" width="200" class="img-fluid" id="social">
          </a>
          <a href="https://twitter.com/DropShop4935">
          </a>
        </div>
      </div>
    </div>
  </section>



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
