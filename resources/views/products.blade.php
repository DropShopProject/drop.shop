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
  <div class="row text-center">
    <div class="col col-lg-1 col-md-6 col-sm-auto col-xs-auto">
      <div id="product-tab">
          <ul class="list-group">
          <li class="list-group-item list-group-item-dark list-group-item-action"><a href="{{ route('travisscott') }}"><span style="font-size: 14px;">TRAVIS SCOTT</span></a></li>
          <li class="list-group-item list-group-item-dark list-group-item-action"><span style="font-size: 14px;">DRAKE</span></li>
          <li class="list-group-item list-group-item-dark list-group-item-action"><span style="font-size: 14px;">KANYE</span></li>
          <li class="list-group-item list-group-item-dark list-group-item-action"><span style="font-size: 14px;">A$AP ROCKY</span></li>
          <li class="list-group-item list-group-item-dark list-group-item-action"><span style="font-size: 14px;">RAY ALLEN</span></li>
          <li class="list-group-item list-group-item-dark list-group-item-action"><span style="font-size: 14px;">KOBE BRYANT</span></li>
          <li class="list-group-item list-group-item-dark list-group-item-action"><span style="font-size: 14px;">KENDRICK LAMAR</span></li>
          <li class="list-group-item list-group-item-dark list-group-item-action"><span style="font-size: 14px;">OFF WHITE</span></li>
          </ul>
      </div>
    </div>


    <div class="col col-lg-11">
      <div id="logo banner">
      <table width="100%" id="products-table">
      <tbody>
        <tr>
          <td width="20%">
            <img src="{{ url('img/nikelogo.jpg') }}"><br>
          </td>
          <td width="20%">
            <img src="{{ url('img/adidaslogo.jpg') }}"><br>
          </td>
          <td width="20%">
            <img src="{{ url('img/jordanlogo.jpg') }}"><br>
          </td>
          <td width="20%">
            <img src="{{ url('img/supremelogo.jpg') }}"><br>
          </td> 
          <td width="20%">
            <img src="{{ url('img/offwhitelogo.jpg') }}"><br>
          </td> 
        </tr>
      </tbody>
    </table>
    </div>
    </div>






  </div>

<div class="row text-center">
  <div class="col col-lg-12 col-md-auto col-sm-auto">
  <div id="products1">
    <table width="100%" id="products-table">
      <tbody>
        <tr>
          <td width="33%">
            <img src="{{ url('img/j1unc.jpg') }}" style="width: 275px; height: 200px;"><br>
            <span style="text-decoration: underline; font-size: 14px;">JORDAN 1 RETRO HIGH x OFF-WHITE "UNC"</span>
          </td>
          <td width="33%">
            <img src="{{ url('img/yeezybr.jpg') }}" style="width: 275px; height: 200px;"><br>
          <span style="text-decoration: underline; font-size: 14px;">ADIDAS x YEEZY "YEEZY BOOST 350 V2 BLACK RED"</span>
          </td>
          <td width="33%">
            <img src="{{ url('img/supnike.jpg') }}" style="width: 325px; height: 200px;"><br>
            <span style="text-decoration: underline; font-size: 14px;">SUPREME x NIKE "AIR FORCE 1"</span>
          </td> 
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>

<div class="row text-center">
  <div class="col col-lg-12 col-md-auto col-sm-auto">
  <div id="products2">
    <table width="100%" id="products-table">
      <tbody>
        <tr>
          <td width="33%">
            <img src="{{ url('img/nike97ud.jpg') }}" style="width: 300px; height: 200px;"><br>
            <span style="text-decoration: underline; font-size: 14px;">NIKE x UNDFTD "AIR MAX 97"</span>
          </td>
          <td width="33%">
            <img src="{{ url('img/jdior.jpg') }}" style="width: 275px; height: 200px;"><br>
            <span style="text-decoration: underline; font-size: 14px;">JORDAN 1 x DIOR</span>
          </td>
          <td width="33%">
            <img src="{{ url('img/ts4.jpg') }}" style="width: 325px; height: 200px;"><br>
            <span style="text-decoration: underline; font-size: 14px;">TRAVIS SCOTT x JORDAN "CACTUS JACK 4"</span>
          </td> 
        </tr>
      </tbody>
      </table>
</div>
</div>
</div>




</div>








</body>
</html>
