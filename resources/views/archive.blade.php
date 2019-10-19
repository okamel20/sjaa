@extends('home')
@section('content')
     <section class="pageHolder archivePage">
        <div class="container">
            <div class="pageTitle">
                <h1>{{ trans('admin.archive') }}</h1>
            </div>
           {{--  <div class="archiveHolder" id="filterOptions">
                <div class="filterOptions">
                    <span class="filterOptionTitle">{{ trans('admin.filteryear') }}</span>

                    <select id="byYear" class="filterButton">
                        <option value="0">{{ trans('admin.year') }}</option>
                        @for($i = 2014 ; $i <= \Carbon\Carbon::now()->year ; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>

                    <select id="byMonth" class="filterButton">
                        <option value="0">{{ trans('admin.month') }}</option>
                        <option value="Jan">{{ trans('admin.Jan') }}</option>
                        <option value="Feb">{{ trans('admin.Feb') }}</option>
                        <option value="Mar">{{ trans('admin.Mar') }}</option>
                        <option value="Apr">{{ trans('admin.Apr') }}</option>
                        <option value="May">{{ trans('admin.May') }}</option>
                        <option value="Jun">{{ trans('admin.Jun') }}</option>
                        <option value="Jul">{{ trans('admin.Jul') }}</option>
                        <option value="Aug">{{ trans('admin.Aug') }}</option>
                        <option value="Sep">{{ trans('admin.Sep') }}</option>
                        <option value="Oct">{{ trans('admin.Oct') }}</option>
                        <option value="Nov">{{ trans('admin.Nov') }}</option>
                        <option value="Dec">{{ trans('admin.Dec') }}</option>
                    </select>

                    <select id="byDay" class="filterButton">
                        <option value="0">{{ trans('admin.day') }}</option>
                        <option value="Sunday">{{ trans('admin.Sunday') }}</option>
                        <option value="Monday">{{ trans('admin.Monday') }}</option>
                        <option value="Tuesday">{{ trans('admin.Tuesday') }}</option>
                        <option value="Wednesday">{{ trans('admin.Wednesday') }}</option>
                        <option value="Thursday">{{ trans('admin.Thursday') }}</option>
                        <option value="Friday">{{ trans('admin.Friday') }}</option>
                        <option value="Saturday">{{ trans('admin.Saturday') }}</option>
                    </select>
                    
                </div>
                <div class="filterItems">
                    <div class="row">
                        @foreach($archives as $archive)
                        <div class="col-12 col-md-6 col-lg-3 filterItem {{ date('Y', strtotime($archive->date)) }} {{ date('M', strtotime($archive->date)) }} {{ date('l', strtotime($archive->date)) }}">
                            <div class="itemHolder">
                                <div class="IMG">
                                    <img src="{{url('/public/web')}}/img/archive-item.png" alt="">
                                </div>
                                <div class="itemHover">
                                    <div class="itemLinks">
                                        <a href="{{ Storage::url($archive['pdf_file']) }}" title="{{ trans('admin.download') }}" class="whiteButton download" download>
                                            <i class="material-icons">file_download</i>
                                            <span> {{ trans('admin.download') }}</span>
                                        </a>
                                        <a href="{{ Storage::url($archive['pdf_file']) }}" title="{{ trans('admin.show') }}" class="whiteButton view" target="_blank">
                                            <i class="material-icons">receipt</i>
                                            <span>{{ trans('admin.show') }}</span>
                                        </a>
                                    </div>
                                    <div class="hoverIcon">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
            {{-- <div class="loadMore text-center">
                <a href="#" class="primaryButton" title="تحميل المزيد">تحميل المزيد</a>
            </div> --}}

            <ul class="infoList">
                <li class="listItem">
                    <p>{{ trans('admin.archivecontent') }}</p>
                </li>
            </ul>
        </div>
    </section>
@endsection