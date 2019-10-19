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
                  <?php echo Form::open(['url'=>route('settingUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']); ?>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> <?php echo e(trans('admin.app_name_ar')); ?></label>
                      <input type="text" name="app_name_ar" class="form-control" placeholder="<?php echo e(trans('admin.app_name_ar')); ?>" required value="<?php echo e(oldOrValue('app_name_ar',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> <?php echo e(trans('admin.app_name_en')); ?></label>
                      <input type="text" name="app_name_en" class="form-control" placeholder="<?php echo e(trans('admin.app_name_en')); ?>" required value="<?php echo e(oldOrValue('app_name_en',$data)); ?>">
                    </div>

                    <div class="form-group col-md-12">
                      <?php if(isset($data->app_logo) && $data->app_logo != null): ?>
                      <center>
                        <img src="<?php echo e(Storage::url($data->app_logo)); ?>"  class="img-responsive center-block" width="auto" height="100px">
                      </center>
                        <br>
                      <?php endif; ?>
                        <label for="exampleInputEmail1" class="col-form-label"><?php echo e(trans('admin.app_logo')); ?></label>
                        <input id="input-folder-5" name="app_logo" type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg">
                    </div>

                    <button type="submit" class="btn btn-primary"><?php echo e(trans('admin.send')); ?></button>
                  </div>
                </form>
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