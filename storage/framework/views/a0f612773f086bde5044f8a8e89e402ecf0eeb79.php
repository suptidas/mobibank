<?php $__env->startSection('title','Registetion Form'); ?>
<?php $__env->startSection('content'); ?>


<body>
	<form method="post">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">



		<table class="table table-striped" width="100">
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contactno" value="<?php echo e(old('contactno')); ?>"></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="username" value="<?php echo e(old('username')); ?>"></td>
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
				<td>Gender</td>
				<td><input type="text" name="gender" value="<?php echo e(old('gender')); ?>"></td>
				</tr>
			<tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo e(old('address')); ?>"></td>
			</tr>
				<td>Type</td>
				<td><input type="text" name="type" value="<?php echo e(old('usertype')); ?>"></td>
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

		      <a href="<?php echo e(route('admin.home')); ?>">Back</a>
	</form>
	<div>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php echo e($err); ?> <br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\newLaravel-main\project\project\resources\views/admin/create.blade.php ENDPATH**/ ?>