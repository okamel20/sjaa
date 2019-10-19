<?php $__env->startSection('content'); ?>
 <section class="pageHolder newsHolder">
    <div class="container">
        <div class="pageTitle">
            <h1><?php echo e($title); ?></h1>
            
        </div>

        <div class="newsR"></div>

        <div class="loadMore text-center">
            <a href="" class="primaryButton"  data-id="<?php echo e($numpage); ?>" title="<?php echo e(trans('admin.more')); ?>"><?php echo e(trans('admin.more')); ?></a>
        </div>

        <ul class="infoList">
            <li class="listItem">
                <p><?php echo e(trans('admin.newscontent')); ?></p>
            </li>
        </ul>
    </div>
</section>

<?php $__env->startSection('script'); ?>  
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: 'GET',
            url: '<?php echo e(url('newscontents')); ?>',
            data: {page: "1" },
            success: function(data) {
                // console.log(data);
                $('.newsR').html(data);
            }

        });
    });

    $('.primaryButton').click(function(event) {
        var id = $(this).data('id');
        id = id + 1;
        $(".primaryButton").attr("data-id",id);
        $.ajax({
            type: 'GET',
            url: "<?php echo e(url('/newscontents?page=')); ?>"+id,
            success: function(data) {
                $('.newsR').append(data);
                
            },

        });
        return false;
    });


    
                
</script>  
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>