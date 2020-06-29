<!--<!DOCTYPE HTML> -->
<html>
@include('template/headtag', ['title' => 'DropShop Login'])

    <body class="login-body">
        @include('template/navbar')
        <div class="loginbox">
            <img src="/img/DSlogo3.jpg" class="login-logo">
                <h1 class="login-h1">Login</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                   <!-- Email field with autofill functionality -->
                   <p class='login-p'>Email</p>
                   <input id="email" type="email" name="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   
                   
                    

                    <!-- Password field with autofill functionality -->
                    <p class='login-p'>Password</p>
                    <input id="password" type="password" name ="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                    
                    

                    <!--Login Button-->
                    <input type="submit" value="Login">

                    <!--Checks for correct Email -->
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Checks for correct password -->
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>
                    <!-- Forgot Password Link -->
                    <a href="{{ route('password.request') }}">Forgot Your Password?</a><br>


                    <!--Register Link-->  
                    <a href="{{ route('register') }}">Register</a><br>


                
                
            </form>
        </div>
        @include('template/footer')
    </body>
</head>
</html>