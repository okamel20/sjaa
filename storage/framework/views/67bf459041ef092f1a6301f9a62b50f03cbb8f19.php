<?php $__env->startSection('content'); ?>
<div class="main-content">
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header"><?php echo e($title); ?> </div>
            <div class="card-body">
              <?php echo Form::open(['url'=>adminUrl('news/'.$data->id),'method'=>'put','files'=>true]); ?>


                <div class="form-group col-lg-12">
                  <label>الكاتب</label>
                  <select class="form-control" required="" name="author_id">
                    <?php $__currentLoopData = \App\Author::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($author->id); ?>" <?php if($data->author_id == $author->id): ?> selected="" <?php endif; ?>><?php echo e($author['name_'.lang()]); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>

                <div class="form-group col-lg-12">
                  <label> عنوان الخبر بالعربى </label>
                  <input type="text" name="title_ar" class="form-control" placeholder="عنوان الخبر بالعربى" required value="<?php echo e(oldOrValue('title_ar',$data)); ?>">
                </div>
                <div class="form-group col-lg-12">
                  <label> عنوان الخبر  انجليزى </label>
                  <input type="text" name="title_en" class="form-control" placeholder="عنوان الخبر  انجليزى" required value="<?php echo e(oldOrValue('title_en',$data)); ?>">
                </div>

                <div class="form-group col-lg-12">
                  <label> <?php echo e(trans('admin.img')); ?> </label>
                  <img src="<?php echo e(Storage::url($data->img)); ?>" class="img-responsive clearfix" width="100px" height="100px">
                  <br>
                  <input type="file" name="img" class="form-control" placeholder="<?php echo e(trans('admin.img')); ?>" accept="image/x-png,image/gif,image/jpeg">
                </div>
                
                <div class="form-group col-md-12">
                  <label class="col-form-label"> مجتوى الخبر بالعربى</label>
                  <textarea class="form-control ckeditor" required="" name="content_ar" rows="10"><?php echo e(oldOrValue('content_ar',$data)); ?></textarea>
                </div>

                <div class="form-group col-md-12">
                  <label class="col-form-label"> محتوى الخبر بالانجليزى </label>
                  <textarea class="form-control ckeditor" required="" name="content_en" rows="10"><?php echo e(oldOrValue('content_en',$data)); ?></textarea>
                </div>

                <div class="form-group col-lg-12">
                  <label>انتقال للصفحة </label>
                  <select name="page_num" required="" class="form-control">
                    <option value="0" <?php if($data['page_num'] == 0): ?> selected="" <?php endif; ?>>لمحتوى الخبر</option>
                    <?php $__currentLoopData = \App\Page::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($page['id']); ?>" <?php if($data['page_num'] == $page['id']): ?> selected="" <?php endif; ?>><?php echo e($page['title_ar']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
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