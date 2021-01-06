<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<h1>Welcome home <?php echo e($username); ?></h1>
    <a href="<?php echo e(route('home.profile')); ?>">Profile</a> |
	<a href="/empCreate">Create New User</a> |
	<a href="<?php echo e(route('home.emplist')); ?>">View Employee List</a> |
	<a href="/empSalary">Employee Salary List</a> |
	<a href="/logout">logout</a>

</body>
</html><?php /**PATH S:\Fall2020\ATP_3\FINAL\Final Project\Marge\project\resources\views/home/index.blade.php ENDPATH**/ ?>