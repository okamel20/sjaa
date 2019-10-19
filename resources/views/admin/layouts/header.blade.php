<!doctype html>
<html lang="ar">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif" />
        <title>@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif | {{ trans('admin.Dashboard') }}</title>
        <!-- Common CSS -->
        <link rel="stylesheet" href="{{url('/public/admin')}}/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{url('/public/admin')}}/fonts/icomoon/icomoon.css" />
        @if(lang() == 'ar')
        <link rel="stylesheet" href="{{url('/public/admin')}}/css/main-rtl.css" />
        @else
        <link rel="stylesheet" href="{{url('/public/admin')}}/css/main-rtl.css" />
        @endif

        <link href="{{url('/public/admin')}}/vendor/chartist/css/chartist.min.css" rel="stylesheet" />
        <link href="{{url('/public/admin')}}/vendor/chartist/css/chartist-custom.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{url('/public/admin')}}/css/font-awesome/css/font-awesome.min.css">
            @yield('style')
    </head>
    <body>

        <div class="app-wrap">