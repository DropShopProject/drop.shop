
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
              <li class="nav-item dropdown">
        
                  <a class="nav-link dropdown-toggle btn btn-lg btn-light" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>
                  </a>
              
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
              </ul>

              </li>
            </ul>
      </div>
        </nav>
	</header>