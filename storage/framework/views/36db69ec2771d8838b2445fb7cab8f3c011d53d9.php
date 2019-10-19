    <header class="app-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-8">
                    <div class="logo-block">
                        <a href="<?php echo e(adminUrl('/')); ?>" class="logo">
                            <img src="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>" alt="Unify Admin Dashboard">
                        </a>
                        <a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
                            <i class="icon-sort"></i>
                        </a>
                        <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
                            <i class="icon-chevron-thin-left"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-4">
                    <ul class="header-actions">
                        <li class="dropdown">
                        </li>
                        <li>
                            
                            <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
                                <ul class="stats-widget">
                      <li>
                        
                      </li>
                      <li>
                        
                      </li>
                      <li>
                        
                      </li>
                    </ul>
                  </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                <span class="user-name text-truncate"><?php echo e(admin()->user()->name); ?></span>
                                <img class="avatar" src="<?php echo e(Storage::url(admin()->user()->img)); ?>" alt="User Thumb">
                                <i class="icon-chevron-small-down"></i>
                            </a>
                            <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
                                <ul class="user-settings-list">
                                    <li>
                                        <a href="<?php echo e(adminUrl('profile')); ?>">
                                            <div class="icon">
                                                <i class="icon-account_circle"></i>
                                            </div>
                                            <p><?php echo e(trans('admin.profile')); ?></p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(adminUrl('setting')); ?>">
                                            <div class="icon red">
                                                <i class="icon-cog3"></i>
                                            </div>
                                            <p><?php echo e(trans('admin.setting')); ?></p>
                                        </a>
                                    </li>
                                    <?php if(lang() == 'ar'): ?>

                                    <li>
                                        <a href="<?php echo e(adminUrl('lang/en')); ?>">
                                            <div class="icon red">
                                                <i class="icon-language"></i>
                                            </div>
                                            <p><?php echo e(trans('admin.english')); ?></p>
                                        </a>
                                    </li>
                                    <?php elseif(lang() == 'en'): ?>
                                    <li>
                                        <a href="<?php echo e(adminUrl('lang/ar')); ?>">
                                            <div class="icon red">
                                                <i class="icon-language"></i>
                                            </div>
                                            <p><?php echo e(trans('admin.arabic')); ?></p>
                                        </a>
                                    </li>
                                    <?php endif; ?>
                                    
                                </ul>
                                <div class="logout-btn">
                                    <a href="<?php echo e(adminUrl('logout')); ?>" class="btn btn-primary"><?php echo e(trans('admin.SignOut')); ?></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


