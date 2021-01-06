<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee</title>

</head>
<body>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Edit Employee</legend>


    

 <table style="width:50%" height = "350" align="center">
  <tr>
    <th rowspan="9" ><img src="{{asset('upload/'. $picture)}}" alt="" width="200" height="300"></img></th>
     <td></td>
  </tr>
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
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{$email}}"></td>
			</tr>
				<td>Type</td>
				<td><input type="text" name="type" value="{{$usertype}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
					 
					<button>
						<a href="{{route('admin.employeelist')}}">
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