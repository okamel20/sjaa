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

                    <div class="form-group col-md-6">
                      <label class="col-form-label"> رئيس التحرير عربى</label>
                      <input type="text" name="bos_editor_ar" class="form-control" placeholder="رئيس التحرير" required value="<?php echo e(oldOrValue('bos_editor_ar',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> رئيس التحرير انجليزى</label>
                      <input type="text" name="bos_editor_en" class="form-control" placeholder="رئيس التحرير" required value="<?php echo e(oldOrValue('bos_editor_en',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> مدير التحرير  عربى</label>
                      <input type="text" name="managing_editor_ar" class="form-control" placeholder="مدير التحرير" required value="<?php echo e(oldOrValue('managing_editor_ar',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> مدير التحرير  انجليزى</label>
                      <input type="text" name="managing_editor_en" class="form-control" placeholder="مدير التحرير" required value="<?php echo e(oldOrValue('managing_editor_en',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> العنوان عربى</label>
                      <input type="text" name="address_ar" class="form-control" placeholder="العنوان عربى" required value="<?php echo e(oldOrValue('address_ar',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> العنوان انجليزى</label>
                      <input type="text" name="address_en" class="form-control" placeholder="العنوان انجليزى" required value="<?php echo e(oldOrValue('address_en',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> الدولة عربى</label>
                      <input type="text" name="address2_ar" class="form-control" placeholder="الدولة عربى" required value="<?php echo e(oldOrValue('address2_ar',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> الدولة انجليزى</label>
                      <input type="text" name="address2_en" class="form-control" placeholder="الدولة انجليزى" required value="<?php echo e(oldOrValue('address2_en',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> صندوق بريد</label>
                      <input type="text" name="box_num" class="form-control" placeholder="صندوق بريد" required value="<?php echo e(oldOrValue('box_num',$data)); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> البريد الألكترونى</label>
                      <input type="text" name="email" class="form-control" placeholder="البريد الألكترونى" required value="<?php echo e(oldOrValue('email',$data)); ?>">
                    </div>

                    <div class="form-group col-md-12">
                      <label class="col-form-label"> مكتب التحرير عربى</label>
                      <input type="text" name="editorial_office_ar" class="form-control" placeholder="" required value="<?php echo e(oldOrValue('editorial_office_ar',$data)); ?>">
                    </div>

                    <div class="form-group col-md-12">
                      <label class="col-form-label"> مكتب التحرير انجليزى</label>
                      <input type="text" name="editorial_office_en" class="form-control" placeholder="" required value="<?php echo e(oldOrValue('editorial_office_en',$data)); ?>">
                    </div>
                    <div class="form-group col-md-12">
                      <label class="col-form-label"> مكتب التحرير عربى</label>
                      <input type="text" name="editorial_office2_ar" class="form-control" placeholder="" required value="<?php echo e(oldOrValue('editorial_office2_ar',$data)); ?>">
                    </div>

                    <div class="form-group col-md-12">
                      <label class="col-form-label"> مكتب التحرير انجليزى</label>
                      <input type="text" name="editorial_office2_en" class="form-control" placeholder="" required value="<?php echo e(oldOrValue('editorial_office2_en',$data)); ?>">
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
    <script src="<?php echo e(url('/public/admin/plugins/ckeditor/')); ?>/ckeditor.js"></script>
   
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>