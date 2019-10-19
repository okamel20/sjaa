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
            <?php echo Form::open(['url'=>adminUrl('authors'),'files'=>true]); ?>


            <div class="form-group col-lg-12">
              <label> الأسم عربى  </label>
              <input type="text" name="name_ar" class="form-control" placeholder="الأسم عربى " required value="<?php echo e(old('name_ar')); ?>">
            </div>
            <div class="form-group col-lg-12">
              <label> الأسم انجليزى  </label>
              <input type="text" name="name_en" class="form-control" placeholder="الأسم انجليزى " required value="<?php echo e(old('name_en')); ?>">
            </div>

            <div class="form-group col-lg-12">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary">
                  <input type="radio" name="active" id="option2" value="0" autocomplete="off"> <?php echo e(trans('admin.noActvided')); ?>

                </label>
                <label class="btn btn-secondary active">
                  <input type="radio" name="active" id="option1" value="1" autocomplete="off" checked> <?php echo e(trans('admin.actvided')); ?>

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