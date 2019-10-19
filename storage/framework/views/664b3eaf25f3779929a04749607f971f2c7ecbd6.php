<!doctype html>
<html lang="ar">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>" />
        <title><?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?> | <?php echo e(trans('admin.Dashboard')); ?></title>
        <!-- Common CSS -->
        <link rel="stylesheet" href="<?php echo e(url('/public/admin')); ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo e(url('/public/admin')); ?>/fonts/icomoon/icomoon.css" />
        <?php if(lang() == 'ar'): ?>
        <link rel="stylesheet" href="<?php echo e(url('/public/admin')); ?>/css/main-rtl.css" />
        <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(url('/public/admin')); ?>/css/main-rtl.css" />
        <?php endif; ?>

        <link href="<?php echo e(url('/public/admin')); ?>/vendor/chartist/css/chartist.min.css" rel="stylesheet" />
        <link href="<?php echo e(url('/public/admin')); ?>/vendor/chartist/css/chartist-custom.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e(url('/public/admin')); ?>/css/font-awesome/css/font-awesome.min.css">
            <?php echo $__env->yieldContent('style'); ?>
    </head>
    <body>

        <div class="app-wrap">