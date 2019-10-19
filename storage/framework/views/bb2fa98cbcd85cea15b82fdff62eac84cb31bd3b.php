<?php $__env->startSection('content'); ?>
<section class="mainSlider">
	<div class="owl-carousel">
		<?php $__currentLoopData = \App\Slider::where('active',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="item">
			<div class="itemHolder">
				<img src="<?php echo e(Storage::url($slider['img'])); ?>" alt="<?php echo e($slider['title_'.lang()]); ?>">
				<div class="itemText">
					<h2><?php echo e($slider['title_'.lang()]); ?></h2>
					<p><?php echo e($slider['content_'.lang()]); ?> </p>
					<a href="<?php echo e(url('/page/10')); ?>" class="moreLink primaryButton"><i class="material-icons">add</i><?php echo e(trans('admin.more')); ?></a>
				</div>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</section>
<section class="about">
	<div class="container" style="padding-bottom: 20px!important">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="aboutItem" data-content="vision" data-subject-ar="الرؤية" data-subject-en="Vision">
					<a href="#vision" title="<?php echo e(trans('admin.vision')); ?>"><img src="<?php echo e(url('/public/web/')); ?>/img/eye.svg" alt="<?php echo e(trans('admin.vision')); ?>"><span><?php echo e(trans('admin.vision')); ?></span></a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="aboutItem" data-content="goal" data-subject-ar="الهدف"  data-subject-en="Aim">
					<a href="#goal" title="<?php echo e(trans('admin.goal')); ?>"><img src="<?php echo e(url('/public/web/')); ?>/img/goal.svg" alt="<?php echo e(trans('admin.goal')); ?>"><span><?php echo e(trans('admin.goal')); ?></span></a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="aboutItem" data-content="message" data-subject-ar="الرسالة" data-subject-en="Mission">
					<a href="#message" title="<?php echo e(trans('admin.message')); ?>"><img src="<?php echo e(url('/public/web/')); ?>/img/mission.svg" alt="<?php echo e(trans('admin.message')); ?>"><span><?php echo e(trans('admin.message')); ?></span></a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="aboutItem" data-content="publish" data-subject-ar="نطاق النشر" data-subject-en="Scope">
					<a href="#publish" title="<?php echo e(trans('admin.publish')); ?>"><img src="<?php echo e(url('/public/web/')); ?>/img/newspaper.svg" alt="<?php echo e(trans('admin.publish')); ?>"><span><?php echo e(trans('admin.publish')); ?></span></a>
				</div>
			</div>
		</div>
		<div class="aboutText">
			<div class="aboutTextAjax"></div>
		</div>
	</div>
</section>
<section class="news">
	<div class="container">
		<div class="newsTitle">
			
		</div>
		
			<div class="item">
				<div class="row">
					<?php $__currentLoopData = \App\News::where('active',1)->orderBy('id','desc')->limit(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if(isset($news)): ?>
					<div class="col-12 col-md-6">
						<div class="itemHolder">
							<div class="itemIMG">
								<a href="#"><img src="<?php echo e(Storage::url($news['img'])); ?>" alt="<?php echo e($news['title_'.lang()]); ?>" width="600px"></a>
							</div>
							<h3><a href="#" title="<?php echo e($news['title_'.lang()]); ?>"><?php echo e($news['title_'.lang()]); ?></a></h3>
							
							<p><?php if($news['content_'.lang()]): ?> <?php echo str_limit($news['content_'.lang()] , 150); ?> <?php endif; ?></p>
							<a href="<?php if($news['page_num'] == 0 || $news['page_num'] == NULL): ?> <?php echo e(url('/news/'.$news['id'])); ?> <?php else: ?> <?php echo e(url('/page/'.$news['page_num'])); ?> <?php endif; ?>" class="moreLink primaryButton"><?php echo e(trans('admin.more')); ?></a>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
			<div class="item">
				<div class="row">
					<?php $__currentLoopData = \App\News::where('active',1)->orderBy('id','desc')->skip(4)->limit(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if(isset($news)): ?>
					<div class="col-12 col-md-6">
						<div class="itemHolder">
							<div class="itemIMG">
								<a href="#"><img src="<?php echo e(Storage::url($news['img'])); ?>" alt="<?php echo e($news['title_'.lang()]); ?>" width="600px"></a>
							</div>
							<h3><a href="#" title="<?php echo e($news['title_'.lang()]); ?>"><?php echo e($news['title_'.lang()]); ?></a></h3>
							<div class="postDetails">
								<div class="date"><?php echo e($news['month_name_'.lang()]); ?> <?php echo e($news['year']); ?></div>
								<div class="by">
									<span><?php echo e(trans('admin.newsBy')); ?>:</span>
									<a href="<?php echo e(url('/author/'.$news['author_id'])); ?>" title="<?php echo e(\App\Author::find($news['author_id'])['name_'.lang()]); ?>"><?php echo e(\App\Author::find($news['author_id'])['name_'.lang()]); ?>

									</a>
								</div>
							</div>
							<p><?php echo str_limit($news['content_'.lang()] , 150); ?> </p>
							<a href="<?php if($news['page_num'] == 0 || $news['page_num'] == NULL): ?> <?php echo e(url('/news/'.$news['id'])); ?> <?php else: ?> <?php echo e(url('/page/'.$news['page_num'])); ?> <?php endif; ?>" class="moreLink primaryButton"><?php echo e(trans('admin.more')); ?></a>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		
	</div>
</section>
 

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		var subject = "<?php echo e(trans('admin.vision')); ?>";
        $.ajax({
            type: 'GET',
            url: '<?php echo e(url('aboutTextAjax')); ?>',
            data: {content: "vision" , subject: subject },
            success: function(data) {
                // console.log(data);
                $('.aboutTextAjax').html(data);
            }
        });
    });

    $('.aboutItem').click(function(event) {
    	var content = $(this).data('content');
    	var subject = $(this).data('subject-'+"<?php echo e(lang()); ?>");
    	$.ajax({
            type: 'GET',
            url: '<?php echo e(url('aboutTextAjax')); ?>',
            data: {content: content , subject: subject },
            success: function(data) {
                // console.log(data);
                $('.aboutTextAjax').html(data);
            }
        });
        // return false;
    });
</script>

<?php $__env->stopSection(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>