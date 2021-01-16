<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    

<link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?>" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="<?php echo e(asset('fonts/fontawesome/css/fontawesome-all.min.css')); ?>">
    <!-- animation css -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/animation/css/animate.min.css')); ?>">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

	<?php echo $__env->make('users.userslayouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent('content'); ?>
	<?php echo $__env->make('users.userslayouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<script src="<?php echo e(asset('js/vendor-all.min.js')); ?>"></script>
	<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pcoded.min.js')); ?>"></script>
<?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/users/userslayouts/master.blade.php ENDPATH**/ ?>