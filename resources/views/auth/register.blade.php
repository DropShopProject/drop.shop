<!--<!DOCTYPE HTML> -->
<html>
<head>
    <title>DropShop Register</title>
        
        <link href="{{ url('css/app.css') }}" rel="stylesheet" type="text/css">
    <body>
        <div class="registerbox">
            <img src="/img/DSlogo3.jpg" class="logo">
                <h1>Register</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                   <p>Name</p>
                   <input id="name" type="name" name="name" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                   <!--Checks for correct Email -->
                   

                   <p>Email</p>
                   <input id="email" type="email" name="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   <!--Checks for correct Email -->
                   
                    <!-- Password field with autofill functionality -->
                    <p>Password</p>
                    <input id="password" type="password" name ="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                    <!--Checks for correct password -->
                    

                    <p>Confirm Password</p>
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
                    <input type="submit" value="Register">
                </form>
            </div>
        </body>
    </head>
    </html>