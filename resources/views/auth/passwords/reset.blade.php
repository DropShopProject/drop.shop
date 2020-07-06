<html>
@include('template/headtag', ['title' => 'DropShop Password Reset'])
    <body class="account-body">
        @include('template/navbar')
        <div class="account-box">
            <img src="/img/DSlogoNOBORDER.jpg" class="account-logo">
                <h1 class="account-h1">Reset Password</h1>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                   <p class='account-p'>Email</p>
                   <input id="email" type="email" name="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                   <br>

                   @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <p class='account-p'>Password</p>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter New Password" required autocomplete="new-password">

                    <br>

                    <p class='account-p'>Confirm Password</p>
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm New Password" name="password_confirmation" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input class="orange-button" type="submit" value="Reset Password">
                </form>
        </div>
    @include('template/footer')
    </body>
</html>