<html>
@include('template/headtag', ['title' => 'DropShop Login'])
    <body class="password-reset-body">
        @include('template/navbar')
        <div class="password-reset-box">
            <img src="/img/DSlogo3.jpg" class="login-logo">
                <h1 class="account-h1">Reset Password</h1>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <p class='account-p'>Email</p>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                    <input class="orange-button" type="submit" value="Send Password Reset Link">
                
                </form>
            </div>
            @include('template/footer')
    </body>
</html>