<?php $__env->startSection('title', '| Users'); ?>
<?php $__env->startSection('content'); ?>

<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1><i class="fa fa-users"></i> User Administration
                <section class="float-right">
                    <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-outline-success pull-right">Roles</a>
                    <a href="<?php echo e(route('permissions.index')); ?>" class="btn btn-outline-secondary pull-right">Permissions</a>
                    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-outline-primary">Add User</a>
                </section>
                </h1>
                <hr>
               
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date/Time Added</th>
                                <th>User Roles</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->created_at->format('F d, Y h:ia')); ?></td>
                                <td><?php echo e($user->roles()->pluck('name')->implode(' ')); ?></td>
                                <td class="table-form">
                                    <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-info">Edit</a>
                                    <?php echo Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]); ?>

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
<?php echo $__env->make('admin.adminlayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/admin/users/index.blade.php ENDPATH**/ ?>