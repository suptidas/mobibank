<!DOCTYPE html>
<html>
<head>
	<title>Registetion Form</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Registetion Form</legend>

	 
					
						<a href="{{route('admin.home')}}">Back</a>

		<table>
			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="{{old('address')}}"></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contactno" value="{{old('contactno')}}"></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="username" value="{{old('username')}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{old('password')}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{old('email')}}"></td>
				</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" value="{{old('gender')}}"></td>
				</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="{{old('usertype')}}"></td>
			</tr>
			
			 <tr>
				<td>Profile Picture</td>
				<td><input type="file" name="myimg" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
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