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
            {!! Form::open(['url'=>adminUrl('pages'),'files'=>true]) !!}

            <div class="form-group col-lg-12">
              <label> عنوان  الصفحة بالعربى </label>
              <input type="text" name="title_ar" class="form-control" placeholder="عنوان  الصفحة بالعربى" required value="{{ old('title_ar') }}">
            </div>
            <div class="form-group col-lg-12">
              <label> عنوان  الصفحة  انجليزى </label>
              <input type="text" name="title_en" class="form-control" placeholder="عنوان  الصفحة  انجليزى" required value="{{ old('title_en') }}">
            </div>
            
            <div class="form-group col-md-12">
              <label class="col-form-label"> مجتوى  الصفحة بالأعلى بالعربى</label>
              <textarea class="form-control ckeditor" required="" name="text_start_ar" rows="10">{{ old('text_start_ar') }}</textarea>
            </div>

            <div class="form-group col-md-12">
              <label class="col-form-label"> محتوى  الصفحة بالأعلى بالانجليزى </label>
              <textarea class="form-control ckeditor" required="" name="text_start_en" rows="10">{{ old('text_start_en') }}</textarea>
            </div>

            <div class="form-group col-md-12">
              <label class="col-form-label"> مجتوى  الصفحة بالأسفل بالعربى</label>
              <textarea class="form-control ckeditor" required="" name="end_text_ar" rows="10">{{ old('end_text_ar') }}</textarea>
            </div>

            <div class="form-group col-md-12">
              <label class="col-form-label"> محتوى  الصفحة بالأسفل بالانجليزى </label>
              <textarea class="form-control ckeditor" required="" name="end_text_en" rows="10">{{ old('end_text_en') }}</textarea>
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