<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<h1>Home Page</h1>
    <!-- <a href="{{route('manager.profile')}}">Profile</a> | -->
    <a href="{{route('manager.profile')}}"><img src="{{asset('upload/'. $picture)}}" width="100px" height="100px" > <br> {{$username}} </a> |
	<a href="/manager/empCreate">Create New User</a> |
	<a href="{{route('manager.emplist')}}">View Employee List</a> |
	<a href="{{route('manager.custlist')}}">View Client List</a> |
	<a href="/manager/empSalary">Employee Salary List</a> |
	<a href="{{route('manager.seeTransaction')}}">User Transaction List</a> |
	<a href="/logout">logout</a>

</body>
</html>