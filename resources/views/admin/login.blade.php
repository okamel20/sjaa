<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@if(!empty(setting())){{ setting()['app_name_'.lang()] }} {{ trans('admin.Dashboard') }} @endif</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta name="description" content="Admin, Dashboard, Bootstrap">
    <link rel="shortcut icon" sizes="196x196" href="">
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/public/admin') }}/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{ url('/public/admin') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ url('/public/admin') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/public/admin') }}/css/core.css">
    <link rel="stylesheet" href="{{ url('/public/admin') }}/css/misc-pages.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>

<body class="simple-page" style="background-image: url({{ url('/public/') }}/section-back.png);background-size: cover;width: 150%;top: 0;left: 0;position: absolute;">
    <div class="container center-block" >
        <div class="row "  style="width: 500px!important;padding-right: 90px">
            @include('admin.layouts.msg')
            <div class="simple-page-wrap col-md-12" >
                <div class="simple-page-logo animated swing" ><a href="{{ adminUrl('') }}"><span class="" style="color: black">@if(!empty(setting())){{ setting()['app_name_'.lang()] }} | {{ trans('admin.Dashboard') }} @endif</span> </a></div>
                <div class="simple-page-form animated flipInY" id="login-form">
                  
                    <h4 class="form-title m-b-xl text-center">{{ trans('admin.signIn') }}</h4>
                    <form  method="post" action="{{ adminUrl('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="{{ trans('admin.email') }}" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="{{ trans('admin.password') }}" required="">
                        </div>
                        <div class="form-group m-b-xl">
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="keep_me_logged_in" name="remember" value="1">
                                <label for="keep_me_logged_in">{{ trans('admin.remember') }}</label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success" value="{{ trans('admin.signIn') }}">
                    </form>
                </div>
                <div class="simple-page-footer">
                    {{-- <p><a href="{{ adminUrl('forgot') }}" class="btn btn-success">{{ trans('admin.forgot') }} </a></p> --}}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ url('/public/admin') }}/js/jquery.js"></script>
    <script type="text/javascript" src="{{ url('/public/admin') }}/js/bootstrap.min.js"></script>
</body>
</html>