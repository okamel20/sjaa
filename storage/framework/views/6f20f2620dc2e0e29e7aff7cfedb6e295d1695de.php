<?php $__env->startSection('content'); ?>
<div class="main-content">
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header"><?php echo e($title); ?> </div>
            <div class="card-body">
              <?php echo Form::open(['url'=>adminUrl('pagecontents/'.$data->id),'method'=>'put','files'=>true]); ?>


                <div class="form-group col-lg-12">
                  <label> عنوان  المحتوى بالعربى </label>
                  <input type="text" name="title_ar" class="form-control" placeholder="عنوان  المحتوى بالعربى" required value="<?php echo e(oldOrValue('title_ar',$data)); ?>">
                </div>
                <div class="form-group col-lg-12">
                  <label> عنوان  المحتوى  انجليزى </label>
                  <input type="text" name="title_en" class="form-control" placeholder="عنوان  المحتوى  انجليزى" required value="<?php echo e(oldOrValue('title_en',$data)); ?>">
                </div>
                

                <div class="form-group col-md-12">
                  <label class="col-form-label"> نص المحتوى بالعربى</label>
                  <textarea class="form-control ckeditor" required="" name="content_ar" rows="10" required=""><?php echo e(oldOrValue('content_ar',$data)); ?></textarea>
                </div>

                <div class="form-group col-md-12">
                  <label class="col-form-label"> مص المحتوى بالانجليزى </label>
                  <textarea class="form-control ckeditor" required="" name="content_en" rows="10" required=""><?php echo e(oldOrValue('content_en',$data)); ?></textarea>
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
  <script src="<?php echo e(url('/public/admin/plugins/ckeditor/')); ?>/ckeditor.js"></script>
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>