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
              {!! Form::open(['url'=>adminUrl('pagecontents/'.$data->id),'method'=>'put','files'=>true]) !!}

                <div class="form-group col-lg-12">
                  <label> عنوان  المحتوى بالعربى </label>
                  <input type="text" name="title_ar" class="form-control" placeholder="عنوان  المحتوى بالعربى" required value="{{ oldOrValue('title_ar',$data) }}">
                </div>
                <div class="form-group col-lg-12">
                  <label> عنوان  المحتوى  انجليزى </label>
                  <input type="text" name="title_en" class="form-control" placeholder="عنوان  المحتوى  انجليزى" required value="{{ oldOrValue('title_en',$data) }}">
                </div>
                

                <div class="form-group col-md-12">
                  <label class="col-form-label"> نص المحتوى بالعربى</label>
                  <textarea class="form-control ckeditor" required="" name="content_ar" rows="10" required="">{{ oldOrValue('content_ar',$data) }}</textarea>
                </div>

                <div class="form-group col-md-12">
                  <label class="col-form-label"> مص المحتوى بالانجليزى </label>
                  <textarea class="form-control ckeditor" required="" name="content_en" rows="10" required="">{{ oldOrValue('content_en',$data) }}</textarea>
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