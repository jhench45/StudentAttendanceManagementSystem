<?php $__env->startSection('title', '| Users'); ?>
<?php $__env->startSection('content'); ?>
<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1><i class="fa fa-users"></i> Manage Leaves
                <section class="float-right">
                    <a href="<?php echo e(route('manageleaves.index')); ?>" class="btn btn-outline-success pull-right">Leaves</a>
                    <a href="<?php echo e(route('manageattendance.index')); ?>" class="btn btn-outline-secondary pull-right">Attendance</a>
                    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-outline-primary">Add User</a>
                </section>
                </h1>
                
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Reason</th>
                                <th>Requested on</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Satus</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($leave->name); ?></td>
                                <td><?php echo e($leave->reason); ?></td>
                                <td><?php echo e(date('d-m-Y',strtotime($leave->created_at))); ?></td>
                                <td><?php echo e(date('d-m-Y',strtotime($leave->from))); ?></td>
                                <td><?php echo e(date('d-m-Y',strtotime($leave->to))); ?></td>
                                <td><?php echo e($leave->status); ?></td>
                                <form method="post" action="<?php echo e(action('ManageLeavesController@update',$leave->leave_id)); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="PATCH">
                                <td><button type="submit" name="update" class="btn btn-danger" value="declined">Decline</button>
                                    <button type="submit" name="update" class="btn btn-info" value="approved">Approve</button>
                                </td>
                            </form>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Hover-table ] start-->
    
    <!-- [ Hover-table ] end -->
    
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/admin/leaves/index.blade.php ENDPATH**/ ?>