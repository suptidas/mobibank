<!DOCTYPE html>
<html>
<head>
	<title>Personal Info</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Personal Info</legend>
		<table>
			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="name" value="{{$name}}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="{{$address}}"></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contactno" value="{{$contactno}}"></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="username" value="{{$username}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$password}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{$email}}"></td>
				</tr>
			<tr>
				<td>type</td>
				<td><input type="text" name="type" value="{{$usertype}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
					 
					<button>
						<a href="{{route('admin.home')}}">
							Back
						</a>
					</button>
					 
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
	<div>
		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
	</div>
</body>
</html>