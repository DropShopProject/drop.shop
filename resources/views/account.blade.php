<!--<!DOCTYPE html>-->
<html lang="em">
@include('template/headtag', ['title' => 'DropShop Account'])
    
    <body class="account-body">
        @include('template/navbar')

        <div class="registerbox">
            <img src="/img/DSlogoNOBORDER.jpg" class="login-logo">
            <h1 class="account-h1">Welcome {{ Auth::user()->name }}</h1>
            <h2 class="account-h2">Account Details</h2>
            <p class="account-p">Name: {{ Auth::user()->name }}
                <br>
                <br>
                Email: {{ Auth::user()->email }}</p> 

            <form action="{{ action('HomeController@UpdateAccountSettings') }}" method="POST">
                @csrf
            <input id='optInHidden' type='hidden' value=0 name='optIn'>
            <input id='optIn' type='checkbox' value=1 name='optIn' @if (Auth::user()->emailOptIn) checked @endif> Receive Email Notifications?
            
            <div class="logout-button" style="margin-top: 1em;">
            <input id='update' class="orange-button" type='submit' value="Update User Settings">
            </div>  
            </form>
            
            <a href="{{ route('password.request') }}">Reset Password</a><br>

        </div>
        @include('template/footer')
    </body>

</html>

