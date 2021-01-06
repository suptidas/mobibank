<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>Customer Transaction List</h3>
	<a href="{{route('manager.index')}}">Back</a> |
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
			<td>WITHDRAW MONEY</td>
			<td>RECEIVE MAONEY</td>
			<td>BALANCE</td>
			<td>DATE</td>
		</tr>

		@for($i=0; $i < count($employees); $i++)
		<tr>
			<td>{{$employees[$i]['id']}}</td>
			<td>{{$employees[$i]['username']}}</td>
			<td>{{$employees[$i]['send']}}</td>
			<td>{{$employees[$i]['receive']}}</td>
			<td>{{$employees[$i]['balance']}}</td>
			<td>{{$employees[$i]['date']}}</td>
		</tr>
		@endfor
	</table>
	<br>
	<a href="{{route('manager.pdfdownload')}}"><input type="submit" name="download" value="Download"></a>

</body>
</html>