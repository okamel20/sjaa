@extends('admin.index')
@section('content')
<div class="main-content">
  <!-- Row start -->
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header">{{ $title }} </div>
            <div class="card-body">
            {!! Form::open(['url'=>adminUrl('news'),'files'=>true]) !!}

            <div class="form-group col-lg-12">
              <label>{{ trans('admin.author') }}</label>
              <select class="form-control" required="" name="author_id">
                @foreach(\App\Author::all() as $author)
                <option value="{{ $author->id }}">{{ $author['name_'.lang()] }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group col-lg-12">
              <label> عنوان الخبر بالعربى </label>
              <input type="text" name="title_ar" class="form-control" placeholder="عنوان الخبر بالعربى" required value="{{ old('title_ar') }}">
            </div>
            <div class="form-group col-lg-12">
              <label> عنوان الخبر  انجليزى </label>
              <input type="text" name="title_en" class="form-control" placeholder="عنوان الخبر  انجليزى" required value="{{ old('title_en') }}">
            </div>
            
            <div class="form-group col-lg-12">
              <label> {{ trans('admin.img') }} </label>
              <input type="file" name="img" class="form-control" placeholder="{{ trans('admin.img') }}" required="" accept="image/x-png,image/gif,image/jpeg">
            </div>

            <div class="form-group col-md-12">
              <label class="col-form-label "> مجتوى الخبر بالعربى</label>
              <textarea class="form-control ckeditor" required="" name="content_ar" rows="10">{{ old('content_ar') }}</textarea>
            </div>

            <div class="form-group col-md-12">
              <label class="col-form-label"> محتوى الخبر بالانجليزى </label>
              <textarea class="form-control ckeditor" required="" name="content_en" rows="10">{{ old('content_en') }}</textarea>
            </div>
            <div class="form-group col-lg-12">
              <label>انتقال للصفحة </label>
              <select name="page_num" required="" class="form-control">
                <option value="0">لمحتوى الخبر</option>
                @foreach(\App\Page::all() as $page)
                <option value="{{ $page['id'] }}">{{ $page['title_ar'] }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group col-lg-12">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary">
                  <input type="radio" name="active" id="option2" value="0" autocomplete="off"> {{ trans('admin.noActvided') }}
                </label>
                <label class="btn btn-secondary active">
                  <input type="radio" name="active" id="option1" value="1" autocomplete="off" checked> {{ trans('admin.actvided') }}
                </label>
              </div>
            </div>
            {!! Form::submit(trans('admin.send'),['class'=>'btn btn-primary ']) !!}
            {!! Form::close() !!}
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

    


  @section('script')
    <script src="{{ url('/public/admin/plugins/ckeditor/') }}/ckeditor.js"></script>
  
  @endsection
@endsection