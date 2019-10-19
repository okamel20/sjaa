<?php if($errors->any()): ?>
	<div class="alert alert-danger alert-dismissable">
		<ul>
			<button class="close float-right" aria-hidder="true" data-dismiss="alert">&times;</button>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
		</ul>
	</div>
	
<?php endif; ?>

<?php if(!empty(Session::get('save'))): ?>
	<div class="alert alert-success" style="background-color: #8fce8f">
		<button class="close float-right" aria-hidder="true" data-dismiss="alert">&times;</button>
		<center><h4><?php echo Session::get('save'); ?></h4></center>
	</div>
<?php endif; ?>
				
		<!-- error -->
<?php if(!empty(Session::get('error'))): ?>
	<div class="alert alert-warning" style="background-color: #dc6b6b">
		<button class="close float-right" aria-hidder="true" data-dismiss="alert">&times;</button>
		<center><h4><?php echo Session::get('error'); ?></h4></center>
		
	</div>
<?php endif; ?>