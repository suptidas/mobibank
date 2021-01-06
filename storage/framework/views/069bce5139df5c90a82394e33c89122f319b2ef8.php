<!DOCTYPE html>
<html>
<head>
	<title> Employee Salary Add </title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Salary Add</legend>
			<a href="/home">Back</a> |
	        <a href="/logout">logout</a>
	        <br>
	        <br>
	        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo e($username); ?>"></td>
				</tr>
				<tr>
					<td>Salary</td>
					<td><input type="text" name="salary"></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="date" name="date"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html><?php /**PATH S:\Fall2020\ATP_3\FINAL\Final Project\Marge\project\resources\views/home/empAddSalaryView.blade.php ENDPATH**/ ?>