@extends('home')
@section('content')
<section class="mainSlider">
	<div class="owl-carousel">
		@foreach(\App\Slider::where('active',1)->get() as $slider)
		<div class="item">
			<div class="itemHolder">
				<img src="{{ Storage::url($slider['img']) }}" alt="{{ $slider['title_'.lang()] }}">
				<div class="itemText">
					<h2>{{ $slider['title_'.lang()] }}</h2>
					<p>{{ $slider['content_'.lang()] }} </p>
					<a href="{{ url('/page/10') }}" class="moreLink primaryButton"><i class="material-icons">add</i>{{ trans('admin.more') }}</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</section>
<section class="about">
	<div class="container" style="padding-bottom: 20px!important">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="aboutItem" data-content="vision" data-subject-ar="الرؤية" data-subject-en="Vision">
					<a href="#vision" title="{{ trans('admin.vision') }}"><img src="{{ url('/public/web/') }}/img/eye.svg" alt="{{ trans('admin.vision') }}"><span>{{ trans('admin.vision') }}</span></a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="aboutItem" data-content="goal" data-subject-ar="الهدف"  data-subject-en="Aim">
					<a href="#goal" title="{{ trans('admin.goal') }}"><img src="{{ url('/public/web/') }}/img/goal.svg" alt="{{ trans('admin.goal') }}"><span>{{ trans('admin.goal') }}</span></a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="aboutItem" data-content="message" data-subject-ar="الرسالة" data-subject-en="Mission">
					<a href="#message" title="{{ trans('admin.message') }}"><img src="{{ url('/public/web/') }}/img/mission.svg" alt="{{ trans('admin.message') }}"><span>{{ trans('admin.message') }}</span></a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="aboutItem" data-content="publish" data-subject-ar="نطاق النشر" data-subject-en="Scope">
					<a href="#publish" title="{{ trans('admin.publish') }}"><img src="{{ url('/public/web/') }}/img/newspaper.svg" alt="{{ trans('admin.publish') }}"><span>{{ trans('admin.publish') }}</span></a>
				</div>
			</div>
		</div>
		<div class="aboutText">
			<div class="aboutTextAjax"></div>
		</div>
	</div>
</section>
<section class="news">
	<div class="container">
		<div class="newsTitle">
			{{-- <h2><span>{{ trans('admin.newsfrom') }}</span>@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif</h2>
			<a href="{{ url('/news') }}" class="viewAll" title="{{ trans('admin.showAll') }}">{{ trans('admin.showAll') }}</a> --}}
		</div>
		{{-- <div class="owl-carousel"> --}}
			<div class="item">
				<div class="row">
					@foreach(\App\News::where('active',1)->orderBy('id','desc')->limit(4)->get() as $news)
					@if(isset($news))
					<div class="col-12 col-md-6">
						<div class="itemHolder">
							<div class="itemIMG">
								<a href="#"><img src="{{ Storage::url($news['img']) }}" alt="{{ $news['title_'.lang()] }}" width="600px"></a>
							</div>
							<h3><a href="#" title="{{ $news['title_'.lang()] }}">{{ $news['title_'.lang()] }}</a></h3>
							
							<p>@if($news['content_'.lang()]) {!! str_limit($news['content_'.lang()] , 150) !!} @endif</p>
							<a href="@if($news['page_num'] == 0 || $news['page_num'] == NULL) {{ url('/news/'.$news['id']) }} @else {{ url('/page/'.$news['page_num']) }} @endif" class="moreLink primaryButton">{{ trans('admin.more') }}</a>
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>
			<div class="item">
				<div class="row">
					@foreach(\App\News::where('active',1)->orderBy('id','desc')->skip(4)->limit(4)->get() as $news)
					@if(isset($news))
					<div class="col-12 col-md-6">
						<div class="itemHolder">
							<div class="itemIMG">
								<a href="#"><img src="{{ Storage::url($news['img']) }}" alt="{{ $news['title_'.lang()] }}" width="600px"></a>
							</div>
							<h3><a href="#" title="{{ $news['title_'.lang()] }}">{{ $news['title_'.lang()] }}</a></h3>
							<div class="postDetails">
								<div class="date">{{ $news['month_name_'.lang()] }} {{ $news['year'] }}</div>
								<div class="by">
									<span>{{ trans('admin.newsBy') }}:</span>
									<a href="{{ url('/author/'.$news['author_id']) }}" title="{{ \App\Author::find($news['author_id'])['name_'.lang()] }}">{{ \App\Author::find($news['author_id'])['name_'.lang()] }}
									</a>
								</div>
							</div>
							<p>{!! str_limit($news['content_'.lang()] , 150) !!} </p>
							<a href="@if($news['page_num'] == 0 || $news['page_num'] == NULL) {{ url('/news/'.$news['id']) }} @else {{ url('/page/'.$news['page_num']) }} @endif" class="moreLink primaryButton">{{ trans('admin.more') }}</a>
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>
		{{-- </div> --}}
	</div>
</section>
{{-- <section class="extra">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 col-lg-7 saying">
				<h2>{{ trans('admin.said') }}</h2>
				<div class="sayingHolder">
					<div class="owl-carousel">
						@foreach(\App\Said_about::where('active',1)->orderBy('id','desc')->get() as $said)
						<div class="item">
							<div class="itemIMG">
								<img src="{{ Storage::url($said['img']) }}" alt="{{ $said['name_'.lang()] }}">
							</div>
							<p class="text-center">{{ $said['content_'.lang()] }}</p>
							<h3 class="text-center">{{ $said['name_'.lang()] }}</h3>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 archive">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#orignal" role="tab" data-toggle="tab">{{ trans('admin.archive') }}</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#current" role="tab" data-toggle="tab">{{ trans('admin.ed_now') }}</a>
					</li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active show" id="orignal">
						<ul class="contentHoder">
							@foreach(\App\Edition::where('active',0)->get() as $archive)
							<li class="item">
								<div class="text">
									<div class="title">{{ $archive['the_number_'.lang()] }}</div>
									<div class="date">{{ trans('admin.'.date('M', strtotime($archive->date))) }} {{ date('Y', strtotime($archive->date)) }}</div>
								</div>
								<a href="{{ Storage::url($archive['pdf_file']) }}" target="_blank" title="{{ trans('admin.show') }}">{{ trans('admin.show') }}</a>
							</li>
							@endforeach
						</ul>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="current">
						<ul class="contentHoder">
							@foreach(\App\Edition::where('active',1)->get() as $archive)
							<li class="item">
								<div class="text">
									<div class="title">{{ $archive['the_number_'.lang()] }}</div>
									<div class="date">{{ trans('admin.'.date('M', strtotime($archive->date))) }} {{ date('Y', strtotime($archive->date)) }}</div>
								</div>
								<a href="{{ Storage::url($archive['pdf_file']) }}" target="_blank" title="{{ trans('admin.show') }}">{{ trans('admin.show') }}</a>
							</li>
							@endforeach
							
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section> --}} 

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		var subject = "{{ trans('admin.vision') }}";
        $.ajax({
            type: 'GET',
            url: '{{ url('aboutTextAjax') }}',
            data: {content: "vision" , subject: subject },
            success: function(data) {
                // console.log(data);
                $('.aboutTextAjax').html(data);
            }
        });
    });

    $('.aboutItem').click(function(event) {
    	var content = $(this).data('content');
    	var subject = $(this).data('subject-'+"{{ lang() }}");
    	$.ajax({
            type: 'GET',
            url: '{{ url('aboutTextAjax') }}',
            data: {content: content , subject: subject },
            success: function(data) {
                // console.log(data);
                $('.aboutTextAjax').html(data);
            }
        });
        // return false;
    });
</script>

@endsection


@endsection