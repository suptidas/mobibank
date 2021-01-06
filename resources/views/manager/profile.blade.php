<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('manager.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
 		<style>
		#emp{
			border-collapse: collapse;
			width:100%;
		}
		
		#emp td, #emp th{
        border :1px solid #ddd;
        padding: 8px;
		}

		#emp tr:nth-child(odd){
			background-color: #d4ff5e;
		}


		#emp th{
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: #fff;
		}
	</style>

		<!-- <form method="post" enctype="multipart/form-data"> -->

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit User:</legend>
			<table id="emp">
                <tr>
					<td>Username:</td>
					<td>{{$username}}</td>
				</tr>
				<tr>
					<td>Name:</td>
					<td>{{$name}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{$password}}</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td>{{$email}}</td>
				</tr>
				<tr>
					<td>Contact Nunber:</td>
					<td>{{$contactno}}</td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>{{$gender}}</td>
				</tr>
				<tr>
					<td>User Type:</td>
					<td>{{$usertype}}</td>
				</tr>
				<tr>
					<td>Address:</td>
					<td>{{$address}}</td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><img src="{{asset('upload/'. $picture)}}" width="100px" height="100px" ></td>
				</tr>
				
			</table>
                <br>

			  <tr>
					<td>Want to update Profile !
					<a href="/manager/profileUpdate">Update</a> </td>
				</tr>
			</fieldset>
		</form>
</body>
</html>