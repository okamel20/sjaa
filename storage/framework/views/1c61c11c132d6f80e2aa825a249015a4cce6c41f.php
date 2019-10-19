    <aside class="app-side fixed" id="app-side" >
        <!-- BEGIN .side-content -->

        <div class="side-content ">
            <!-- BEGIN .user-profile -->
            <div class="user-profile">
                <img src="<?php echo e(Storage::url(admin()->user()->img)); ?>" class="profile-thumb" alt="User Thumb">
                <h6 class="profile-name"><?php echo e(admin()->user()->name); ?></h6>
                
            </div>
            <div class="sidebarNavScroll">
                <nav class="side-nav">
                    <ul class="unifyMenu" id="unifyMenu">
                        <li  class="<?php echo e(activeHome()); ?>">
                            <a href="<?php echo e(route('adminAll')); ?>">
                                <span class="has-icon">
                                    <i class="icon-laptop_windows"></i>
                                </span>
                                <span class="nav-title"><?php echo e(trans('admin.Dashboard')); ?></span>
                            </a>
                        </li>
                        
                        <li class="<?php echo e(displayBlockSetting()['active']); ?>" style="<?php echo e(checkRole(['settingIndex','sochialLinks','visionIndex','goalIndex','messageIndex','publishIndex','magazineIndex'])); ?>">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-tools"></i>
                                </span>
                                <span class="nav-title"><?php echo e(trans('admin.setting')); ?></span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="<?php echo e(checkRole(['settingIndex'])); ?>">
                                    <a href="<?php echo e(route('settingIndex')); ?>"><?php echo e(trans('admin.setting')); ?></a>
                                </li>
                                <li style="<?php echo e(checkRole(['sochialLinks'])); ?>">
                                    <a href="<?php echo e(route('sochialLinks')); ?>">روابط التواصل الأجتماعى</a>
                                </li>
                                <li style="<?php echo e(checkRole(['visionIndex'])); ?>">
                                    <a href="<?php echo e(route('visionIndex')); ?>">رؤيتنا</a>
                                </li>
                                <li style="<?php echo e(checkRole(['goalIndex'])); ?>">
                                    <a href="<?php echo e(route('goalIndex')); ?>">الهدف</a>
                                </li>
                                <li style="<?php echo e(checkRole(['messageIndex'])); ?>">
                                    <a href="<?php echo e(route('messageIndex')); ?>">الرسالة</a>
                                </li>
                                <li style="<?php echo e(checkRole(['publishIndex'])); ?>">
                                    <a href="<?php echo e(route('publishIndex')); ?>">نطاق النشر</a>
                                </li>
                                <li style="<?php echo e(checkRole(['magazineIndex'])); ?>">
                                    <a href="<?php echo e(route('magazineIndex')); ?>"> عن  المجلة</a>
                                </li>
                                <li style="<?php echo e(checkRole(['subjects'])); ?>">
                                    <a href="<?php echo e(route('subjects')); ?>"> مواضيع الرسائل</a>
                                </li>
                            </ul>
                        </li>

                        <li class="<?php echo e(displayBlockContacts()['active']); ?>" style="<?php echo e(checkRole(['contacts'])); ?>">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">رسائل اتصل بنا</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="<?php echo e(checkRole(['contacts'])); ?>">
                                    <a href="<?php echo e(adminUrl('contacts')); ?>">رسائل اتصل بنا</a>
                                </li>
                            </ul>
                        </li>

                        <li class="<?php echo e(displayBlockSliders()['active']); ?>" style="<?php echo e(checkRole(['sliders'])); ?>">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">عرض الشرائح</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="<?php echo e(checkRole(['sliders'])); ?>">
                                    <a href="<?php echo e(adminUrl('sliders')); ?>">عرض الشرائح</a>
                                </li>
                            </ul>
                        </li>

                        

                        <li class="<?php echo e(displayBlockNews()['active']); ?>" style="<?php echo e(checkRole(['news','authors'])); ?>">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title"><?php echo e(trans('admin.news')); ?></span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="<?php echo e(checkRole(['authors'])); ?>">
                                    <a href="<?php echo e(adminUrl('authors')); ?>"><?php echo e(trans('admin.newsW')); ?></a>
                                </li>
                                <li style="<?php echo e(checkRole(['news'])); ?>">
                                    <a href="<?php echo e(adminUrl('news')); ?>"><?php echo e(trans('admin.news')); ?></a>
                                </li>
                            </ul>
                        </li>

                        

                        <li class="<?php echo e(displayBlockPages()['active']); ?>" style="<?php echo e(checkRole(['pages'])); ?>">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">الصفحات</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="<?php echo e(checkRole(['pages'])); ?>">
                                    <a href="<?php echo e(adminUrl('pages')); ?>">كل الصفحات</a>
                                </li>
                                <?php $__currentLoopData = \App\Page::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li style="<?php echo e(checkRole(['pages'])); ?>">
                                        <a href="<?php echo e(adminUrl('pagecontents?page_id='.$page->id)); ?>"><?php echo e($page->title_ar); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>

                        <li class="<?php echo e(displayBlockUserNoAdmins()['active']); ?>" style="<?php echo e(checkRole(['users'])); ?>">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">الأعضاء</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="<?php echo e(checkRole(['users'])); ?>">
                                    <a href="<?php echo e(adminUrl('users')); ?>">الأعضاء</a>
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
