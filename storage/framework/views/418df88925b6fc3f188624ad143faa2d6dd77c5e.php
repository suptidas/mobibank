<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="<?php echo e(route('home.index')); ?>">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<fieldset>
				<legend>Edit User</legend>
			<table border="1">
                <tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo e($UserName); ?>"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo e($Name); ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo e($Password); ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo e($Email); ?>"></td>
				</tr>
				<tr>
					<td>Contact Nunber</td>
					<td><input type="text" name="contno" value="<?php echo e($ContactNo); ?>"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="text" name="gender" value="<?php echo e($Gender); ?>"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td><input type="text" name="type" value="<?php echo e($UserType); ?>"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" value="<?php echo e($Address); ?>"></td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><input type="file" name="myimg" ></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html><?php /**PATH S:\Fall2020\ATP_3\FINAL\My work\31.12.2020\project\resources\views/home/empEdit.blade.php ENDPATH**/ ?>