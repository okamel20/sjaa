<?php $__env->startSection('content'); ?>
<section class="pageHolder articlePage">
    <div class="container">
        <article class="articleContent">
            
        </article>
        <div class="relatesArticles">
            <h2><?php echo e($author['name_'.lang()]); ?></h2>
            <div class="row justify-content-sm-center">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-lg-4" style="margin-bottom: 20px">
                    <div class="relatedItem">
                        <div class="IMG">
                            <a href="#" title="<?php echo e($outher['title_'.lang()]); ?>">
                                <img src="<?php echo e(Storage::url($outher['img'])); ?>" alt="<?php echo e($outher['title_'.lang()]); ?>">
                            </a>
                        </div>
                        <div class="itemText">
                            <div class="postDetails">
                                <div class="date"><?php echo e($outher['month_name_'.lang()]); ?> <?php echo e($outher['year']); ?></div>
                                <div class="by"><span><?php echo e(trans('admin.newsBy')); ?>:</span><a href="<?php echo e(url('/author/'.$outher['author_id'])); ?>" title="<?php echo e(\App\Author::find($outher['author_id'])['name_'.lang()]); ?>"><?php echo e(\App\Author::find($outher['author_id'])['name_'.lang()]); ?></a></div>
                            </div>
                            <div class="itemTitle">
                                <a href="<?php echo e(url('/news/'.$outher['id'])); ?>" title="<?php echo e($outher['title_'.lang()]); ?>"><h3><?php echo e($outher['title_'.lang()]); ?></h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="clearfix"></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <br>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>