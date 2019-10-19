<?php $__env->startSection('content'); ?>
<div class="main-content">
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header"><?php echo e($title); ?> </div>
            <div class="card-body">
              <?php echo Form::open(['url'=>adminUrl('groups/'.$data->id),'method'=>'put','files'=>true]); ?>


               
                <div class="form-group col-lg-12">
                  <label><?php echo e(trans('admin.group_name_ar')); ?></label>
                  <input type="text" name="group_name_ar" class="form-control" required="" placeholder="<?php echo e(trans('admin.group_name_ar')); ?>" value="<?php echo e(oldOrValue('group_name_ar',$data)); ?>">
                </div>

                <div class="form-group col-lg-12">
                  <label><?php echo e(trans('admin.group_name_en')); ?></label>
                  <input type="text" name="group_name_en" class="form-control" required="" placeholder="<?php echo e(trans('admin.group_name_en')); ?>" value="<?php echo e(oldOrValue('group_name_en',$data)); ?>">
                </div>

                 <div class="form-group col-lg-12">
                  <label><?php echo e(trans('admin.groups')); ?></label>
                  <br>
                  <?php $count = 1 ;?>
                  <?php $__currentLoopData = Route::getRoutes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($value->getPrefix() == '/admin'): ?>
                  <?php if($value->getAction('as') && $value->getAction('name')): ?>
                  <label class="alert alert-primary  role<?php echo e($count); ?> " >
                    <input type="checkbox" name="roles[]" data-id="<?php echo e($count); ?>" class="form-control role" value="<?php echo e($value->getAction('as')); ?>" <?php echo e(checkedGroup($data->id,$value->getAction('as'))); ?> ><?php echo e($value->getAction('name')); ?></label>
                    <?php $count++ ;?>
                  <?php endif; ?>
                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </div>

                <div class="form-group col-lg-12 ">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary <?php if($data->active == 0): ?> active <?php endif; ?>">
                      <input type="radio" name="active" id="option2" value="0" autocomplete="off"<?php if($data->active == 0): ?> checked="" <?php endif; ?>> <?php echo e(trans('admin.noActvided')); ?>

                    </label>
                    <label class="btn btn-secondary <?php if($data->active == 1): ?> active <?php endif; ?>">
                      <input type="radio" name="active" id="option1" value="1" autocomplete="off" <?php if($data->active == 1): ?> checked="" <?php endif; ?>> <?php echo e(trans('admin.actvided')); ?>

                    </label>
                  </div>
                </div>
                
              <?php echo Form::submit(trans('admin.send'),['class'=>'btn btn-primary ']); ?>

              <?php echo Form::close(); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php $__env->startSection('script'); ?>
  
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>