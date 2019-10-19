<?php $__env->startSection('content'); ?>
     <section class="pageHolder archivePage">
        <div class="container">
            <div class="pageTitle">
                <h1><?php echo e(trans('admin.archive')); ?></h1>
            </div>
            <div class="archiveHolder" id="filterOptions">
                <div class="filterOptions">
                    <span class="filterOptionTitle"><?php echo e(trans('admin.filteryear')); ?></span>

                    <select id="byYear" class="filterButton">
                        <option value="0"><?php echo e(trans('admin.year')); ?></option>
                        <?php for($i = 2014 ; $i <= \Carbon\Carbon::now()->year ; $i++): ?>
                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </select>

                    <select id="byMonth" class="filterButton">
                        <option value="0"><?php echo e(trans('admin.month')); ?></option>
                        <option value="Jan"><?php echo e(trans('admin.Jan')); ?></option>
                        <option value="Feb"><?php echo e(trans('admin.Feb')); ?></option>
                        <option value="Mar"><?php echo e(trans('admin.Mar')); ?></option>
                        <option value="Apr"><?php echo e(trans('admin.Apr')); ?></option>
                        <option value="May"><?php echo e(trans('admin.May')); ?></option>
                        <option value="Jun"><?php echo e(trans('admin.Jun')); ?></option>
                        <option value="Jul"><?php echo e(trans('admin.Jul')); ?></option>
                        <option value="Aug"><?php echo e(trans('admin.Aug')); ?></option>
                        <option value="Sep"><?php echo e(trans('admin.Sep')); ?></option>
                        <option value="Oct"><?php echo e(trans('admin.Oct')); ?></option>
                        <option value="Nov"><?php echo e(trans('admin.Nov')); ?></option>
                        <option value="Dec"><?php echo e(trans('admin.Dec')); ?></option>
                    </select>

                    <select id="byDay" class="filterButton">
                        <option value="0"><?php echo e(trans('admin.day')); ?></option>
                        <option value="Sunday"><?php echo e(trans('admin.Sunday')); ?></option>
                        <option value="Monday"><?php echo e(trans('admin.Monday')); ?></option>
                        <option value="Tuesday"><?php echo e(trans('admin.Tuesday')); ?></option>
                        <option value="Wednesday"><?php echo e(trans('admin.Wednesday')); ?></option>
                        <option value="Thursday"><?php echo e(trans('admin.Thursday')); ?></option>
                        <option value="Friday"><?php echo e(trans('admin.Friday')); ?></option>
                        <option value="Saturday"><?php echo e(trans('admin.Saturday')); ?></option>
                    </select>
                    
                </div>
                <div class="filterItems">
                    <div class="row">
                        <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-md-6 col-lg-3 filterItem <?php echo e(date('Y', strtotime($archive->date))); ?> <?php echo e(date('M', strtotime($archive->date))); ?> <?php echo e(date('l', strtotime($archive->date))); ?>">
                            <div class="itemHolder">
                                <div class="IMG">
                                    <img src="<?php echo e(url('/public/web')); ?>/img/archive-item.png" alt="">
                                </div>
                                <div class="itemHover">
                                    <div class="itemLinks">
                                        <a href="<?php echo e(Storage::url($archive['pdf_file'])); ?>" title="<?php echo e(trans('admin.download')); ?>" class="whiteButton download" download>
                                            <i class="material-icons">file_download</i>
                                            <span> <?php echo e(trans('admin.download')); ?></span>
                                        </a>
                                        <a href="<?php echo e(Storage::url($archive['pdf_file'])); ?>" title="<?php echo e(trans('admin.show')); ?>" class="whiteButton view" target="_blank">
                                            <i class="material-icons">receipt</i>
                                            <span><?php echo e(trans('admin.show')); ?></span>
                                        </a>
                                    </div>
                                    <div class="hoverIcon">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            

            <ul class="infoList">
                <li class="listItem">
                    <p><?php echo e(trans('admin.archivecontent')); ?></p>
                </li>
            </ul>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>