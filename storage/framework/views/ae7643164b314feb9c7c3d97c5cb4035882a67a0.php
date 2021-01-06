<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All Employees</h3>
	<a href="/home">Back</a> |
	<a href="/empSearch">Search User</a> |
	<a href="/logout">logout</a>


	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>CONTACT NUMBER</td>
		</tr>

		<?php for($i=0; $i < count($employees); $i++): ?>
		<tr>
			<td><?php echo e($employees[$i]['id']); ?></td>
			<td><?php echo e($employees[$i]['username']); ?></td>
			<td><?php echo e($employees[$i]['name']); ?></td>
			<td><?php echo e($employees[$i]['contactno']); ?></td>
			<td>
			<a href="<?php echo e(route('home.empDetails', $employees[$i]['id'])); ?>">Details</a> |
			<a href="<?php echo e(route('home.empEdit', $employees[$i]['id'])); ?>">Edit</a> |
			<a href="<?php echo e(route('home.empDestroyView', $employees[$i]['id'])); ?>">Delete</a> |
			<a href="<?php echo e(route('home.empAddSalaryView', $employees[$i]['id'])); ?>">Add Salary</a> 
 
			</td>
		</tr>
		<?php endfor; ?>
	</table>

</body>
</html><?php /**PATH S:\Fall2020\ATP_3\FINAL\Final Project\Marge\project\resources\views/home/emplist.blade.php ENDPATH**/ ?>