<!--<!DOCTYPE HTML> -->
<html>
@include('template/headtag', ['title' => 'DropShop Register'])

    <body class="account-body">
        @include('template/navbar')
        <div class="account-box">
            <img src="/img/DSlogoNOBORDER.jpg" class="account-logo">
                <h1 class="account-h1">Welcome to DropShop</h1>
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                   <p class='account-p'>Name</p>
                   <input id="name" type="name" name="name" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>

                   <br>
                   <!--Checks for correct Email -->
                   <p class='account-p'>Email</p>
                   <input id="email" type="email" name="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   
                   <br>
                   
                    <!-- Password Field -->
                    <p class='account-p'>Password</p>
                    <input id="password" type="password" name ="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">

                    <br>

                    <!--Checks for matching passwords -->
                    <p class='account-p'>Confirm Password</p>
                    <input id="password-confirm" type="password" name ="password_confirmation" placeholder="Confirm Password" class="form-control" required autocomplete="new-password">


                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Login Button-->
                    <input class="orange-button"type="submit" value="Register">
                </form>
            </div>

@include('template/footer')

    </body>
</html>