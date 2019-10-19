<?php $__env->startSection('content'); ?>
    <section class="pageHolder">
        <div class="container">
            <div class="pageTitle">
                <h1><?php echo e(trans('admin.createUser')); ?></h1>
            </div>
            <div class="blockHolder">
                <div class="row">
                    <div class="col-xs-12 col-lg-5">
                        <div class="welcomeMSG visitorMSG">
                            <div class="msgLogo">
                                <img src="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>" alt="<?php echo e(trans('admin.createUser')); ?>">
                            </div>
                            <div class="msgText">
                                <div class="wlcTitle"><?php echo e(trans('admin.hello')); ?></div>
                                <p><?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-7">
                        <div class="blockContent">
                            <h2><?php echo e(trans('admin.createUser')); ?></h2>
                            <form action="<?php echo e(url('signup')); ?>" method="POST" id="loginForm" class="normalForm">
                                <?php echo e(csrf_field()); ?>

                                <?php echo $__env->make('layouts.msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <div class="inputHolder">
                                    <i class="material-icons">person_outline</i>
                                    <label for="username"><?php echo e(trans('admin.username')); ?>...</label>
                                    <input type="text" class="username" name="name" id="username" placeholder="<?php echo e(trans('admin.username')); ?>..." required value="<?php echo e(old('name')); ?>">
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">mail_outline</i>
                                    <label for="email"><?php echo e(trans('admin.email')); ?>...</label>
                                    <input type="email" class="email" name="email" id="email" placeholder="<?php echo e(trans('admin.email')); ?>..." required value="<?php echo e(old('email')); ?>">
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">lock</i>
                                    <label for="password"><?php echo e(trans('admin.password')); ?>...</label>
                                    <input type="password" name="password" class="password" id="password" placeholder="<?php echo e(trans('admin.password')); ?>..." required>
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">lock</i>
                                    <label for="confirm-password"><?php echo e(trans('admin.passwordRe')); ?>...</label>
                                    <input type="password" name="repassword" class="confirm-password" id="confirm-password" placeholder="<?php echo e(trans('admin.passwordRe')); ?>..." required>
                                </div>
                                <div class="formHint"><?php echo e(trans('admin.yesAcc')); ?> <a href="<?php echo e(url('/login')); ?>" title="<?php echo e(trans('admin.signIn')); ?>"><?php echo e(trans('admin.signIn')); ?></a></div>
                                <div class="submitForm">
                                    <input type="submit" class="submit primaryButton" value="<?php echo e(trans('admin.createUser')); ?>">
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