<?php $__env->startSection('title','Employee List'); ?>
<?php $__env->startSection('content'); ?>

<body>
	
	<table class="table table-striped">
		<tr>
			<td>Id</td>
			<td>Employee Name</td>
			<td>Contact Number</td>
			<td>User Name</td>
			<td>Action</td>
		</tr>

		<?php for($i=0; $i < count($employees); $i++): ?>
			<tr>
				<td><?php echo e($employees[$i]['id']); ?></td>
				<td><?php echo e($employees[$i]['name']); ?></td>
				<td><?php echo e($employees[$i]['contactno']); ?></td>
				<td><?php echo e($employees[$i]['username']); ?></td>
				<td>
					<a href="<?php echo e(route('admin.editemployee', $employees[$i]['id'])); ?>">Edit </a> |
					<a href="<?php echo e(route('admin.employeedetails', $employees[$i]['id'])); ?>">Details </a> |
					<a href="<?php echo e(route('admin.deleteemployee', $employees[$i]['id'])); ?>">Delete </a> 
				</td>
			</tr>
		<?php endfor; ?>

       <tr colspan="6">
       	<td><a href="<?php echo e(route('admin.home')); ?>">Back</a>
	      

	</table>
        
	
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\newLaravel-main\project\project\resources\views/admin/employeelist.blade.php ENDPATH**/ ?>