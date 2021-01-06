<?php $__env->startSection('title','Registetion Form'); ?>
<?php $__env->startSection('content'); ?>


<body>

		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

			<table class="table table-striped">
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="name" value="<?php echo e(old('name')); ?>" required></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo e(old('username')); ?>" required></td>
				</tr>
				 <tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo e(old('password')); ?>" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo e(old('email')); ?>" required></td>
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
					<td><input type="text" name="type" value="<?php echo e(old('type')); ?>" required></td>
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

				<a href="<?php echo e(route('admin.home')); ?>">Back</a> |



		</form>

		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php echo e($err); ?> <br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\project with frame\project\resources\views/manager/empCreate.blade.php ENDPATH**/ ?>