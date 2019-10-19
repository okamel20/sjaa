<?php $__env->startSection('content'); ?>
     <section class="pageHolder archivePage">
        <div class="container">
            <div class="pageTitle">
                <h1><?php echo e(trans('admin.editions')); ?></h1>
            </div>
            
            
            <ul class="infoList">
                <li class="listItem">
                    <p><?php echo e(trans('admin.editionscontent')); ?></p>
                </li>
            </ul>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>