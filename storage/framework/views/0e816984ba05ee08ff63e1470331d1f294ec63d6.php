<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="<?php echo e(route('home.index')); ?>">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<!-- <form method="post" enctype="multipart/form-data"> -->

			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<fieldset>
				<legend>Edit User:</legend>
			<table border="1">
                <tr>
					<td>Username:</td>
					<td>"<?php echo e(UserName); ?>"</td>
				</tr>
				<tr>
					<td>Name:</td>
					<td>"<?php echo e($Name); ?>"</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>"<?php echo e($Password); ?>"</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td>"<?php echo e($Email); ?>"</td>
				</tr>
				<tr>
					<td>Contact Nunber:</td>
					<td>"<?php echo e($ContactNo); ?>"</td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>"<?php echo e($Gender); ?>"</td>
				</tr>
				<tr>
					<td>User Type:</td>
					<td>"<?php echo e($UserType); ?>"</td>
				</tr>
				<tr>
					<td>Address:</td>
					<td>"<?php echo e($Address); ?>"</td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><img src="<?php echo e(asset('upload/'. $Propic)); ?>" width="100px" height="100px" ></td>
				</tr>
				
			</table>
			</fieldset>
		</form>
</body>
</html><?php /**PATH S:\Fall2020\ATP_3\FINAL\My work\31.12.2020\project\resources\views/home/profile.blade.php ENDPATH**/ ?>