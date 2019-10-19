<?php $__env->startSection('content'); ?>
      <section class="pageHolder">
        <div class="container">
            <div class="pageTitle">
                <h1><?php echo e(trans('admin.contact')); ?></h1>
                
            </div>
            <div class="blockHolder">
                <div class="row">
                    <div class="col-xs-12 col-lg-5">
                        <div class="welcomeMSG">
                            <div class="msgLogo">
                                <img src="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>" alt="<?php echo e(trans('admin.contact')); ?>">
                            </div>
                            <div class="contactinfo">
                                
                                
                                <div class="infoItem">
                                    <i class="material-icons">place</i>
                                    

                                    <div class="infoText"><?php if(!empty(setting())): ?><?php echo e(setting()['address_'.lang()]); ?> <?php endif; ?><br><?php if(!empty(setting())): ?><?php echo e(setting()['address2_'.lang()]); ?> <?php endif; ?></div>
                                </div>
                                <div class="infoItem">
                                    <i class="material-icons">mail_outline</i>
                                    <div class="infoText"><?php if(!empty(setting())): ?><?php echo e(setting()['email']); ?> <?php endif; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-7">
                        <div class="blockContent">
                            <h2><?php echo e(trans('admin.contact')); ?></h2>
                            <?php if(lang() == 'en'): ?>
                            <p>If you have a system query and cannot find the answer within this website or ScholarOne site or SJEAA website in Emerald, please e-mail to manuscriptcentral@emeraldinsight.com.</p>
                            <?php elseif(lang() == 'ar'): ?>
                            <p>في حالة وجود أي استفسار ولم تتحصل على الإجابة عنه داخل هذا الموقع (scholar one) أو موقع المجلة (SJEAA website in Emerald) الرجاء التواصل عن طريق البريد الإلكتروني: manuscriptcentral@emeraldinsight.com</p>
                            <?php endif; ?>
                            <form action="<?php echo e(url('/contact')); ?>" method="post" id="loginForm" class="normalForm">
                                <?php echo e(csrf_field()); ?>

                                <div class="inputHolder">
                                    <i class="material-icons">person_outline</i>
                                    <label for="username"><?php echo e(trans('admin.name')); ?>...</label>
                                    <input type="text" class="username" name="name" id="username" placeholder="<?php echo e(trans('admin.name')); ?> ..." required>
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">mail_outline</i>
                                    <label for="email"><?php echo e(trans('admin.email')); ?>...</label>
                                    <input type="email" class="email" name="email" id="email" placeholder="<?php echo e(trans('admin.email')); ?> ..." required>
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">stay_current_portrait</i>
                                    <label for="mobile"><?php echo e(trans('admin.mobile')); ?>...</label>
                                    <input type="tel" name="phone" class="mobile" id="mobile" placeholder="<?php echo e(trans('admin.mobile')); ?> ..." required>
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">lock</i>
                                    <label for="username"><?php echo e(trans('admin.subject')); ?>...</label>
                                    <input type="text" class="contact_subject_id" name="contact_subject_id" id="contact_subject_id" placeholder="<?php echo e(trans('admin.subject')); ?> ..." required>
                                </div>
                                <div class="inputHolder textarea">
                                    <i class="material-icons">chat_bubble_outline</i>
                                    <textarea name="msg" id="message" class="message" rows="8" placeholder="<?php echo e(trans('admin.msgText')); ?> ..." required=""></textarea>
                                </div>
                                <div class="submitForm">
                                    <input type="submit" class="submit primaryButton" value="<?php echo e(trans('admin.send')); ?>">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>