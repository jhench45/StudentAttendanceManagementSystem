<?php $__env->startSection('title', '| Roles'); ?>

<?php $__env->startSection('content'); ?>

<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-info"><i class="fa fa-key"></i> Roles
                <section class="float-right">
                    <a href="<?php echo e(URL::to('roles/create')); ?>" class="btn btn-outline-success pull-right">Add Role</a>
                    <a href="<?php echo e(route('permissions.index')); ?>" class="btn btn-outline-secondary pull-right">Permission</a>
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
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($role->name); ?></td>

                    <td><?php echo e(str_replace(array('[',']','"'),'', $role->permissions()->pluck('name'))); ?></td>
                    <td class="table-form">
                    <a href="<?php echo e(URL::to('roles/'.$role->id.'/edit')); ?>" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    <?php echo Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]); ?>

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
<?php echo $__env->make('admin.adminlayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/admin/roles/index.blade.php ENDPATH**/ ?>