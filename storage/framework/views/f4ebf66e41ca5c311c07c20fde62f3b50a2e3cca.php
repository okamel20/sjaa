<?php $__env->startSection('content'); ?>
<div class="main-content">
  <!-- Row start -->
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header"><?php echo e($title); ?> </div>
            <div class="card-body">
              <?php echo Form::open(['url'=>adminUrl('users/'.$data->id),'method'=>'put','files'=>true]); ?>


                <div class="form-group col-lg-12">
                  <label> <?php echo e(trans('admin.adminName')); ?> </label>
                  <input type="text" name="name" class="form-control" placeholder="<?php echo e(trans('admin.adminName')); ?>" required value="<?php echo e(oldOrValue('name',$data)); ?>">
                </div>
                <div class="form-group col-lg-12">
                  <label> <?php echo e(trans('admin.email')); ?> </label>
                  <input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('admin.email')); ?>" required value="<?php echo e(oldOrValue('email',$data)); ?>">
                </div>

                <div class="form-group col-lg-12">
                  <label> <?php echo e(trans('admin.password')); ?> </label>
                  <input type="password" name="password" class="form-control" placeholder="<?php echo e(trans('admin.password')); ?>" >
                  
                </div>

                <div class="form-group col-lg-12">
                  <label> <?php echo e(trans('admin.passwordRe')); ?> </label>
                  <input type="password" name="repassword" class="form-control" placeholder="<?php echo e(trans('admin.passwordRe')); ?>" >
                  
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