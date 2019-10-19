@extends('home')
@section('content')
    <section class="pageHolder">
        <div class="container">
            <div class="pageTitle">
                <h1>{{ trans('admin.createUser') }}</h1>
            </div>
            <div class="blockHolder">
                <div class="row">
                    <div class="col-xs-12 col-lg-5">
                        <div class="welcomeMSG visitorMSG">
                            <div class="msgLogo">
                                <img src="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif" alt="{{ trans('admin.createUser') }}">
                            </div>
                            <div class="msgText">
                                <div class="wlcTitle">{{ trans('admin.hello') }}</div>
                                <p>@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-7">
                        <div class="blockContent">
                            <h2>{{ trans('admin.createUser') }}</h2>
                            <form action="{{ url('signup') }}" method="POST" id="loginForm" class="normalForm">
                                {{ csrf_field() }}
                                @include('layouts.msg')
                                <div class="inputHolder">
                                    <i class="material-icons">person_outline</i>
                                    <label for="username">{{ trans('admin.username') }}...</label>
                                    <input type="text" class="username" name="name" id="username" placeholder="{{ trans('admin.username') }}..." required value="{{ old('name') }}">
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">mail_outline</i>
                                    <label for="email">{{ trans('admin.email') }}...</label>
                                    <input type="email" class="email" name="email" id="email" placeholder="{{ trans('admin.email') }}..." required value="{{ old('email') }}">
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">lock</i>
                                    <label for="password">{{ trans('admin.password') }}...</label>
                                    <input type="password" name="password" class="password" id="password" placeholder="{{ trans('admin.password') }}..." required>
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">lock</i>
                                    <label for="confirm-password">{{ trans('admin.passwordRe') }}...</label>
                                    <input type="password" name="repassword" class="confirm-password" id="confirm-password" placeholder="{{ trans('admin.passwordRe') }}..." required>
                                </div>
                                <div class="formHint">{{ trans('admin.yesAcc') }} <a href="{{ url('/login') }}" title="{{ trans('admin.signIn') }}">{{ trans('admin.signIn') }}</a></div>
                                <div class="submitForm">
                                    <input type="submit" class="submit primaryButton" value="{{ trans('admin.createUser') }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection