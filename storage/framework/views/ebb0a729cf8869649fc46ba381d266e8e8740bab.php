<?php $__env->startSection('title', '| Users'); ?>
<?php $__env->startSection('content'); ?>
<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1><i class="fa fa-users"></i> Manage Attendance
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
                                <th>Student Id</th>
                                <th>Date</th>
                                <th>Satus</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $at): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($at->name); ?></td>
                                <td><?php echo e(date('d-m-Y',strtotime($at->created_at))); ?></td>
                                <td><?php echo e($at->status); ?></td>
                                <form method="post" action="<?php echo e(action('ManageAttendanceController@update',$at->attendance_id)); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="PATCH">
                                <td><button type="submit" name="update" class="btn btn-danger rounded-pill" value="absent">Mark Absent</button>
                                    <button type="submit" name="update" class="btn btn-info " value="present">Mark Present</button>
                                    <button type="submit" name="update" class="btn btn-warning " value="leave">Mark Leave</button>
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
<?php echo $__env->make('admin.adminlayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/admin/attendance/index.blade.php ENDPATH**/ ?>