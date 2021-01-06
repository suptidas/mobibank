<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All Employees</h3>
	<a href="<?php echo e(route('admin.home')); ?>">Back</a> |


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
 
			</td>
		</tr>
		<?php endfor; ?>
	</table>

</body>
</html><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\project with frame\project\resources\views/manager/emplist.blade.php ENDPATH**/ ?>