<?php $__env->startSection('title', '| Permissions'); ?>
<?php $__env->startSection('content'); ?>


<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-info"><i class="fa fa-key"></i>Available Permissions
                <section class="float-right">
                    <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-outline-success pull-right">Roles</a>
                    <a href="<?php echo e(route('permissions.create')); ?>" class="btn btn-outline-secondary pull-right">Add Permission</a>
                    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-outline-primary">Users</a>
                </section>
                </h1>
                <hr>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                         <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($permission->name); ?></td>
                    <td class="table-form">
                        <a href="<?php echo e(URL::to('permissions/'.$permission->id.'/edit')); ?>" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        <?php echo Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]); ?>

                        <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Hover-table ] start -->
    
    <!-- [ Hover-table ] end -->
    
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/admin/permissions/index.blade.php ENDPATH**/ ?>