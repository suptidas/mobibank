<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<a href="<?php echo e(route('home.index')); ?>">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<fieldset>
				<legend>Create User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo e(old('username')); ?>"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo e(old('password')); ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo e(old('email')); ?>"></td>
				</tr>
				<tr>
					<td>Contact Nunber</td>
					<td><input type="text" name="contno" value="<?php echo e(old('contno')); ?>"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="text" name="gender" value="<?php echo e(old('gender')); ?>"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td><input type="text" name="type" value="<?php echo e(old('type')); ?>"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" value="<?php echo e(old('address')); ?>"></td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><input type="file" name="myimg" ></td>
				</tr>
	
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php echo e($err); ?> <br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH S:\Fall2020\ATP_3\FINAL\My work\31.12.2020\project\resources\views/home/empCreate.blade.php ENDPATH**/ ?>