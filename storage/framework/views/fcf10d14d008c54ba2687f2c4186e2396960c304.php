<?php $__env->startSection('content'); ?>
     <section class="pageHolder" style="padding: 40px 0 55px 0!important">
        <div class="container">
            <div class="pageTitle" style="margin-top: 0px!important">
                <h1 style="margin-bottom: 0px!important"><?php echo e($title); ?></h1>
            </div>
            <div class="pageDescription">
                <p><?php echo $page['text_start_'.lang()]; ?></p>
            </div>
            <div class="accordionBlock">
            	<?php $count = 1 ;?>
            	<?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="accItem <?php if($count == 1): ?> active <?php endif; ?>">
                    <div class="accTitle">
                        <h2><?php echo $content['title_'.lang()]; ?></h2>
                    </div>
                    <div class="accContent" style="<?php if($count == 1): ?> display:block; <?php else: ?> display:none; <?php endif; ?>">
                        <p><?php echo $content['content_'.lang()]; ?></p>
                    </div>
                </div>
                <?php $count++ ;?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
            <ul class="infoList">
                <?php echo $page['end_text_'.lang()]; ?>

                
            </ul>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>