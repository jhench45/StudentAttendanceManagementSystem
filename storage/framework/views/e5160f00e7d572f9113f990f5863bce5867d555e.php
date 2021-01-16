<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-center col-md-12">
	<div class="card col-md-4 manage-forms">
		<div class="card-body">
			<h1 class="bg-success text-center">
			<i class="fas fa-pen-square"></i> Request <small>leave</small>
			</h1>
			<form method="post" action="<?php echo e(route('requestleave.store')); ?>">
				<?php echo csrf_field(); ?>
				<select name="student_id" hidden="">
					<option><?php echo e(Auth::user()->id); ?></option>
				</select>
				<input type="hidden" name="status" value="pending">
				<div class="form-group">
					<label for="reason">Reason of leave</label>
					<input type="text" class="form-control" id="reason" name="reason" required>
				</div>
				
				<div class="form-group">
					<label for="fromDate">From</label>
					<input type="date" class="form-control" id="fromDate" name="from" required>
				</div>
				<div class="form-group">
					<label for="leaveBody">To</label>
					<input type="date" class="form-control" id="toDate" name="to" required>
				</div>
				<div class="form-btn  d-flex justify-content-center" >
					<button type="submit" class="btn btn-success col-md-4" name="register">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.userslayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Attendance-Management-System-master\resources\views/users/requestleave.blade.php ENDPATH**/ ?>