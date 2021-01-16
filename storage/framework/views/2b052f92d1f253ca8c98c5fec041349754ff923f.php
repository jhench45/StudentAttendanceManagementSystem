<?php $__env->startSection('title', '| Users'); ?>
<?php $__env->startSection('content'); ?>
<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1><i class="fa fa-users"></i> System Report
                <section class="float-right">
                    <?php if(isset($present)): ?>
                    <label href="#" class="btn btn-outline-success pull-right p-2">
                        Presents
                        <span class="badge badge-pill badge-light p-2 "><?php echo e($present); ?></span>
                        </label>
                        <label href="#" class="btn btn-outline-danger pull-right p2">
                        Absents
                        <span class="badge badge-pill badge-light p-2 "><?php echo e($absents); ?></span>
                        </label>
                        <label href="#" class="btn btn-outline-secondary pull-right p2">
                        Leaves
                        <span class="badge badge-pill badge-light p-2 "><?php echo e($leaves); ?></span>
                        </label>
                         <label href="#" class="btn btn-outline-secondary pull-right p2">
                        
                        <?php echo e($percentage); ?> %
                        </label>
                    <?php endif; ?>
                </section>
                </h1>
                
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <form method="post" action="<?php echo e(route('report')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <th class="text-center">
                                        
                                        <label for="example-date-input" class="col-2 col-form-label">From</label>
                                        
                                        <input class="form-control " type="date"  id="example-date-input" name="from" required="">
                                    </th>
                                    <th class="text-center">
                                        
                                        <label for="example-date-input" class="col-2 col-form-label">To</label>
                                        
                                        <input class="form-control" type="date"  id="example-date-input" name="to" required="">
                                    </th>
                                    
                                    <th>
                                        <button class="btn btn-outline-primary" type="submit">Generate Report</button>
                                    </th>
                                    
                                </tr>
                            </form>
                            <tr>
                                <th>Student Name</th>
                                <th>Date</th>
                                <th>Satus</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($attendance)): ?>
                            <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $at): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($at->name); ?></td>
                                <td><?php echo e(date('d-m-Y',strtotime($at->created_at))); ?></td>
                                <td><?php echo e($at->status); ?></td>
                                
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Hover-table ] start-->
    
    <!-- [ Hover-table ] end -->
    
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/admin/systemreport/index.blade.php ENDPATH**/ ?>