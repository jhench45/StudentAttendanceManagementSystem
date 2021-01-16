<?php $__env->startSection('content'); ?>


<div class="container d-flex justify-content-center">
    <!--table to showcase attendance data-->

    <div class="card col-md-12">
      <div class="card-body">
        <h1 class="bg-warning text-center">
          <i class="fab fa-leanpub"></i> My <small>Attendance</small>
        </h1>
        <table class="table table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $shows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($show->created_at); ?></td>
                <td><?php echo e($show->status); ?></td>
                
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           
          </tbody>
        </table>
       <?php echo e(Session::get('success')); ?>

      </div>


    </div>
  </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('users.userslayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/users/myattendance.blade.php ENDPATH**/ ?>