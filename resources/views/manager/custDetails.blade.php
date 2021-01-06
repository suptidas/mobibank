<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('manager.custlist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit User:</legend>
			<table border="1">
                <tr>
					<td>Username:</td>
					<td>"{{$username}}"</td>
				</tr>
				<tr>
					<td>Name:</td>
					<td>"{{$name}}"</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>"{{$password}}"</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td>"{{$email}}"</td>
				</tr>
				<tr>
					<td>Contact Nunber:</td>
					<td>"{{$contactno}}"</td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>"{{$gender}}"</td>
				</tr>
				<tr>
					<td>User Type:</td>
					<td>"{{$usertype}}"</td>
				</tr>
				<tr>
					<td>Address:</td>
					<td>"{{$address}}"</td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><img src="{{asset('upload/'. $picture)}}" width="100px" height="100px" ></td>
				</tr>

				
			</table>
			</fieldset>
		</form>
</body>
</html>