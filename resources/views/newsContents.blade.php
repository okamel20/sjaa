<div class="row">
    <div class="col-12 col-sm-6 col-lg-8 rightBlock">
        @if(isset($new1['id']))
        <div class="postItem">
            <div class="postIMG">
                <a href="{{ url('/news/'.$new1['id']) }}" title="{{ $new1['title_'.lang()] }}">
                    <img src="{{ Storage::url($new1['img']) }}" alt="{{ $new1['title_'.lang()] }}">
                </a>
            </div>
            <div class="postText">
                <div class="postDetails">
                    <div class="date">{{ $new1['month_name_'.lang()] }} {{ $new1['year'] }}</div>
                    <div class="by"><span>{{ trans('admin.newsBy') }}:</span><a href="{{ url('/author/'.$new1['author_id']) }}" title="{{ \App\Author::find($new1['author_id'])['name_'.lang()] }}">{{ \App\Author::find($new1['author_id'])['name_'.lang()] }}</a></div>
                </div>
                <h2><a href="{{ url('/news/'.$new1['id']) }}" title="{{ $new1['title_'.lang()] }}">{{ $new1['title_'.lang()] }}</a></h2>
            </div>
        </div>
        @endif
        @if(isset($new2['id']))
        <div class="postItem">
            <div class="postIMG">
                <a href="{{ url('/news/'.$new2['id']) }}" title="{{ $new2['title_'.lang()] }}">
                    <img src="{{ Storage::url($new2['img']) }}" alt="{{ $new2['title_'.lang()] }}">
                </a>
            </div>
            <div class="postText">
                <div class="postDetails">
                    <div class="date">{{ $new1['month_name_'.lang()] }} {{ $new1['year'] }}</div>
                    <div class="by"><span>{{ trans('admin.newsBy') }}:</span><a href="{{ url('/author/'.$new2['author_id']) }}" title="{{ \App\Author::find($new2['author_id'])['name_'.lang()] }}">{{ \App\Author::find($new2['author_id'])['name_'.lang()] }}</a></div>
                </div>
                <h2><a href="{{ url('/news/'.$new2['id']) }}" title="{{ $new2['title_'.lang()] }}">{{ $new2['title_'.lang()] }}</a></h2>
            </div>
        </div>
        @endif
    </div>
    <div class="col-12 col-sm-6 col-lg-4 leftBlock">
        @if(isset($new3['id']))
        <div class="postItem">
            <div class="postIMG">
                <a href="{{ url('/news/'.$new3['id']) }}" title="{{ $new3['title_'.lang()] }}">
                    <img src="{{ Storage::url($new3['img']) }}"
                        alt="{{ $new3['title_'.lang()] }}">
                </a>
            </div>
            <div class="postText">
                <div class="postDetails">
                    <div class="date">{{ $new1['month_name_'.lang()] }} {{ $new1['year'] }}</div>
                    <div class="by"><span>{{ trans('admin.newsBy') }}:</span><a href="{{ url('/author/'.$new3['author_id']) }}" title="{{ \App\Author::find($new3['author_id'])['name_'.lang()] }}">{{ \App\Author::find($new3['author_id'])['name_'.lang()] }}</a></div>
                </div>
                <h2><a href="{{ url('/news/'.$new3['id']) }} " title="{{ $new3['title_'.lang()] }}">{{ $new3['title_'.lang()] }}</a></h2>
            </div>
        </div>
        @endif
        @if(isset($new4['id']))
        <div class="postItem">
            <div class="postIMG">
                <a href="{{ url('/news/'.$new4['id']) }}" title="{{ $new4['title_'.lang()] }}">
                    <img src="{{ Storage::url($new4['img']) }}"
                        alt="{{ $new4['title_'.lang()] }}">
                </a>
            </div>
            <div class="postText">
                <div class="postDetails">
                    <div class="date">{{ $new1['month_name_'.lang()] }} {{ $new1['year'] }}</div>
                    <div class="by"><span>{{ trans('admin.newsBy') }}:</span><a href="{{ url('/author/'.$new4['author_id']) }}" title="{{ \App\Author::find($new4['author_id'])['name_'.lang()] }}">{{ \App\Author::find($new4['author_id'])['name_'.lang()] }}</a></div>
                </div>
                <h2>
                    <a href="{{ url('/news/'.$new4['id']) }}"
                        title="{{ $new4['title_'.lang()] }}">{{ $new4['title_'.lang()] }}
                    </a>
                </h2>
            </div>
        </div>
        @endif
    </div>
</div>
