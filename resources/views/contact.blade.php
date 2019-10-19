@extends('home')
@section('content')
      <section class="pageHolder">
        <div class="container">
            <div class="pageTitle">
                <h1>{{ trans('admin.contact') }}</h1>
                
            </div>
            <div class="blockHolder">
                <div class="row">
                    <div class="col-xs-12 col-lg-5">
                        <div class="welcomeMSG">
                            <div class="msgLogo">
                                <img src="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif" alt="{{ trans('admin.contact') }}">
                            </div>
                            <div class="contactinfo">
                                {{-- <div class="infoItem">
                                    <i class="material-icons">event_seat</i>
                                    <div class="infoText">@if(!empty(setting())){{   setting()['editorial_office_'.lang()] }} @endif<br>@if(!empty(setting())){{   setting()['editorial_office2_'.lang()] }} @endif</div>
                                </div> --}}
                                
                                <div class="infoItem">
                                    <i class="material-icons">place</i>
                                    {{-- <div class="infoText">@if(!empty(setting())){{ setting()['address_'.lang()] }} @endif <br>{{ trans('admin.box') }} @if(!empty(setting())){{ setting()['box_num'] }} @endif</div> --}}

                                    <div class="infoText">@if(!empty(setting())){{ setting()['address_'.lang()] }} @endif<br>@if(!empty(setting())){{ setting()['address2_'.lang()] }} @endif</div>
                                </div>
                                <div class="infoItem">
                                    <i class="material-icons">mail_outline</i>
                                    <div class="infoText">@if(!empty(setting())){{ setting()['email'] }} @endif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-7">
                        <div class="blockContent">
                            <h2>{{ trans('admin.contact') }}</h2>
                            @if(lang() == 'en')
                            <p>If you have a system query and cannot find the answer within this website or ScholarOne site or SJEAA website in Emerald, please e-mail to manuscriptcentral@emeraldinsight.com.</p>
                            @elseif(lang() == 'ar')
                            <p>في حالة وجود أي استفسار ولم تتحصل على الإجابة عنه داخل هذا الموقع (scholar one) أو موقع المجلة (SJEAA website in Emerald) الرجاء التواصل عن طريق البريد الإلكتروني: manuscriptcentral@emeraldinsight.com</p>
                            @endif
                            <form action="{{ url('/contact') }}" method="post" id="loginForm" class="normalForm">
                                {{ csrf_field() }}
                                <div class="inputHolder">
                                    <i class="material-icons">person_outline</i>
                                    <label for="username">{{ trans('admin.name') }}...</label>
                                    <input type="text" class="username" name="name" id="username" placeholder="{{ trans('admin.name') }} ..." required>
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">mail_outline</i>
                                    <label for="email">{{ trans('admin.email') }}...</label>
                                    <input type="email" class="email" name="email" id="email" placeholder="{{ trans('admin.email') }} ..." required>
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">stay_current_portrait</i>
                                    <label for="mobile">{{ trans('admin.mobile') }}...</label>
                                    <input type="tel" name="phone" class="mobile" id="mobile" placeholder="{{ trans('admin.mobile') }} ..." required>
                                </div>
                                <div class="inputHolder">
                                    <i class="material-icons">lock</i>
                                    <label for="username">{{ trans('admin.subject') }}...</label>
                                    <input type="text" class="contact_subject_id" name="contact_subject_id" id="contact_subject_id" placeholder="{{ trans('admin.subject') }} ..." required>
                                </div>
                                <div class="inputHolder textarea">
                                    <i class="material-icons">chat_bubble_outline</i>
                                    <textarea name="msg" id="message" class="message" rows="8" placeholder="{{ trans('admin.msgText') }} ..." required=""></textarea>
                                </div>
                                <div class="submitForm">
                                    <input type="submit" class="submit primaryButton" value="{{ trans('admin.send') }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection