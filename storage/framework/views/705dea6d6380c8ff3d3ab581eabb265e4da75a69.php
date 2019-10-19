<?php $__env->startSection('content'); ?>
<div class="main-content">
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header"><?php echo e($title); ?> </div>
            <div class="card-body">
              <?php echo Form::open(['url'=>adminUrl('editions/'.$data->id),'method'=>'put','files'=>true]); ?>


                <div class="form-group col-md-12">
                  <label class="col-form-label">رقم العدد  عربى</label>
                  <input type="text" name="the_number_ar" class="form-control" required="" value="<?php echo e(oldOrValue('the_number_ar',$data)); ?>">
                </div>

                <div class="form-group col-md-12">
                  <label class="col-form-label">رقم العدد انجليزى</label>
                  <input type="text" name="the_number_en" class="form-control" required="" value="<?php echo e(oldOrValue('the_number_en',$data)); ?>">
                </div>

                <div class="form-group col-lg-12">
                  <label> الطبعة </label>
                  <br>
                  <a href="<?php echo e(Storage::url($data['pdf_file'])); ?>" target="_blank">تحميل</a>
                  <br>
                  <input type="file" name="pdf_file" class="form-control" placeholder="<?php echo e(trans('admin.file')); ?>" >
                </div>
                
                <div class="form-group col-md-12">
                  <label class="col-form-label"> تاريخ الطبعة</label>
                  <input type="date" name="date" class="form-control" required="" value="<?php echo e(oldOrValue('date',$data)); ?>">
                </div>

                

                <div class="form-group col-lg-12 ">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary <?php if($data->active == 0): ?> active <?php endif; ?>">
                      <input type="radio" name="active" id="option2" value="0" autocomplete="off"<?php if($data->active == 0): ?> checked="" <?php endif; ?>> مؤرشفة
                    </label>
                    <label class="btn btn-secondary <?php if($data->active == 1): ?> active <?php endif; ?>">
                      <input type="radio" name="active" id="option1" value="1" autocomplete="off" <?php if($data->active == 1): ?> checked="" <?php endif; ?>> غير مؤرشفة
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