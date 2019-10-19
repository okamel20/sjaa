<?php $__env->startSection('content'); ?>
<div class="main-content">
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header"><?php echo e($title); ?> </div>
            <div class="card-body">
              <?php echo Form::open(['url'=>adminUrl('pages/'.$data->id),'method'=>'put','files'=>true]); ?>


                <div class="form-group col-lg-12">
                  <label> عنوان  الصفحة بالعربى </label>
                  <input type="text" name="title_ar" class="form-control" placeholder="عنوان  الصفحة بالعربى" required value="<?php echo e(oldOrValue('title_ar',$data)); ?>">
                </div>
                <div class="form-group col-lg-12">
                  <label> عنوان  الصفحة  انجليزى </label>
                  <input type="text" name="title_en" class="form-control" placeholder="عنوان  الصفحة  انجليزى" required value="<?php echo e(oldOrValue('title_en',$data)); ?>">
                </div>
                
                <div class="form-group col-md-12">
                  <label class="col-form-label"> مجتوى  الصفحة بالأعلى بالعربى</label>
                  <textarea class="form-control ckeditor" required="" name="text_start_ar" rows="10"><?php echo e(oldOrValue('text_start_ar',$data)); ?></textarea>
                </div>

                <div class="form-group col-md-12">
                  <label class="col-form-label"> محتوى  الصفحة بالأعلى بالانجليزى </label>
                  <textarea class="form-control ckeditor" required="" name="text_start_en" rows="10"><?php echo e(oldOrValue('text_start_en',$data)); ?></textarea>
                </div>

                <div class="form-group col-md-12">
                  <label class="col-form-label"> مجتوى  الصفحة بالأسفل بالعربى</label>
                  <textarea class="form-control ckeditor" required="" name="end_text_ar" rows="10"><?php echo e(oldOrValue('end_text_ar',$data)); ?></textarea>
                </div>

                <div class="form-group col-md-12">
                  <label class="col-form-label"> محتوى  الصفحة بالأسفل بالانجليزى </label>
                  <textarea class="form-control ckeditor" required="" name="end_text_en" rows="10"><?php echo e(oldOrValue('end_text_en',$data)); ?></textarea>
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