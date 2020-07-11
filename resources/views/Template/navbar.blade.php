
	<header>

		<!-- NAV BAR -->
		<nav class="navbar navbar-expand-md navbar-light" role="navigation">


        <div class="navbar-header">
             <a class="navbar-brand" href="{{ route('drop-shop') }}"><img src="{{ url('img/DSL2.jpg') }}" class="img-responsive logo"></a>
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
                    <a class="nav-link" href="{{ route('socials') }}">SOCIALS</a>
                  </li>
            
                       <!-- User icon button -->
              <li class="nav-item dropdown">
        
                  <a class="nav-link dropdown-toggle btn btn-lg" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>
                  </a>
              
              
              
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                @if (Auth::check())
                  <li><a class="dropdown-item" href="{{ route('account') }}">My Account</a></li>
                  <li><a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
                    @csrf</li>
                @else
                  <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                  <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                @endif
                </ul>

                <!-- Logout Form needed for logout to work in dropdown -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>

                
              </li>
            </ul>
      </div>
        </nav>
	</header>