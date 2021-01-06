<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All Employees</h3>
	<a href="{{route('manager.index')}}">Back</a> |
	<a href="/empSearch">Search User</a> |
	<a href="/logout">logout</a>


	<br>
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

		#emp tr:nth-child(even){
			background-color: #0bfdfd;
		}

		#emp th{
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: #fff;
		}
	</style>

	<table id="emp">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>NAME</td>
			<td>CONTACT NUMBER</td>
			<td>FUNTIONS</td>
		</tr>

		@for($i=0; $i < count($employees); $i++)
		<tr>
			<td>{{$employees[$i]['id']}}</td>
			<td>{{$employees[$i]['username']}}</td>
			<td>{{$employees[$i]['name']}}</td>
			<td>{{$employees[$i]['contactno']}}</td>
			<td>
			<a href="{{route('manager.empDetails', $employees[$i]['id'])}}">Details</a> |
			<a href="{{route('manager.empEdit', $employees[$i]['id'])}}">Edit</a> |
			<a href="{{route('manager.empDestroyView', $employees[$i]['id'])}}">Delete</a> |
			<a href="{{route('manager.empAddSalaryView', $employees[$i]['id'])}}">Add Salary</a> 
 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>