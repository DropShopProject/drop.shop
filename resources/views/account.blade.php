<!--<!DOCTYPE html>-->
<html lang="em">
@include('template/headtag', ['title' => 'DropShop Account'])
    
    <body class="account-body">
        @include('template/navbar')
        <div class="account-details-box">
            <img src="/img/DSlogo3.jpg" class="login-logo">
            <h1 class="account-h1">Welcome {{ Auth::user()->name }}</h1>
            <h2 class="account-h2">Account Details</h2>
            <p class="account-p">Name: {{ Auth::user()->name }}
                <br>
                <br>
                Email: {{ Auth::user()->email }}</p>
    
    

            <!-- Logout Button -->
            <div class="logout-button">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <input type="submit" value="Logout">
                </form>
            </div>

            

            

            <form action="{{ action('HomeController@UpdateAccountSettings') }}" method="POST">
                @csrf
            <input id='optInHidden' type='hidden' value=0 name='optIn'>
            <input id='optIn' type='checkbox' value=1 name='optIn' @if (Auth::user()->EmailOptIn) checked @endif> Receive Email Notifications?
            
            <div class="logout-button" style="margin-top: 1em;">
            <input id='update' type='submit' value="Update User Settings">
            </div>  
            </form>
            
            <a href="{{ route('password.request') }}">Reset Password</a><br>

        </div>
    </body>
</html>

