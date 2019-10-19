@extends('home')
@section('content')
     <section class="pageHolder" style="padding: 40px 0 55px 0!important">
        <div class="container">
            <div class="pageTitle" style="margin-top: 0px!important">
                <h1 style="margin-bottom: 0px!important">{{ $title }}</h1>
            </div>
            <div class="pageDescription">
                <p>{!! $page['text_start_'.lang()] !!}</p>
            </div>
            <div class="accordionBlock">
            	<?php $count = 1 ;?>
            	@foreach($contents as $content)
                <div class="accItem @if($count == 1) active @endif">
                    <div class="accTitle">
                        <h2>{!! $content['title_'.lang()] !!}</h2>
                    </div>
                    <div class="accContent" style="@if($count == 1) display:block; @else display:none; @endif">
                        <p>{!! $content['content_'.lang()] !!}</p>
                    </div>
                </div>
                <?php $count++ ;?>
                @endforeach
                
            </div>
            <ul class="infoList">
                {!! $page['end_text_'.lang()] !!}
                {{-- <li class="listItem">
                    <p>{{ trans('admin.footerpage1') }}<a href="@if(!empty(setting())){{ setting()['email'] }} @endif" title="إرسال بريد الكتروني الى  @if(!empty(setting())){{ setting()['email'] }} @endif">@if(!empty(setting())){{ setting()['email'] }} @endif </a>{{ trans('admin.footerpage2') }}</p>
                </li> --}}
            </ul>
        </div>
    </section>
@endsection