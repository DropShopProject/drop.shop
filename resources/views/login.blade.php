<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'Login/Register'])

<body>
@include('template/navbar')

<p>
	<form>
		<p>Email</p>
		<input type="email" name="email" placeholder="Enter Email">
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter Password">
		<input type="submit" name="" value="Login">
		<a href="#">Forgot Password?</a><br>
	</form>


















	<h1>Register</h1>
<div class="row">
	<div class="col-md-12">
		@if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

	<form method="post" action="{{action('UserController@store')}}">
		{{csrf_field()}}
		<div class = "form-group">
			<input type="email" name="email" class="form-control" placeholder="Enter Email" />
		</div>
		<div class = "form-group">
			<input type="password" name="password" class="form-control" placeholder="Enter Password" />
		</div>
		<div class = "form-group">
			<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" />
		</div>

		<div class = "form-group">
			<input type="text" name="name" class="form-control" placeholder="Enter Name" />
		</div>
		<div class = "form-group">
			<input type="text" name="phoneNumber" class="form-control" placeholder="Enter Phone Number" />
		</div>
		<div class = "form-group">
			<input type="submit" class="btn btn-primary" />
		</div>


	</form>
</div>
</div>
</p>

</body>