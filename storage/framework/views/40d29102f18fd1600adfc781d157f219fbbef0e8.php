<!DOCTYPE html>
<html lang="<?php echo e(lang()); ?>">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Eng. A7meD KaMeL - a-kamel.com - 01003510901">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?> | <?php echo e($title); ?></title>
    <meta name="description" content="<?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?> | <?php echo e($title); ?>">
    <link rel="icon" href="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>"/>
    <!-- Font Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo e(url('/public/web')); ?>/css/owl.carousel.min.css">
    <?php if(lang() == 'ar'): ?>
    <link rel="stylesheet" href="<?php echo e(url('/public/web')); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo e(url('/public/web')); ?>/css/media.css">
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo e(url('/public/web')); ?>/css/style-en.css">
    <link rel="stylesheet" href="<?php echo e(url('/public/web')); ?>/css/media-en.css">
    <?php endif; ?>
    <!-- JS Files -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo e(url('/public/web')); ?>/js/owl.carousel.min.js"></script>
    <!--[if lt IE 9]>
    <script type='text/javascript' src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js?ver=5.1.1'></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type='text/javascript' src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js?ver=5.1.1'></script>
    <![endif]-->
</head>
<body dir="<?php echo e(direction()); ?>">
    <header class="mainHeader">
        <div class="topHeader">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12 col-md-4 userLinks">
                        <?php if(!Auth::user()): ?>
                        <div class="signUp">
                            <a href="<?php echo e(url('/signup')); ?>"><i class="material-icons">person_outline</i><?php echo e(trans('admin.signup')); ?></a>
                        </div>
                        <div class="login">
                            <a href="<?php echo e(url('/login')); ?>"><?php echo e(trans('admin.signIn')); ?></a>
                        </div>
                        <?php else: ?>
                        <div class="signUp">
                            <a><i class="material-icons">person_outline</i><?php echo e(Auth::user()->name); ?></a>
                        </div>
                        <div class="login">
                            <a href="<?php echo e(url('/SignOut')); ?>"><?php echo e(trans('admin.SignOut')); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="col-12 col-md-5 headerSearch">
                        <div class="searchHolder">
                            <form action="">
                                <div class="inputHolder">
                                    <input type="text" class="searchText" placeholder="<?php echo e(trans('admin.sSearch')); ?>">
                                    <a href="#" class="searchSubmit"><i class="material-icons">search</i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 addSec">
                        <div class="langSwitch">
                            <select name="language-select" id="langSelect" class="langSelect">
                                <option value="ar" <?php if(lang() == 'ar'): ?> selected <?php endif; ?>><?php echo e(trans('admin.arabic')); ?></option>
                                <option value="en" <?php if(lang() == 'en'): ?> selected <?php endif; ?>><?php echo e(trans('admin.english')); ?></option>
                            </select>
                        </div>
                        <div class="socialIcons">
                            <a href="<?php if(!empty(setting())): ?><?php echo e(setting()['facebook']); ?> <?php endif; ?>" title="فيسبوك" target="_blank" style="margin-right: 1!important"><i class="fab fa-facebook-f" ></i></a>
                            <a href="<?php if(!empty(setting())): ?><?php echo e(setting()['twiter']); ?> <?php endif; ?>" title="تويتر" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="<?php if(!empty(setting())): ?><?php echo e(setting()['insta_link']); ?> <?php endif; ?>" title="انستغرام" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="<?php if(!empty(setting())): ?><?php echo e(setting()['gogle']); ?> <?php endif; ?>" title="فوجل بلس" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomHeader">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 logoHeader">
                        <div class="sideMenu">
                            <div class="sideMenuHolder">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                            <div class="sideMenuItems">
                                <?php $page12 = \App\Page::find(12) ;?>
                                <a href="<?php echo e(url('/page/'.$page12['id'])); ?>" title="<?php echo e($page12['title_'.lang()]); ?>" class="<?php if(Request::url() == url('/page/12')): ?> active <?php endif; ?>"><?php echo e($page12['title_'.lang()]); ?></a>
                                <?php $page11 = \App\Page::find(11) ;?>
                                <a href="<?php echo e(url('/page/'.$page11['id'])); ?>" title="<?php echo e($page11['title_'.lang()]); ?>" class="<?php if(Request::url() == url('/page/11')): ?> active <?php endif; ?>"><?php echo e($page11['title_'.lang()]); ?></a>
                                <?php $page3 = \App\Page::find(3) ;?>
                                <a href="<?php echo e(url('/page/'.$page3['id'])); ?>" title="<?php echo e($page3['title_'.lang()]); ?>" class="<?php if(Request::url() == url('/page/3')): ?> active <?php endif; ?>"><?php echo e($page3['title_'.lang()]); ?></a>
                                <?php $page4 = \App\Page::find(4) ;?>
                                <a href="<?php echo e(url('/page/'.$page4['id'])); ?>" title="<?php echo e($page4['title_'.lang()]); ?>"  class="<?php if(Request::url() == url('/page/4')): ?> active <?php endif; ?>"><?php echo e($page4['title_'.lang()]); ?></a>
                                <?php $page5 = \App\Page::find(5) ;?>
                                <a href="<?php echo e(url('/page/'.$page5['id'])); ?>" title="<?php echo e($page5['title_'.lang()]); ?>" class="<?php if(Request::url() == url('/page/5')): ?> active <?php endif; ?>"><?php echo e($page5['title_'.lang()]); ?></a>
                                <?php $page6 = \App\Page::find(2) ;?>
                                <a href="<?php echo e(url('/page/'.$page6['id'])); ?>" title="<?php echo e($page6['title_'.lang()]); ?>" class="<?php if(Request::url() == url('/page/2')): ?> active <?php endif; ?>"><?php echo e($page6['title_'.lang()]); ?></a>
                                <?php $page7 = \App\Page::find(7) ;?>
                                <a href="<?php echo e(url('/page/'.$page7['id'])); ?>" title="<?php echo e($page7['title_'.lang()]); ?>" class="<?php if(Request::url() == url('/page/7')): ?> active <?php endif; ?>"><?php echo e($page7['title_'.lang()]); ?></a>
                            </div>
                            <div class="siteLogo">
                                <a href="<?php echo e(url('/')); ?>" title="Sjeaa"><img src="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>" alt="Sjeaa"></a>
                            </div>
                        </div>
                    </div>
                    <nav class="col-12 col-lg-8 mainNavbar">
                        <ul class="siteNav">
                            <li class="navItem">
                                <a href="<?php echo e(url('/')); ?>" title="<?php echo e(trans('admin.Home')); ?>" class="<?php if(Request::url() == url('/')): ?> active <?php endif; ?>"><i class="material-icons">home</i><span><?php echo e(trans('admin.Home')); ?></span></a>
                                <div class="popTitle"></div>
                            </li>
                            <li class="navItem">
                                <a href="<?php echo e(url('/page/14')); ?>" title="<?php echo e(trans('admin.news')); ?>" class="<?php if(Request::url() == url('/page/14') || Request::segment(1) == url('/page/13')): ?> active <?php endif; ?>"><i class="material-icons">assignment</i><span><?php echo e(trans('admin.news')); ?></span></a>
                                <div class="popTitle"></div>
                            </li>
                            <li class="navItem">
                                <a href="<?php echo e(url('/page/8')); ?>" title="<?php echo e(trans('admin.thrir')); ?>" class="<?php if(Request::url() == url('/page/8') ): ?> active <?php endif; ?>"><i class="material-icons">group</i><span><?php echo e(trans('admin.thrir')); ?></span></a>
                                <div class="popTitle"></div>
                            </li>

                            
                            
                            <li class="navItem">
                                <a href="<?php echo e(url('/page/13')); ?>" title="<?php echo e(trans('admin.archive')); ?>" class="<?php if(Request::url() == url('/page/13')): ?> active <?php endif; ?>"><i class="material-icons">view_agenda</i><span><?php echo e(trans('admin.archive')); ?> </span></a>
                                <div class="popTitle"></div>
                            </li>
                            <li class="navItem">
                                <a href="<?php echo e(url('/page/1')); ?>" title="<?php echo e(trans('admin.faq')); ?>" class="<?php if(Request::url() == url('/page/1') ): ?> active <?php endif; ?>"><i class="material-icons">help</i><span><?php echo e(trans('admin.faq')); ?></span></a>
                                <div class="popTitle"></div>
                            </li>
                            <li class="navItem">
                                <a href="<?php echo e(url('/page/10')); ?>" title="<?php echo e(trans('admin.aboutMneo')); ?>" class="<?php if(Request::url() == url('/page/10') ): ?> active <?php endif; ?>"><i class="material-icons">library_books</i><span><?php echo e(trans('admin.aboutMneo')); ?></span></a>
                                <div class="popTitle"></div>
                            </li>
                            <li class="navItem">
                                <a href="<?php echo e(url('/contact')); ?>" title="<?php echo e(trans('admin.contact')); ?>" class="<?php if(Request::url() == url('/contact')): ?> active <?php endif; ?>"><i class="material-icons">phone</i><span><?php echo e(trans('admin.contact')); ?></span></a>
                                <div class="popTitle"></div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>