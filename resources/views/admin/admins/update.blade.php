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
              {!! Form::open(['url'=>adminUrl('admins/'.$data->id),'method'=>'put','files'=>true]) !!}

                <div class="form-group col-lg-12">
                  <label>{{trans('admin.adminType')}}</label>
                  <select class="form-control" required="" name="group_id">
                    @foreach(\App\Group::all() as $group)
                    <option value="{{ $group->id }}" @if($data->group_id == $group->id) selected="" @endif>{{ $group['group_name_'.lang()] }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group col-lg-12">
                  <label> {{ trans('admin.adminName') }} </label>
                  <input type="text" name="name" class="form-control" placeholder="{{ trans('admin.adminName') }}" required value="{{ oldOrValue('name',$data) }}">
                </div>
                <div class="form-group col-lg-12">
                  <label> {{ trans('admin.email') }} </label>
                  <input type="email" name="email" class="form-control" placeholder="{{ trans('admin.email') }}" required value="{{ oldOrValue('email',$data) }}">
                </div>

                 <div class="form-group col-lg-12">
                  <label> {{ trans('admin.img') }} </label>
                  <img src="{{ Storage::url($data->img) }}" class="img-responsive clearfix" width="100px" height="100px">
                  <br>
                  <input type="file" name="img" class="form-control" placeholder="{{ trans('admin.img') }}" accept="image/x-png,image/gif,image/jpeg">
                  
                </div>

                
                <div class="form-group col-lg-12">
                  <label> {{ trans('admin.password') }} </label>
                  <input type="password" name="password" class="form-control" placeholder="{{ trans('admin.password') }}" >
                  
                </div>

                <div class="form-group col-lg-12">
                  <label> {{ trans('admin.passwordRe') }} </label>
                  <input type="password" name="repassword" class="form-control" placeholder="{{ trans('admin.passwordRe') }}" >
                  
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