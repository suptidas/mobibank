<!DOCTYPE html>
<html>
<head>
	<title>Employee Details</title>
</head>
<body>
	<a href="<?php echo e(route('admin.employeelist')); ?>">Back</a> |
	<a href="/logout">logout</a>
	<br>
	<table border="1">
		<tr>
			<td>Employee Name</td>
			<td><?php echo e($name); ?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?php echo e($address); ?></td>
		</tr>
		<tr>
			<td>Contact Number</td>
			<td><?php echo e($contactno); ?></td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><?php echo e($username); ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><?php echo e($password); ?></td>
		</tr>
		<tr>
			<td>type</td>
			<td><?php echo e($usertype); ?></td>
		</tr>
	</table>
</body>
</html><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\newLaravel-main\project\project\resources\views/admin/show.blade.php ENDPATH**/ ?>