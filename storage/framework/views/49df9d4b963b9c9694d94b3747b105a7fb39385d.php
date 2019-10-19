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
            <?php echo Form::open(['url'=>adminUrl('editions'),'files'=>true]); ?>


            <div class="form-group col-md-12">
              <label class="col-form-label">رقم العدد  عربى</label>
              <input type="text" name="the_number_ar" class="form-control" required="" value="<?php echo e(old('the_number_ar')); ?>">
            </div>

            <div class="form-group col-md-12">
              <label class="col-form-label">رقم العدد  انجليزى</label>
              <input type="text" name="the_number_en" class="form-control" required="" value="<?php echo e(old('the_number_en')); ?>">
            </div>

            <div class="form-group col-lg-12">
              <label> الطبعة </label>
              <input type="file" name="pdf_file" class="form-control" placeholder="<?php echo e(trans('admin.pdf_file')); ?>" required="">
            </div>

            <div class="form-group col-md-12">
              <label class="col-form-label"> تاريخ الطبعة</label>
              <input type="date" name="date" class="form-control" required="" value="<?php echo e(old('date')); ?>">
            </div>

            <div class="form-group col-lg-12">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary">
                  <input type="radio" name="active" id="option2" value="0" autocomplete="off"> مؤرشفة
                </label>
                <label class="btn btn-secondary active">
                  <input type="radio" name="active" id="option1" value="1" autocomplete="off" checked> غير مؤرشفة
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