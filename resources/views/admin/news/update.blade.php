@extends('admin.index')
@section('content')
<div class="main-content">
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header">{{ $title }} </div>
            <div class="card-body">
              {!! Form::open(['url'=>adminUrl('news/'.$data->id),'method'=>'put','files'=>true]) !!}

                <div class="form-group col-lg-12">
                  <label>الكاتب</label>
                  <select class="form-control" required="" name="author_id">
                    @foreach(\App\Author::all() as $author)
                    <option value="{{ $author->id }}" @if($data->author_id == $author->id) selected="" @endif>{{ $author['name_'.lang()] }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group col-lg-12">
                  <label> عنوان الخبر بالعربى </label>
                  <input type="text" name="title_ar" class="form-control" placeholder="عنوان الخبر بالعربى" required value="{{ oldOrValue('title_ar',$data) }}">
                </div>
                <div class="form-group col-lg-12">
                  <label> عنوان الخبر  انجليزى </label>
                  <input type="text" name="title_en" class="form-control" placeholder="عنوان الخبر  انجليزى" required value="{{ oldOrValue('title_en',$data) }}">
                </div>

                <div class="form-group col-lg-12">
                  <label> {{ trans('admin.img') }} </label>
                  <img src="{{ Storage::url($data->img) }}" class="img-responsive clearfix" width="100px" height="100px">
                  <br>
                  <input type="file" name="img" class="form-control" placeholder="{{ trans('admin.img') }}" accept="image/x-png,image/gif,image/jpeg">
                </div>
                
                <div class="form-group col-md-12">
                  <label class="col-form-label"> مجتوى الخبر بالعربى</label>
                  <textarea class="form-control ckeditor" required="" name="content_ar" rows="10">{{ oldOrValue('content_ar',$data) }}</textarea>
                </div>

                <div class="form-group col-md-12">
                  <label class="col-form-label"> محتوى الخبر بالانجليزى </label>
                  <textarea class="form-control ckeditor" required="" name="content_en" rows="10">{{ oldOrValue('content_en',$data) }}</textarea>
                </div>

                <div class="form-group col-lg-12">
                  <label>انتقال للصفحة </label>
                  <select name="page_num" required="" class="form-control">
                    <option value="0" @if($data['page_num'] == 0) selected="" @endif>لمحتوى الخبر</option>
                    @foreach(\App\Page::all() as $page)
                    <option value="{{ $page['id'] }}" @if($data['page_num'] == $page['id']) selected="" @endif>{{ $page['title_ar'] }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group col-lg-12 ">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary @if($data->active == 0) active @endif">
                      <input type="radio" name="active" id="option2" value="0" autocomplete="off"@if($data->active == 0) checked="" @endif> {{ trans('admin.noActvided') }}
                    </label>
                    <label class="btn btn-secondary @if($data->active == 1) active @endif">
                      <input type="radio" name="active" id="option1" value="1" autocomplete="off" @if($data->active == 1) checked="" @endif> {{ trans('admin.actvided') }}
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