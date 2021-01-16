<?php $__env->startSection('content'); ?>
<div class="container d-flex justify-content-center">
  <!--table to showcase leave data-->
  <div class="card col-md-12">
    <div class="card-body">
      <h1 class="bg-warning text-center">
      <i class="fab fa-leanpub"></i> My <small>Leaves</small>
      <a href="requestleave" class="btn btn-danger float-right m-1">Request Leave</a>
      </h1>
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
         
          <tr>
            <th scope="col">Leave Id</th>
            <th scope="col">Reason</th>
            <th scope="col">Status</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
          </tr>
          
        </thead>
        <tbody>
           <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($leave->leave_id); ?></td>
            <td><?php echo e($leave->reason); ?></td>
             <td><?php echo e($leave->status); ?></td>
              <td><?php echo e($leave->from); ?></td>
               <td><?php echo e($leave->to); ?></td> 
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.userslayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/users/myleaves.blade.php ENDPATH**/ ?>