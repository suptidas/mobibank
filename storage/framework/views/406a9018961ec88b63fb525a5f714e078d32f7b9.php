<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<h1>Home Page</h1>
    <!-- <a href="<?php echo e(route('manager.profile')); ?>">Profile</a> | -->
    <a href="<?php echo e(route('manager.profile')); ?>"><img src="<?php echo e(asset('upload/'. $picture)); ?>" width="100px" height="100px" > <br> <?php echo e($username); ?> </a> |
	<a href="/manager/empCreate">Create New User</a> |
	<a href="<?php echo e(route('manager.emplist')); ?>">View Employee List</a> |
	<a href="<?php echo e(route('manager.custlist')); ?>">View Client List</a> |
	<a href="/manager/empSalary">Employee Salary List</a> |
	<a href="/logout">logout</a>

</body>
</html><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\project with frame\project\resources\views/manager/index.blade.php ENDPATH**/ ?>