<?php $__env->startSection('title','Edit Employee'); ?>
<?php $__env->startSection('content'); ?>


<body>
	<form method="post">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<fieldset>
			<legend>Edit Employee</legend>


    

 <table class="table table-striped">
  <tr>
    <th rowspan="9" ><img src="<?php echo e(asset('upload/'. $picture)); ?>" alt="" width="200" height="300"></img></th>
     <td></td>
  </tr>
  			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="name" value="<?php echo e($name); ?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo e($address); ?>"></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contactno" value="<?php echo e($contactno); ?>"></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="username" value="<?php echo e($username); ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo e($password); ?>"></td>
			</tr>
			<tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo e($email); ?>"></td>
			</tr>
				<td>Type</td>
				<td><input type="text" name="type" value="<?php echo e($usertype); ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
					 
					<button>
						<a href="<?php echo e(route('admin.employeelist')); ?>">
							Back
						</a>
					</button>
					 
				</td>
			</tr>

 </table>

		</fieldset>
	</form>
	<div>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php echo e($err); ?> <br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\newLaravel-main\project\project\resources\views/admin/edit.blade.php ENDPATH**/ ?>