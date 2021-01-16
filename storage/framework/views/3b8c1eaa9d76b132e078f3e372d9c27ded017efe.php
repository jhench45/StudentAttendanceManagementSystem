<?php $__env->startSection('title', '| Create Permission'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center">
<div class='col-lg-10 col-lg-offset-4'>

    <h1 class="text-center text-info"><i class='fa fa-key'></i> Add Permission</h1>
    <br>

    <?php echo e(Form::open(array('url' => 'permissions'))); ?>


    <div class="form-group">
        <?php echo e(Form::label('name', 'Name')); ?>

        <?php echo e(Form::text('name', '', array('class' => 'form-control'))); ?>

    </div><br>
    <?php if(!$roles->isEmpty()): ?> //If no roles exist yet
        <h4>Assign Permission to Roles</h4>

        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <?php echo e(Form::checkbox('roles[]',  $role->id )); ?>

            <?php echo e(Form::label($role->name, ucfirst($role->name))); ?><br>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <br>
    <div class="text-center">
    <?php echo e(Form::submit('Add', array('class' => 'btn btn-outline-primary col-md-4'))); ?>


    <?php echo e(Form::close()); ?>

</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/admin/permissions/create.blade.php ENDPATH**/ ?>