<!-- BEGIN .main-footer -->
            <footer class="main-footer fixed-btm">
                Copyright <?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?> 2018 &copy;
            </footer>
            <!-- END: .main-footer -->
        </div>
        <!-- END: .app-wrap -->

        <!-- jQuery first, then Tether, then other JS. -->
        <script src="<?php echo e(url('/public/admin/')); ?>/js/jquery.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/js/tether.min.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/unifyMenu/unifyMenu.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/onoffcanvas/onoffcanvas.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/js/moment.js"></script>

        <!-- News ticker -->
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/newsticker/newsTicker.min.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/newsticker/custom-newsTicker.js"></script>

        <!-- Slimscroll JS -->
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/slimscroll/slimscroll.min.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/slimscroll/custom-scrollbar.js"></script>

        <!-- Chartist JS -->
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/chartist/js/chartist.min.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/chartist/js/chartist-tooltip.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/chartist/js/custom/custom-line-chart.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/chartist/js/custom/custom-line-chart1.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/chartist/js/custom/donut-chart.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/chartist/js/custom/custom-multiline-chart.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/chartist/js/custom/bi-polar-bar-chart.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

        <!-- Data Tables -->
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/datatables/dataTables.min.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/datatables/dataTables.bootstrap.min.js"></script>
        
        <!-- Custom Data tables -->
        
        <script src="<?php echo e(url('/public/admin/')); ?>/vendor/datatables/custom/fixedHeader.js"></script>


        <!-- Common JS -->
        <script src="<?php echo e(url('/public/admin/')); ?>/js/common.js"></script>
        <script src="<?php echo e(url('/public/admin/')); ?>/dist/js/omarkamel.js"></script>
        
        <?php echo $__env->yieldContent('script'); ?>
        
    </body>
</html>