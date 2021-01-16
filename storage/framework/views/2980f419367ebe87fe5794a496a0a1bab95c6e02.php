<?php $__env->startSection('title', '| Edit User'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center">
<div class='col-lg-10 col-lg-offset-4'>

    <h1 class="text-center text-info"></i> Edit <?php echo e($user->name); ?></h1>
    <hr>

    <?php echo e(Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT'))); ?>


    <div class="form-group">
        <?php echo e(Form::label('name', 'Name')); ?>

        <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('email', 'Email')); ?>

        <?php echo e(Form::email('email', null, array('class' => 'form-control'))); ?>

    </div>

    <h5><b>Give Role</b></h5>

    <div class='form-group'>
        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e(Form::checkbox('roles[]',  $role->id, $user->roles )); ?>

            <?php echo e(Form::label($role->name, ucfirst($role->name))); ?><br>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="form-group">
        <?php echo e(Form::label('password', 'Password')); ?><br>
        <?php echo e(Form::password('password', array('class' => 'form-control'))); ?>


    </div>

    <div class="form-group">
        <?php echo e(Form::label('password', 'Confirm Password')); ?><br>
        <?php echo e(Form::password('password_confirmation', array('class' => 'form-control'))); ?>


    </div>
<div class="text-center">
    <?php echo e(Form::submit('Add', array('class' => 'btn btn-outline-primary col-md-4'))); ?>


    <?php echo e(Form::close()); ?>

</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>