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
              <?php echo Form::open(['url'=>adminUrl('admins/'.$data->id),'method'=>'put','files'=>true]); ?>


                <div class="form-group col-lg-12">
                  <label><?php echo e(trans('admin.adminType')); ?></label>
                  <select class="form-control" required="" name="group_id">
                    <?php $__currentLoopData = \App\Group::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($group->id); ?>" <?php if($data->group_id == $group->id): ?> selected="" <?php endif; ?>><?php echo e($group['group_name_'.lang()]); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>

                <div class="form-group col-lg-12">
                  <label> <?php echo e(trans('admin.adminName')); ?> </label>
                  <input type="text" name="name" class="form-control" placeholder="<?php echo e(trans('admin.adminName')); ?>" required value="<?php echo e(oldOrValue('name',$data)); ?>">
                </div>
                <div class="form-group col-lg-12">
                  <label> <?php echo e(trans('admin.email')); ?> </label>
                  <input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('admin.email')); ?>" required value="<?php echo e(oldOrValue('email',$data)); ?>">
                </div>

                 <div class="form-group col-lg-12">
                  <label> <?php echo e(trans('admin.img')); ?> </label>
                  <img src="<?php echo e(Storage::url($data->img)); ?>" class="img-responsive clearfix" width="100px" height="100px">
                  <br>
                  <input type="file" name="img" class="form-control" placeholder="<?php echo e(trans('admin.img')); ?>" accept="image/x-png,image/gif,image/jpeg">
                  
                </div>

                
                <div class="form-group col-lg-12">
                  <label> <?php echo e(trans('admin.password')); ?> </label>
                  <input type="password" name="password" class="form-control" placeholder="<?php echo e(trans('admin.password')); ?>" >
                  
                </div>

                <div class="form-group col-lg-12">
                  <label> <?php echo e(trans('admin.passwordRe')); ?> </label>
                  <input type="password" name="repassword" class="form-control" placeholder="<?php echo e(trans('admin.passwordRe')); ?>" >
                  
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