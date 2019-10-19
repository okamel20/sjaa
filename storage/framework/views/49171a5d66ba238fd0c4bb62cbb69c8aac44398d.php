<?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="app-container">
	<?php echo $__env->make('admin.layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="app-main">
		<?php echo $__env->make('admin.layouts.headerPage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('admin.layouts.msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    	<?php echo $__env->yieldContent('content'); ?>
	</div>
    
</div>          
 
<?php echo $__env->make('admin.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
