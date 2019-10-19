<?php if($active == 1): ?>
<a  class="btn btn-success"><?php echo e(trans('admin.actvided')); ?> </a> 
<?php else: ?>
<a  class="btn btn-danger">
<?php echo e(trans('admin.noActvided')); ?></a>
<?php endif; ?>