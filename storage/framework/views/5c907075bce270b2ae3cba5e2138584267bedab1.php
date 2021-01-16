<?php $__env->startSection('title', '| Edit Role'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center">
<div class='col-lg-10 col-lg-offset-4 '>
    <h1 class="text-center text-info"><i class='fa fa-key'></i> Edit Role: <?php echo e($role->name); ?></h1>
    <hr>

    <?php echo e(Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT'))); ?>


    <div class="form-group">
        <?php echo e(Form::label('name', 'Role Name')); ?>

        <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

    </div>

    <h5><b>Assign Permissions</b></h5>
    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php echo e(Form::checkbox('permissions[]',  $permission->id, $role->permissions )); ?>

        <?php echo e(Form::label($permission->name, ucfirst($permission->name))); ?><br>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br>
    <div class="text-center">
    <?php echo e(Form::submit('Edit', array('class' => 'btn btn-outline-primary col-md-4'))); ?>


    <?php echo e(Form::close()); ?>

    </div>    
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/admin/roles/edit.blade.php ENDPATH**/ ?>