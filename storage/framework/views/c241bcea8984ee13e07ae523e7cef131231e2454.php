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
                  <?php echo Form::open(['url'=>route('sochialLinksUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']); ?>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> رابط انستجرام</label>
                      <input type="text" name="insta_link" class="form-control" placeholder="ابط انستجرام" required value="<?php echo e(oldOrValue('insta_link',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> رابط فيس بوك</label>
                      <input type="text" name="facebook" class="form-control" placeholder="رابط فيس بوك " required value="<?php echo e(oldOrValue('facebook',$data)); ?>">
                    </div>

                    <div class="form-group col-md-6">
                      <label class="col-form-label"> رابط تويتر </label>
                      <input type="text" name="twiter" class="form-control" placeholder="ابط تويتر" required value="<?php echo e(oldOrValue('twiter',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> رابط جوجل بلس</label>
                      <input type="text" name="gogle" class="form-control" placeholder="ابط جوجل بلس" required value="<?php echo e(oldOrValue('gogle',$data)); ?>">
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