<html>
@include('template/headtag', ['title' => 'DropShop Password Reset'])
    <body class="login-body">
        @include('template/navbar')
        <div class="registerbox">
            <img src="/img/DSlogo3.jpg" class="login-logo">
                <h1 class="login-h1">Reset Password</h1>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                   <p class='login-p'>Email</p>
                   <input id="email" type="email" name="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                   @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <p class='login-p'>Password</p>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter New Password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <p class='login-p'>Confirm Password</p>
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm New Password" name="password_confirmation" required autocomplete="new-password">

                    <input class="orange-button" type="submit" value="Reset Password">
                </form>
        </div>
    @include('template/footer')
    </body>
</html>