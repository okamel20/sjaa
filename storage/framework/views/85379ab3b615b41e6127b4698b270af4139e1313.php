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
                  <?php echo Form::open(['url'=>route('magazineUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']); ?>

                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label class="col-form-label"> عن المجلة بالعربى</label>
                      <textarea class="form-control" required="" name="magazine_ar" rows="10"><?php echo e(oldOrValue('magazine_ar',$data)); ?></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label class="col-form-label"> عن المجلة بالانجليزى</label>
                      <textarea class="form-control" required="" name="magazine_en" rows="10"><?php echo e(oldOrValue('magazine_en',$data)); ?></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary"><?php echo e(trans('admin.send')); ?></button>
                    </div>
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