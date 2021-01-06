<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All Employees</h3>
	<a href="<?php echo e(route('manager.index')); ?>">Back</a> |
	<a href="/empSearch">Search User</a> |
	<a href="/logout">logout</a>


	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>NAME</td>
			<td>CONTACT NUMBER</td>
			<td>FUNTIONS</td>
		</tr>

		<?php for($i=0; $i < count($employees); $i++): ?>
		<tr>
			<td><?php echo e($employees[$i]['id']); ?></td>
			<td><?php echo e($employees[$i]['username']); ?></td>
			<td><?php echo e($employees[$i]['name']); ?></td>
			<td><?php echo e($employees[$i]['contactno']); ?></td>
			<td>
			<a href="<?php echo e(route('manager.empDetails', $employees[$i]['id'])); ?>">Details</a> |
			<a href="<?php echo e(route('manager.empEdit', $employees[$i]['id'])); ?>">Edit</a> |
			<a href="<?php echo e(route('manager.empDestroyView', $employees[$i]['id'])); ?>">Delete</a> |
			<a href="<?php echo e(route('manager.empAddSalaryView', $employees[$i]['id'])); ?>">Add Salary</a> 
 
			</td>
		</tr>
		<?php endfor; ?>
	</table>

</body>
</html><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\newLaravel-main\project\project\resources\views/manager/emplist.blade.php ENDPATH**/ ?>