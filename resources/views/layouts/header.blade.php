<!DOCTYPE html>
<html lang="{{lang()}}">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Eng. A7meD KaMeL - a-kamel.com - 01003510901">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif | {{ $title }}</title>
    <meta name="description" content="@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif | {{ $title }}">
    <link rel="icon" href="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif"/>
    <!-- Font Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{url('/public/web')}}/css/owl.carousel.min.css">
    @if(lang() == 'ar')
    <link rel="stylesheet" href="{{url('/public/web')}}/css/style.css">
    <link rel="stylesheet" href="{{url('/public/web')}}/css/media.css">
    @else
    <link rel="stylesheet" href="{{url('/public/web')}}/css/style-en.css">
    <link rel="stylesheet" href="{{url('/public/web')}}/css/media-en.css">
    @endif
    <!-- JS Files -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{url('/public/web')}}/js/owl.carousel.min.js"></script>
    <!--[if lt IE 9]>
    <script type='text/javascript' src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js?ver=5.1.1'></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type='text/javascript' src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js?ver=5.1.1'></script>
    <![endif]-->
</head>
<body dir="{{ direction() }}">
    <header class="mainHeader">
        <div class="topHeader">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12 col-md-4 userLinks">
                        @if(!Auth::user())
                        <div class="signUp">
                            <a href="{{ url('/signup') }}"><i class="material-icons">person_outline</i>{{ trans('admin.signup') }}</a>
                        </div>
                        <div class="login">
                            <a href="{{ url('/login') }}">{{ trans('admin.signIn') }}</a>
                        </div>
                        @else
                        <div class="signUp">
                            <a><i class="material-icons">person_outline</i>{{ Auth::user()->name }}</a>
                        </div>
                        <div class="login">
                            <a href="{{ url('/SignOut') }}">{{ trans('admin.SignOut') }}</a>
                        </div>
                        @endif
                    </div>
                    
                    <div class="col-12 col-md-5 headerSearch">
                        <div class="searchHolder">
                            <form action="">
                                <div class="inputHolder">
                                    <input type="text" class="searchText" placeholder="{{ trans('admin.sSearch') }}">
                                    <a href="#" class="searchSubmit"><i class="material-icons">search</i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 addSec">
                        <div class="langSwitch">
                            <select name="language-select" id="langSelect" class="langSelect">
                                <option value="ar" @if(lang() == 'ar') selected @endif>{{ trans('admin.arabic') }}</option>
                                <option value="en" @if(lang() == 'en') selected @endif>{{ trans('admin.english') }}</option>
                            </select>
                        </div>
                        <div class="socialIcons">
                            <a href="@if(!empty(setting())){{ setting()['facebook'] }} @endif" title="فيسبوك" target="_blank" style="margin-right: 1!important"><i class="fab fa-facebook-f" ></i></a>
                            <a href="@if(!empty(setting())){{ setting()['twiter'] }} @endif" title="تويتر" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="@if(!empty(setting())){{ setting()['insta_link'] }} @endif" title="انستغرام" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="@if(!empty(setting())){{ setting()['gogle'] }} @endif" title="فوجل بلس" target="_blank"><i class="fab fa-google-plus-g"></i></a>
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
                                <a href="{{ url('/page/'.$page12['id']) }}" title="{{ $page12['title_'.lang()] }}" class="@if(Request::url() == url('/page/12')) active @endif">{{ $page12['title_'.lang()] }}</a>
                                <?php $page11 = \App\Page::find(11) ;?>
                                <a href="{{ url('/page/'.$page11['id']) }}" title="{{ $page11['title_'.lang()] }}" class="@if(Request::url() == url('/page/11')) active @endif">{{ $page11['title_'.lang()] }}</a>
                                <?php $page3 = \App\Page::find(3) ;?>
                                <a href="{{ url('/page/'.$page3['id']) }}" title="{{ $page3['title_'.lang()] }}" class="@if(Request::url() == url('/page/3')) active @endif">{{ $page3['title_'.lang()] }}</a>
                                <?php $page4 = \App\Page::find(4) ;?>
                                <a href="{{ url('/page/'.$page4['id']) }}" title="{{ $page4['title_'.lang()] }}"  class="@if(Request::url() == url('/page/4')) active @endif">{{ $page4['title_'.lang()] }}</a>
                                <?php $page5 = \App\Page::find(5) ;?>
                                <a href="{{ url('/page/'.$page5['id']) }}" title="{{ $page5['title_'.lang()] }}" class="@if(Request::url() == url('/page/5')) active @endif">{{ $page5['title_'.lang()] }}</a>
                                <?php $page6 = \App\Page::find(2) ;?>
                                <a href="{{ url('/page/'.$page6['id']) }}" title="{{ $page6['title_'.lang()] }}" class="@if(Request::url() == url('/page/2')) active @endif">{{ $page6['title_'.lang()] }}</a>
                                <?php $page7 = \App\Page::find(7) ;?>
                                <a href="{{ url('/page/'.$page7['id']) }}" title="{{ $page7['title_'.lang()] }}" class="@if(Request::url() == url('/page/7')) active @endif">{{ $page7['title_'.lang()] }}</a>
                            </div>
                            <div class="siteLogo">
                                <a href="{{ url('/') }}" title="Sjeaa"><img src="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif" alt="Sjeaa"></a>
                            </div>
                        </div>
                    </div>
                    <nav class="col-12 col-lg-8 mainNavbar">
                        <ul class="siteNav">
                            <li class="navItem">
                                <a href="{{ url('/') }}" title="{{ trans('admin.Home') }}" class="@if(Request::url() == url('/')) active @endif"><i class="material-icons">home</i><span>{{ trans('admin.Home') }}</span></a>
                                <div class="popTitle"></div>
                            </li>
                            <li class="navItem">
                                <a href="{{ url('/page/14') }}" title="{{ trans('admin.news') }}" class="@if(Request::url() == url('/page/14') || Request::segment(1) == url('/page/13')) active @endif"><i class="material-icons">assignment</i><span>{{ trans('admin.news') }}</span></a>
                                <div class="popTitle"></div>
                            </li>
                            <li class="navItem">
                                <a href="{{ url('/page/8') }}" title="{{ trans('admin.thrir') }}" class="@if(Request::url() == url('/page/8') ) active @endif"><i class="material-icons">group</i><span>{{ trans('admin.thrir') }}</span></a>
                                <div class="popTitle"></div>
                            </li>

                            
                            
                            <li class="navItem">
                                <a href="{{ url('/page/13') }}" title="{{ trans('admin.archive') }}" class="@if(Request::url() == url('/page/13')) active @endif"><i class="material-icons">view_agenda</i><span>{{ trans('admin.archive') }} </span></a>
                                <div class="popTitle"></div>
                            </li>
                            <li class="navItem">
                                <a href="{{ url('/page/1') }}" title="{{ trans('admin.faq') }}" class="@if(Request::url() == url('/page/1') ) active @endif"><i class="material-icons">help</i><span>{{ trans('admin.faq') }}</span></a>
                                <div class="popTitle"></div>
                            </li>
                            <li class="navItem">
                                <a href="{{ url('/page/10') }}" title="{{ trans('admin.aboutMneo') }}" class="@if(Request::url() == url('/page/10') ) active @endif"><i class="material-icons">library_books</i><span>{{ trans('admin.aboutMneo') }}</span></a>
                                <div class="popTitle"></div>
                            </li>
                            <li class="navItem">
                                <a href="{{ url('/contact') }}" title="{{ trans('admin.contact') }}" class="@if(Request::url() == url('/contact')) active @endif"><i class="material-icons">phone</i><span>{{ trans('admin.contact') }}</span></a>
                                <div class="popTitle"></div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>