<!DOCTYPE html>
<html lang="em">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Create Account</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>

<body>
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


</body>