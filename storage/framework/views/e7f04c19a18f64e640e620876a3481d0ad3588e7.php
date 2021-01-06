<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All Employees</h3>
	<a href="/home">Back</a> |
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
			<td>GENDER</td>
			<td>USER TYPE</td>
			<td>ADDRESS</td>
			<td>PICTURE</td>
		</tr>

		<?php for($i=0; $i < count($employees); $i++): ?>
		<tr>
			<td><?php echo e($employees[$i]['ID']); ?></td>
			<td><?php echo e($employees[$i]['UserName']); ?></td>
			<td><?php echo e($employees[$i]['Name']); ?></td>
			<td><?php echo e($employees[$i]['ContactNo']); ?></td>
			<td><?php echo e($employees[$i]['Gender']); ?></td>
			<td><?php echo e($employees[$i]['UserType']); ?></td>
			<td><?php echo e($employees[$i]['Address']); ?></td>
			<td><?php echo e($employees[$i]['Propic']); ?></td>
		<?php endfor; ?>
	</table>

</body>
</html><?php /**PATH S:\Fall2020\ATP_3\FINAL\My work\31.12.2020\project\resources\views/home/empShow.blade.php ENDPATH**/ ?>