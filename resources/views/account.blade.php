<!--<!DOCTYPE html>-->
<html lang="em">
@include('template/headtag', ['title' => 'DropShop Account'])
    
    <body class="account-body">
        @include('template/navbar')

        <div class="account-box">
            <img src="/img/DSlogoNOBORDER.jpg" class="account-logo">
            <h1 class="account-h1">Welcome {{ Auth::user()->name }}</h1>
            <h2 class="account-h2">Account Details</h2>
            <p class="account-p">Name: {{ Auth::user()->name }}
                <br>
                
                Email: {{ Auth::user()->email }}</p> 

            <form action="{{ action('HomeController@UpdateAccountSettings') }}" method="POST">
                @csrf
            
            <label for="optIn">
                <input id='optInHidden' type='hidden' value=0 name='optIn'>
                <input id='optIn' type='checkbox' value=1 name='optIn' @if (Auth::user()->emailOptIn) checked @endif> Receive Email Notifications?
            </label>
            

            <input id='update' class="orange-button" type='submit' value="Update User Settings"> 
            </form>
            
            <a href="{{ route('password.request') }}">Reset Password</a><br>

        </div>
        @include('template/footer')
    </body>

</html>

