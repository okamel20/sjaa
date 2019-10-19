<div class="row">
    <div class="col-12 col-sm-6 col-lg-8 rightBlock">
        <?php if(isset($new1['id'])): ?>
        <div class="postItem">
            <div class="postIMG">
                <a href="<?php echo e(url('/news/'.$new1['id'])); ?>" title="<?php echo e($new1['title_'.lang()]); ?>">
                    <img src="<?php echo e(Storage::url($new1['img'])); ?>" alt="<?php echo e($new1['title_'.lang()]); ?>">
                </a>
            </div>
            <div class="postText">
                <div class="postDetails">
                    <div class="date"><?php echo e($new1['month_name_'.lang()]); ?> <?php echo e($new1['year']); ?></div>
                    <div class="by"><span><?php echo e(trans('admin.newsBy')); ?>:</span><a href="<?php echo e(url('/author/'.$new1['author_id'])); ?>" title="<?php echo e(\App\Author::find($new1['author_id'])['name_'.lang()]); ?>"><?php echo e(\App\Author::find($new1['author_id'])['name_'.lang()]); ?></a></div>
                </div>
                <h2><a href="<?php echo e(url('/news/'.$new1['id'])); ?>" title="<?php echo e($new1['title_'.lang()]); ?>"><?php echo e($new1['title_'.lang()]); ?></a></h2>
            </div>
        </div>
        <?php endif; ?>
        <?php if(isset($new2['id'])): ?>
        <div class="postItem">
            <div class="postIMG">
                <a href="<?php echo e(url('/news/'.$new2['id'])); ?>" title="<?php echo e($new2['title_'.lang()]); ?>">
                    <img src="<?php echo e(Storage::url($new2['img'])); ?>" alt="<?php echo e($new2['title_'.lang()]); ?>">
                </a>
            </div>
            <div class="postText">
                <div class="postDetails">
                    <div class="date"><?php echo e($new1['month_name_'.lang()]); ?> <?php echo e($new1['year']); ?></div>
                    <div class="by"><span><?php echo e(trans('admin.newsBy')); ?>:</span><a href="<?php echo e(url('/author/'.$new2['author_id'])); ?>" title="<?php echo e(\App\Author::find($new2['author_id'])['name_'.lang()]); ?>"><?php echo e(\App\Author::find($new2['author_id'])['name_'.lang()]); ?></a></div>
                </div>
                <h2><a href="<?php echo e(url('/news/'.$new2['id'])); ?>" title="<?php echo e($new2['title_'.lang()]); ?>"><?php echo e($new2['title_'.lang()]); ?></a></h2>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 leftBlock">
        <?php if(isset($new3['id'])): ?>
        <div class="postItem">
            <div class="postIMG">
                <a href="<?php echo e(url('/news/'.$new3['id'])); ?>" title="<?php echo e($new3['title_'.lang()]); ?>">
                    <img src="<?php echo e(Storage::url($new3['img'])); ?>"
                        alt="<?php echo e($new3['title_'.lang()]); ?>">
                </a>
            </div>
            <div class="postText">
                <div class="postDetails">
                    <div class="date"><?php echo e($new1['month_name_'.lang()]); ?> <?php echo e($new1['year']); ?></div>
                    <div class="by"><span><?php echo e(trans('admin.newsBy')); ?>:</span><a href="<?php echo e(url('/author/'.$new3['author_id'])); ?>" title="<?php echo e(\App\Author::find($new3['author_id'])['name_'.lang()]); ?>"><?php echo e(\App\Author::find($new3['author_id'])['name_'.lang()]); ?></a></div>
                </div>
                <h2><a href="<?php echo e(url('/news/'.$new3['id'])); ?> " title="<?php echo e($new3['title_'.lang()]); ?>"><?php echo e($new3['title_'.lang()]); ?></a></h2>
            </div>
        </div>
        <?php endif; ?>
        <?php if(isset($new4['id'])): ?>
        <div class="postItem">
            <div class="postIMG">
                <a href="<?php echo e(url('/news/'.$new4['id'])); ?>" title="<?php echo e($new4['title_'.lang()]); ?>">
                    <img src="<?php echo e(Storage::url($new4['img'])); ?>"
                        alt="<?php echo e($new4['title_'.lang()]); ?>">
                </a>
            </div>
            <div class="postText">
                <div class="postDetails">
                    <div class="date"><?php echo e($new1['month_name_'.lang()]); ?> <?php echo e($new1['year']); ?></div>
                    <div class="by"><span><?php echo e(trans('admin.newsBy')); ?>:</span><a href="<?php echo e(url('/author/'.$new4['author_id'])); ?>" title="<?php echo e(\App\Author::find($new4['author_id'])['name_'.lang()]); ?>"><?php echo e(\App\Author::find($new4['author_id'])['name_'.lang()]); ?></a></div>
                </div>
                <h2>
                    <a href="<?php echo e(url('/news/'.$new4['id'])); ?>"
                        title="<?php echo e($new4['title_'.lang()]); ?>"><?php echo e($new4['title_'.lang()]); ?>

                    </a>
                </h2>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
