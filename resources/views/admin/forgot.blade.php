<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Unify Admin Panel" />
        <meta name="keywords" content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
        <meta name="author" content="Bootstrap Gallery" />
        <link rel="shortcut icon" href="{{ url('/public/admin') }}/img/favicon.ico" />
        <title>@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif - {{ trans('admin.forgot') }}</title>
        <!-- Common CSS -->
        <link rel="stylesheet" href="{{ url('/public/admin') }}/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{ url('/public/admin') }}/fonts/icomoon/icomoon.css" />
        <!-- Mian and Login css -->
        <link rel="stylesheet" href="{{ url('/public/admin') }}/css/main-rtl.css" />

    </head>  

    <body class="login-bg">
        <div class="container">
            @include('admin.layouts.msg')
            <div class="login-screen row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form method="post">
                        {{ csrf_field() }}
                        <div class="login-container">
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                                    <div class="login-box">
                                        <a href="#" class="login-logo">
                                            <img src="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif" alt="Unify Admin Dashboard" />
                                        </a>

                                        <h5>{{ trans('admin.forgot') }}</h5>
                                        {{-- <p class="info">In order to receive your access code by email, please enter the address you provided during the registration process.</p> --}}
                                        
                                        <div class="input-group">
                                            <span class="input-group-addon" id="emial">
                                                <i class="icon-account_circle"></i>
                                            </span>
                                            <input type="email" class="form-control" placeholder="{{ trans('admin.email') }}" name="email">
                                        </div>
                                        <div class="actions clearfix">
                                        <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                                    <div class="login-slider">
                                        <a href="javacsript:void(0)">
                                            <img src="{{ url('/public/admin') }}/img/play-button.svg" class="play-icon" alt="play video" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="main-footer no-bdr fixed-btm">
            <div class="container">
                Copyright @if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif Admin 2018.
            </div>
        </footer>
    </body>
</html>