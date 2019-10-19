@extends('home')
@section('content')
<section class="pageHolder articlePage">
    <div class="container">
        <article class="articleContent">
            
        </article>
        <div class="relatesArticles">
            <h2>{{ $author['name_'.lang()] }}</h2>
            <div class="row justify-content-sm-center">
                @foreach($news as $outher)
                <div class="col-12 col-lg-4" style="margin-bottom: 20px">
                    <div class="relatedItem">
                        <div class="IMG">
                            <a href="#" title="{{ $outher['title_'.lang()] }}">
                                <img src="{{ Storage::url($outher['img']) }}" alt="{{ $outher['title_'.lang()] }}">
                            </a>
                        </div>
                        <div class="itemText">
                            <div class="postDetails">
                                <div class="date">{{ $outher['month_name_'.lang()] }} {{ $outher['year'] }}</div>
                                <div class="by"><span>{{ trans('admin.newsBy') }}:</span><a href="{{ url('/author/'.$outher['author_id']) }}" title="{{ \App\Author::find($outher['author_id'])['name_'.lang()] }}">{{ \App\Author::find($outher['author_id'])['name_'.lang()] }}</a></div>
                            </div>
                            <div class="itemTitle">
                                <a href="{{ url('/news/'.$outher['id']) }}" title="{{ $outher['title_'.lang()] }}"><h3>{{ $outher['title_'.lang()] }}</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="clearfix"></div>
                @endforeach
            </div>
        </div>
        <br>
    </div>
</section>
@endsection