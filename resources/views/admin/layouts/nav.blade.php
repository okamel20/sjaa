    <aside class="app-side fixed" id="app-side" >
        <!-- BEGIN .side-content -->

        <div class="side-content ">
            <!-- BEGIN .user-profile -->
            <div class="user-profile">
                <img src="{{ Storage::url(admin()->user()->img) }}" class="profile-thumb" alt="User Thumb">
                <h6 class="profile-name">{{admin()->user()->name}}</h6>
                
            </div>
            <div class="sidebarNavScroll">
                <nav class="side-nav">
                    <ul class="unifyMenu" id="unifyMenu">
                        <li  class="{{ activeHome() }}">
                            <a href="{{ route('adminAll') }}">
                                <span class="has-icon">
                                    <i class="icon-laptop_windows"></i>
                                </span>
                                <span class="nav-title">{{trans('admin.Dashboard')}}</span>
                            </a>
                        </li>
                        
                        <li class="{{ displayBlockSetting()['active'] }}" style="{{checkRole(['settingIndex','sochialLinks','visionIndex','goalIndex','messageIndex','publishIndex','magazineIndex'])}}">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-tools"></i>
                                </span>
                                <span class="nav-title">{{ trans('admin.setting') }}</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="{{checkRole(['settingIndex'])}}">
                                    <a href="{{ route('settingIndex') }}">{{ trans('admin.setting') }}</a>
                                </li>
                                <li style="{{checkRole(['sochialLinks'])}}">
                                    <a href="{{ route('sochialLinks') }}">روابط التواصل الأجتماعى</a>
                                </li>
                                <li style="{{checkRole(['visionIndex'])}}">
                                    <a href="{{ route('visionIndex') }}">رؤيتنا</a>
                                </li>
                                <li style="{{checkRole(['goalIndex'])}}">
                                    <a href="{{ route('goalIndex') }}">الهدف</a>
                                </li>
                                <li style="{{checkRole(['messageIndex'])}}">
                                    <a href="{{ route('messageIndex') }}">الرسالة</a>
                                </li>
                                <li style="{{checkRole(['publishIndex'])}}">
                                    <a href="{{ route('publishIndex') }}">نطاق النشر</a>
                                </li>
                                <li style="{{checkRole(['magazineIndex'])}}">
                                    <a href="{{ route('magazineIndex') }}"> عن  المجلة</a>
                                </li>
                                <li style="{{checkRole(['subjects'])}}">
                                    <a href="{{ route('subjects') }}"> مواضيع الرسائل</a>
                                </li>
                            </ul>
                        </li>

                        <li class="{{ displayBlockContacts()['active'] }}" style="{{checkRole(['contacts'])}}">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">رسائل اتصل بنا</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="{{checkRole(['contacts'])}}">
                                    <a href="{{ adminUrl('contacts') }}">رسائل اتصل بنا</a>
                                </li>
                            </ul>
                        </li>

                        <li class="{{ displayBlockSliders()['active'] }}" style="{{checkRole(['sliders'])}}">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">عرض الشرائح</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="{{checkRole(['sliders'])}}">
                                    <a href="{{ adminUrl('sliders') }}">عرض الشرائح</a>
                                </li>
                            </ul>
                        </li>

                        {{-- <li class="{{ displayBlockSaidabouts()['active'] }}" style="{{checkRole(['saidabouts'])}}">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">قالوا عنا</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="{{checkRole(['saidabouts'])}}">
                                    <a href="{{ adminUrl('saidabouts') }}">قالوا عنا</a>
                                </li>
                            </ul>
                        </li> --}}

                        <li class="{{ displayBlockNews()['active'] }}" style="{{checkRole(['news','authors'])}}">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">{{ trans('admin.news') }}</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="{{checkRole(['authors'])}}">
                                    <a href="{{ adminUrl('authors') }}">{{ trans('admin.newsW') }}</a>
                                </li>
                                <li style="{{checkRole(['news'])}}">
                                    <a href="{{ adminUrl('news') }}">{{ trans('admin.news') }}</a>
                                </li>
                            </ul>
                        </li>

                        {{-- <li class="{{ displayBlockEdition()['active'] }}" style="{{checkRole(['editions','archives'])}}">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">المجلة</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="{{checkRole(['editions'])}}">
                                    <a href="{{ adminUrl('editions') }}">الطبعات</a>
                                </li>
                                <li style="{{checkRole(['archives'])}}">
                                    <a href="{{ adminUrl('archives') }}">المؤرشفة</a>
                                </li>
                            </ul>
                        </li> --}}

                        <li class="{{ displayBlockPages()['active'] }}" style="{{checkRole(['pages'])}}">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">الصفحات</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="{{checkRole(['pages'])}}">
                                    <a href="{{ adminUrl('pages') }}">كل الصفحات</a>
                                </li>
                                @foreach(\App\Page::all() as $page)
                                    <li style="{{checkRole(['pages'])}}">
                                        <a href="{{ adminUrl('pagecontents?page_id='.$page->id) }}">{{ $page->title_ar }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="{{ displayBlockUserNoAdmins()['active'] }}" style="{{checkRole(['users'])}}">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">الأعضاء</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="{{checkRole(['users'])}}">
                                    <a href="{{ adminUrl('users') }}">الأعضاء</a>
                                </li>
                            </ul>
                        </li>

                        <li class="{{ displayBlockUser()['active'] }}" style="{{checkRole(['admins','groups'])}}">
                            <a href="#" class="has-arrow" aria-expanded="false">
                                <span class="has-icon">
                                    <i class="icon-adjust2"></i>
                                </span>
                                <span class="nav-title">{{ trans('admin.admins') }}</span>
                            </a>
                            <ul aria-expanded="false">
                                <li style="{{checkRole(['admins'])}}">
                                    <a href="{{ adminUrl('admins') }}">{{ trans('admin.admins') }}</a>
                                </li>
                                <li style="{{checkRole(['groups'])}}">
                                    <a href="{{ adminUrl('groups') }}">{{ trans('admin.groups') }}</a>
                                </li>
                            </ul>
                        </li>

                        
                    </ul>
                </nav>
            </div>
        </div>
    </aside>
