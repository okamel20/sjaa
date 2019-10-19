<footer class="siteFooter">
        <div class="mainFooter">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="footerAbout">
                            <div class="footerLogo">
                                <a href="index.html" title="Sjeaa"><img src="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>" alt="Sjeaa"></a>
                            </div>
                            <div class="text">
                                <h2><?php echo e(trans('admin.magazine')); ?></h2>
                                <p><?php if(!empty(setting())): ?><?php echo e(setting()['magazine_'.lang()]); ?> <?php endif; ?>.</p>
                                <div class="admins">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="jobTitle"><?php echo e(trans('admin.jobTitleBos')); ?></div>
                                            <div class="name"><?php if(!empty(setting())): ?><?php echo e(setting()['bos_editor_'.lang()]); ?> <?php endif; ?></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="jobTitle"><?php echo e(trans('admin.jobTitleN')); ?></div>
                                            <div class="name"><?php if(!empty(setting())): ?><?php echo e(setting()['managing_editor_'.lang()]); ?> <?php endif; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footerLinks">
                            <h2><?php echo e(trans('admin.shortLink')); ?></h2>
                            <ul>
                                <li>
                                    <a href="<?php echo e(url('/page/12')); ?>" title="<?php echo e(trans('admin.ed_now')); ?>"><?php echo e(trans('admin.ed_now')); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/page/13')); ?>" title="<?php echo e(trans('admin.archive')); ?>"><?php echo e(trans('admin.archive')); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/page/14')); ?>" title="<?php echo e(trans('admin.news')); ?>"><?php echo e(trans('admin.news')); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/page/8')); ?>" title="<?php echo e(trans('admin.thrir')); ?>"><?php echo e(trans('admin.thrir')); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/page/9')); ?>" title="<?php echo e(trans('admin.job_opportunities')); ?>"><?php echo e(trans('admin.job_opportunities')); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/page/1')); ?>" title="<?php echo e(trans('admin.faq')); ?>"><?php echo e(trans('admin.faq')); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footerContact">
                            <h2><?php echo e(trans('admin.contact')); ?></h2>
                            <div class="info">
                                <i class="material-icons">mail_outline</i>
                                <div class="text">
                                    <span><?php if(!empty(setting())): ?><?php echo e(setting()['email']); ?> <?php endif; ?></span>
                                </div>
                            </div>
                            <div class="info">
                                <i class="material-icons">location_on</i>
                                <div class="text">
                                    <span><?php if(!empty(setting())): ?><?php echo e(setting()['address_'.lang()]); ?> <?php endif; ?><br><?php if(!empty(setting())): ?><?php echo e(setting()['address2_'.lang()]); ?> <?php endif; ?></span>
                                </div>
                            </div>
                        </div>
                        <form action="<?php echo e(url('/subscribe')); ?>" method="POST" class="footerSubs">
                            <?php echo e(csrf_field()); ?>

                            <div class="inputHolder">
                                <input type="submit" value="<?php echo e(trans('admin.subscrip')); ?>" class="submit primaryButton">
                                <input type="email" name="email" id="subEmail" class="subEmail" required="" placeholder="<?php echo e(trans('admin.email')); ?> ...">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomBar">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <span><?php echo e(trans('admin.hgog')); ?>@ <?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?> 2019</span>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="socialIcons">
                            <a href="<?php if(!empty(setting())): ?><?php echo e(setting()['facebook']); ?> <?php endif; ?>" title="فيسبوك" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php if(!empty(setting())): ?><?php echo e(setting()['twiter']); ?> <?php endif; ?>" title="تويتر" target="_blank"><i class="fab fa-twitter"></i></a>
                            
                            <a href="<?php if(!empty(setting())): ?><?php echo e(setting()['insta_link']); ?> <?php endif; ?>" title="انستغرام" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="<?php if(!empty(setting())): ?><?php echo e(setting()['gogle']); ?> <?php endif; ?>" title="جوجل بلس" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php if(lang() == 'ar'): ?>
    <script src="<?php echo e(url('/public/web/')); ?>/js/main.js"></script>
    <?php else: ?>
    <script src="<?php echo e(url('/public/web/')); ?>/js/main-en.js"></script>
    <?php endif; ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.langSelect').change(function(event) {
            var langChange = $('.langSelect').val();
            var url = "<?php echo e(url('/lang')); ?>"+"/"+langChange;
            window.location.href=url;
        });
    </script>

    <?php if(!empty(Session::get('save'))): ?>
        <script type="text/javascript">
            swal("<?php echo e(trans('admin.success')); ?>", "<?php echo e(Session::get('save')); ?>", "success");
        </script>
    <?php endif; ?>
    
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>