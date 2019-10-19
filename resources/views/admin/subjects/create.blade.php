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
            {!! Form::open(['url'=>adminUrl('subjects'),'files'=>true]) !!}

            <div class="form-group col-lg-12">
              <label> عنوان  الموضوع بالعربى </label>
              <input type="text" name="title_ar" class="form-control" placeholder="عنوان  الموضوع بالعربى" required value="{{ old('title_ar') }}">
            </div>
            <div class="form-group col-lg-12">
              <label> عنوان  الموضوع  انجليزى </label>
              <input type="text" name="title_en" class="form-control" placeholder="عنوان  الموضوع  انجليزى" required value="{{ old('title_en') }}">
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
  
  @endsection
@endsection