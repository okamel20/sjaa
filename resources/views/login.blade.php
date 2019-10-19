@extends('home')
@section('content')
    <section class="pageHolder">
        <div class="container">
            <div class="pageTitle">
                <h1>{{ trans('admin.signIn') }}</h1>
            </div>
            <div class="blockHolder">
                <div class="row">
                    <div class="col-xs-12 col-lg-5">
                        <div class="welcomeMSG visitorMSG">
                            <div class="msgLogo">
                                <img src="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif" alt="{{ trans('admin.signIn') }}">
                            </div>
                            <div class="msgText">
                                <div class="wlcTitle">{{ trans('admin.hello') }}</div>
                                <p>@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-7">
                        <div class="blockContent">
                            <h2>{{ trans('admin.signIn') }}</h2>
                            @include('layouts.msg')
                            <form action="{{ url('/login') }}" method="post" id="loginForm" class="normalForm">
                                {{ csrf_field() }}
                                <div class="inputHolder">
                                    <i class="material-icons">mail_outline</i>
                                    <label for="email">{{ trans('admin.email') }} ...</label>
                                    <input type="email" class="email" name="email" id="email" placeholder="{{ trans('admin.email') }}..." required value="{{ old('email') }}">
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">lock</i>
                                    <label for="password">{{ trans('admin.password') }}...</label>
                                    <input type="password" name="password" class="password" id="password" placeholder="{{ trans('admin.password') }}..." required>
                                </div>
                                <div class="formLinks">
                                    <div class="rememberMe checkBox">
                                        <input type="checkbox" class="rememberMe" id="rememberMe" name="remember">
                                        <label for="rememberMe"><i class="fas fa-check"></i>{{ trans('admin.remember') }}</label>
                                    </div>
                                    {{-- <a href="resset-pass.html" title="إعادة تعيين كلمة السر">نسيت كلمة السر</a> --}}
                                </div>
                                <div class="formHint">{{ trans('admin.noAcc') }} <a href="signup.html" title="{{ trans('admin.createUser') }}">{{ trans('admin.createUser') }}</a></div>
                                <div class="submitForm">
                                    <input type="submit" class="submit primaryButton" value="{{ trans('admin.signIn') }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection