<!--<!DOCTYPE HTML> -->
<html>
@include('template/headtag', ['title' => 'DropShop Login'])

    <body class="account-body">
        @include('template/navbar')
        <div class="account-box">
            <img src="/img/DSlogoNOBORDER.jpg" class="account-logo">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <h1 class="account-h1">Welcome Back</h1>

                   <!-- Email field with autofill functionality -->
                   <p class='account-p'>Email</p>
                   <input id="email" type="email" name="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   <br>

                    <!-- Password field with autofill functionality -->
                    <p class='account-p'>Password</p>
                    <input id="password" type="password" name ="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

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
                    <a href="{{ route('register') }}">Don't Already Have an Account?</a><br>

                    <!--Login Button-->
                    <input class="orange-button" type="submit" value="Login">

            </form>
        </div>
        @include('template/footer')
    </body>

</html>
