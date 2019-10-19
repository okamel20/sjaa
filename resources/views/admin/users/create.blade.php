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
            {!! Form::open(['url'=>adminUrl('users'),'files'=>true]) !!}

            <div class="form-group col-lg-12">
              <label> {{ trans('admin.adminName') }} </label>
              <input type="text" name="name" class="form-control" placeholder="{{ trans('admin.adminName') }}" required value="{{ old('name') }}">
            </div>
            <div class="form-group col-lg-12">
              <label> {{ trans('admin.email') }} </label>
              <input type="email" name="email" class="form-control" placeholder="{{ trans('admin.email') }}" required value="{{ old('email') }}">
            </div>
            
            <div class="form-group col-lg-12">
              <label> {{ trans('admin.password') }} </label>
              <input type="password" name="password" class="form-control" placeholder="{{ trans('admin.password') }}" required="">
            </div>

            <div class="form-group col-lg-12">
              <label> {{ trans('admin.passwordRe') }} </label>
              <input type="password" name="repassword" class="form-control" placeholder="{{ trans('admin.passwordRe') }}" required="">
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