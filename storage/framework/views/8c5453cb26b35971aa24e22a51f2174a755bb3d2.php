    <aside class="app-side fixed" id="app-side">
        <!-- BEGIN .side-content -->

        <div class="side-content ">
            <!-- BEGIN .user-profile -->
            <div class="user-profile">
                <img src="<?php echo e(Storage::url(admin()->user()->img)); ?>" class="profile-thumb" alt="User Thumb">
                <h6 class="profile-name"><?php echo e(admin()->user()->name); ?></h6>
                
            </div>
            <!-- END .user-profile -->
            <!-- BEGIN .side-nav -->
            <div class="sidebarNavScroll">
                <nav class="side-nav">
                    <!-- BEGIN: side-nav-content -->
                    <ul class="unifyMenu" id="unifyMenu">
                        <li  class="<?php echo e(activeHome()); ?>">
                            <a href="<?php echo e(route('adminAll')); ?>">
                                <span class="has-icon">
                                    <i class="icon-laptop_windows"></i>
                                </span>
                                <span class="nav-title"><?php echo e(trans('admin.Dashboard')); ?></span>
                            </a>
                        </li>
                        
                        <li class="<?php echo e(displayBlockSetting()['active']); ?>" style="<?php echo e(checkRole(['settingIndex'])); ?>">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title"><?php echo e(trans('admin.setting')); ?></span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="<?php echo e(checkRole(['settingIndex'])); ?>">
                                    <a href="<?php echo e(route('settingIndex')); ?>"><?php echo e(trans('admin.setting')); ?></a>
                                </li>
                            </ul>
                        </li>

                        

                        <li class="<?php echo e(displayBlockUser()['active']); ?>" style="<?php echo e(checkRole(['admins','groups'])); ?>">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title"><?php echo e(trans('admin.admins')); ?></span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="<?php echo e(checkRole(['admins'])); ?>">
                                    <a href="<?php echo e(adminUrl('admins')); ?>"><?php echo e(trans('admin.admins')); ?></a>
                                </li>
                                <li style="<?php echo e(checkRole(['groups'])); ?>">
                                    <a href="<?php echo e(adminUrl('groups')); ?>"><?php echo e(trans('admin.groups')); ?></a>
                                </li>
                            </ul>
                        </li>

                        
                    </ul>
                </nav>
            </div>
        </div>
    </aside>
